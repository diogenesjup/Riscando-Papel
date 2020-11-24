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
	

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar sidebar-minha-conta">
					
					<h3>Olá, Diogenes</h3>
	                 <nav>
	                    <ul>
	                        <li><a href="<?php echo get_option('home'); ?>/minha-conta/"><i class="fa fa-user"></i> Minha conta</a></li>
	                        <li><a href="<?php echo get_option('home'); ?>/minha-conta/orders/"><i class="fa fa-archive"></i> Meus pedidos</a></li>
	                        <!--<li><a href="#"><i class="fa fa-heart"></i> Favoritos</a></li>-->
	                        <li><a href="<?php echo get_option('home'); ?>/minha-conta/edit-address/"><i class="fa fa-home"></i> Meus endereços</a></li>
	                        <li><a href="<?php echo get_option('home'); ?>/minha-conta/edit-account/"><i class="fa fa-pencil-square-o"></i> Dados pessoais</a></li>
	                        <!--<li><a href="#"><i class="fa fa-usd"></i> Meus créditos</a></li>-->
	                        <li><a href="<?php echo get_option('home'); ?>/minha-conta/customer-logout/?_wpnonce=fd4a690865"><i class="fa fa-sign-out"></i> Sair</a></li>
	                    </ul>
	                </nav>

                   <!--
					<nav class="woocommerce-MyAccount-navigation sidebar">
						<ul>
							
							<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>

								<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
									<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php 
									
									
									   echo esc_html( $label );
								

									

									?> <i class="fa fa-angle-right"></i></a>
								</li>
						
							<?php endforeach; ?>
							

						</ul>
					</nav>
				-->


				</div>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
