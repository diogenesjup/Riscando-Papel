<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
<p>&nbsp;</p>
<div class="u-columns col2-set" id="customer_login">

	<div class="u-column11 col-11">

<?php endif; ?>

		<div class="row">

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                <h2>Acesse sua conta</h2>

        <form method="post" action="<?php echo get_option('home'); ?>/wp-login.php">
                    <!--
                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="fb20d7d5b3">
                    <input type="hidden" name="_wp_http_referer" value="<?php echo get_option('home'); ?>/minha-conta/">    
                    -->
                    <div class="form-group">
                        <input type="text" name="log" required class="form-control" placeholder="Seu e-mail" autocomplete="new-login">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" required class="form-control" placeholder="Sua senha" autocomplete="new-pass">
                    </div>
                    <div class="form-group">
                        <small>
                            <a href="<?php echo get_option('home'); ?>/minha-conta/lost-password/" title="Esqueci a minha senha">Esqueci minha senha.</a>
                        </small>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <p class="the-check">
                              <input type="checkbox" id="mantenhaConectado" name="rememberme" value="forever" />
                              <label for="mantenhaConectado">Mantenha-me conectado.</label>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right">
                            <button type="submit" class="btn btn btn-primary btn-extra-cadastro" style="margin-top: -15px;">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>      
        

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	

	<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">

		<h2>Cadastre-se</h2>

	
			
            
            <form method="post" class="woocommerce-form woocommerce-form-register register" style="background: #f2f2f2;">

            <?php do_action( 'woocommerce_register_form_start' ); ?>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="reg_username"><?php esc_html_e( 'Usuário', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                </p>

            <?php endif; ?>

            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="reg_email"><?php esc_html_e( 'E-mail', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </p>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="reg_password"><?php esc_html_e( 'Senha', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="reg_password" autocomplete="new-password" />
                </p>

            <?php endif; ?>

            <?php do_action( 'woocommerce_register_form' ); ?>

            <p class="woocommerce-FormRow form-row">
                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                <button type="submit" style="color:#fff !important;" class="woocommerce-Button button btn btn-primary" name="register" value="<?php esc_attr_e( 'Cadastrar', 'woocommerce' ); ?>"><?php esc_html_e( 'Cadastrar', 'woocommerce' ); ?></button>
            </p>

            <?php do_action( 'woocommerce_register_form_end' ); ?>

        </form>
		    
            


	</div>


<?php endif; ?>

</div>

</div>
</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>