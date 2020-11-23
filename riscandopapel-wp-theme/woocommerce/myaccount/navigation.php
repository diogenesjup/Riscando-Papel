<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<div class="row">
	

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					
					<nav class="woocommerce-MyAccount-navigation sidebar">
						<ul>
							
							<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>

								<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
									<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php 
									
									
									   echo esc_html( $label );
								

									

									?> <i class="fa fa-angle-right"></i></a>
								</li>
						
							<?php endforeach; ?>
							
							<!--
							<li>
								<a href="javascript:void(0)" title="Suas assinaturas">
								   Assinaturas <i class="fa fa-angle-right"></i>
								</a>				
							</li>
						    -->

						</ul>
					</nav>


				</div>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
