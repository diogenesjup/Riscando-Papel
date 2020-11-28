<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="row" id="customer_details">


			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 colunas-woocommerce-novas">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<!--B.2 <?php do_action( 'woocommerce_checkout_shipping' ); ?>-->
			</div>
			
           
            <!-- REVISÃO DO PEDIDO -->
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 colunas-woocommerce-novas">

				    <h3 id="order_review_heading">
					Revisão do pedido
					</h3> 
                    <h5>Confirme seus produtos e frete</h5>
				
	                
                  <table class="shop_table woocommerce-checkout-review-order-table">
						<thead>
							<tr>
								<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
								<th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php
								do_action( 'woocommerce_review_order_before_cart_contents' );

								foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
									$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

									if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
										?>
										<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
											<td class="product-name">
												<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
												<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
												<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
											</td>
											<td class="product-total">
												<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
											</td>
										</tr>
										<?php
									}
								}

								do_action( 'woocommerce_review_order_after_cart_contents' );
							?>
						</tbody>
						<tfoot>

							<tr class="cart-subtotal">
								<th><?php _e( 'Subtotal', 'woocommerce' ); ?></th>
								<td><?php wc_cart_totals_subtotal_html(); ?></td>
							</tr>

							<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
								<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
									<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
									<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
								</tr>
							<?php endforeach; ?>

							<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

								<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

								<?php wc_cart_totals_shipping_html(); ?>

								<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

							<?php endif; ?>

							<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
								<tr class="fee">
									<th><?php echo esc_html( $fee->name ); ?></th>
									<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
								</tr>
							<?php endforeach; ?>

							<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
								<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
									<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
										<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
											<th><?php echo esc_html( $tax->label ); ?></th>
											<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
										</tr>
									<?php endforeach; ?>
								<?php else : ?>
									<tr class="tax-total">
										<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
										<td><?php wc_cart_totals_taxes_total_html(); ?></td>
									</tr>
								<?php endif; ?>
							<?php endif; ?>

							<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

							<tr class="order-total">
								<th><?php _e( 'Total', 'woocommerce' ); ?></th>
								<td><?php wc_cart_totals_order_total_html(); ?></td>
							</tr>

							<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

						</tfoot>
					</table>

					<p>&nbsp;</p>

					<!-- FORMA DE PAGAMENTO -->
					<div class="apenas-pagamento colunas-woocommerce-novas">

						<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
						
						<h3 id="order_review_heading">
							Pagamento
						</h3>
		                <h5>
		                	Com toda a segurança e tecnologia.
		                </h5>
		            

						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
						<div id="order_review" class="woocommerce-checkout-review-order">
							<?php do_action( 'woocommerce_checkout_order_review' ); ?>
						</div>
						<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
						
					</div>
					<!-- FORMA DE PAGAMENTO -->
				
			</div>
			<!-- REVISÃO DO PEDIDO -->



			


		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
