<?php
/* WIDGETS */
//SUPORTE PARA FEATURED IMAGES
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
//DEFINIÇÃO DO TAMANHO DA IMAGEM
set_post_thumbnail_size(100, 75, true);
//SUPORTE PARA THEMES FORMAT
add_theme_support( 'post-formats', array( 'aside', 'gallery','status','video') );
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}



// PAGINAÇÃO
function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }



add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;

  return $cols;

}

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

function the_dramatist_custom_login_css() {
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('login_head', 'the_dramatist_custom_login_css');

add_theme_support( 'woocommerce' );


// ALTERAR BOTÃO COMPRAR, POR QUE USANDO VARIAÇÕES ESTÁ FICANDO COMO "VER OPÇÕES"
function custom_woocommerce_product_add_to_cart_text( $text ) {
  return __( 'Comprar' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'custom_woocommerce_product_add_to_cart_text' );



// REDIRECT TO CHECKOUT PAGE ON CART
/*
add_filter ('add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}
*/


/**
 * Add new register fields for WooCommerce registration.
 *
 * @return string Register fields HTML.
 */
function cs_wc_extra_register_fields() {
    ?>
    <p class="form-row form-row-first">
        <label for="reg_billing_first_name"><?php _e( 'Nome', 'textdomain' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text form-control" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </p>
    <p class="form-row form-row-last">
        <label for="reg_billing_last_name"><?php _e( 'Sobrenome', 'textdomain' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text form-control" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
    </p>
    <?php
}
add_action( 'woocommerce_register_form_start', 'cs_wc_extra_register_fields' );
/**
 * Validate the extra register fields.
 *
 * @param  string $username          Current username.
 * @param  string $email             Current email.
 * @param  object $validation_errors WP_Error object.
 *
 * @return void
 */
function cs_wc_validate_extra_register_fields( $username, $email, $validation_errors ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $validation_errors->add( 'billing_first_name_error', __( '<strong>Erro</strong>: Digite o seu nome.', 'textdomain' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $validation_errors->add( 'billing_last_name_error', __( '<strong>Erro</strong>: Digite o seu sobrenome.', 'textdomain' ) );
    }
}
add_action( 'woocommerce_register_post', 'cs_wc_validate_extra_register_fields', 10, 3 );
/**
 * Save the extra register fields.
 *
 * @param  int  $customer_id Current customer ID.
 *
 * @return void
 */
function cs_wc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        // WordPress default first name field.
        update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        // WooCommerce billing first name.
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        // WordPress default last name field.
        update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        // WooCommerce billing last name.
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
    }
}
add_action( 'woocommerce_created_customer', 'cs_wc_save_extra_register_fields' );




// MELHORAR ESTILOS FORMULARIOS FINALIZAÇÃO DE CADASTRO
add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            //$field['class'][] = 'form-group';

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}





add_action( 'init', 'crunchify_create_deals_custom_taxonomy2', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy2() {
 
  $labels = array(
    'name' => _x( 'Marca produto', 'marca_produtos' ),
    'singular_name' => _x( 'Marca produto', 'marca_produtos' ),
    'search_items' =>  __( 'Pesquisar marca produto' ),
    'all_items' => __( 'Todas as marcas' ),
    'parent_item' => __( 'Marca produto pai' ),
    'parent_item_colon' => __( 'Marca produto pai:' ),
    'edit_item' => __( 'Editar Marca produto' ), 
    'update_item' => __( 'Atualizar marca produto' ),
    'add_new_item' => __( 'Adicionar marca produto' ),
    'new_item_name' => __( 'Nova marca produto' ),
    'menu_name' => __( 'Marca produto' ),
  );  
 
  register_taxonomy('marca_produtos',array('product'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'marca_produtos' ),
  ));
}






function wp_get_menu_array($current_menu) {
 
    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();

    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
           
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['class']       =   $m->class;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
        

    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['class']       =   $m->class;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
     
}



function show_stock() {
    global $product;
    if ( $product->get_stock_quantity() ) { // if manage stock is enabled 
    if ( number_format($product->get_stock_quantity(),0,'','') < 3 ) { // if stock is low
    echo '<div class="remaining">Apenas ' . number_format($product->get_stock_quantity(),0,'','') . ' no estoque!</div>';
    } else {
    echo '<div class="remaining">' . number_format($product->get_stock_quantity(),0,'','') . ' em estoque</div>'; 
            }
        }
}



function parcelamento($regular,$sale){
       
       $preco = $regular;
       if($sale!="") $preco = $sale;
       
       $parcelas = 6;

       $preco_parcelado = $preco / $parcelas;

       if($preco_parcelado<10):
          
          $parcelas = 2; 
          $preco_parcelado = $preco / $parcelas;

       endif;

       if($preco_parcelado<10):
          
          $parcelas = 1; 
          $preco_parcelado = $preco / $parcelas;

       endif;
       
       return $parcelas."x de <b>R$ ".number_format($preco_parcelado,2,",",".")."</b> no cartão";

}


function parcelamentoValor($regular,$sale){
       
       $preco = $regular;
       if($sale!="") $preco = $sale;
       
       $parcelas = 3;

       $preco_parcelado = $preco / $parcelas;

       if($preco_parcelado<10):
          
          $parcelas = 2; 
          $preco_parcelado = $preco / $parcelas;

       endif;

       if($preco_parcelado<10):
          
          $parcelas = 1; 
          $preco_parcelado = $preco / $parcelas;

       endif;
       
       return number_format($preco_parcelado,2,",",".");

}


function parcelamentoValorParcela($regular,$sale,$parcelas){
       
       $preco = $regular;
       if($sale!="") $preco = $sale;
       
       $preco_parcelado = $preco / $parcelas;
  
       return $parcelas."x de R$ ".number_format($preco_parcelado,2,",",".")." sem juros";

}

add_filter( 'woocommerce_show_variation_price', '__return_true' );





// ESTAMOS REDUZINDO O NÚMERO DE PALAVRAS E NAO DE CARACTERES
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );



// CONTAR A QUANTIDADE DE VIEWS DO POST
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 visualizações";
    }
    return $count.' visualizações';
}


function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/**
 * Disable the emoji's
 */
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );  
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function get_free_shipping_minimum($zone_name = 'Brasil', $zone_name2 = 'OSASCO E COTIA') {
    if ( ! isset( $zone_name ) ) return null;

    $result = null;
    $zone = null;

    $zones = WC_Shipping_Zones::get_zones();
    foreach ( $zones as $z ) {
        if ( $z['zone_name'] == $zone_name ||  $z['zone_name'] == $zone_name2) {
            $zone = $z;
        }
    }

    if ( $zone ) {
        $shipping_methods_nl = $zone['shipping_methods'];
        $free_shipping_method = null;
        foreach ( $shipping_methods_nl as $method ) {
            if ( $method->id == 'free_shipping' ) {
                $free_shipping_method = $method;
                break;
            }
        }

        if ( $free_shipping_method ) {
            $result = $free_shipping_method->min_amount;
        }
    }

    return $result;
}


?>