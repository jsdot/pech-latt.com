<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );        // Remove the description tab
    unset( $tabs['reviews'] );      // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;
}


// ACF Tabs 
if (class_exists('acf') && class_exists('WooCommerce')) {
  add_filter('woocommerce_product_tabs', function($tabs) {
    global $post, $product;  // Access to the current product or post
    
    $custom_tabs_repeater = get_field('custom_tabs', $post->ID);
 
    if (!empty($custom_tabs_repeater)) {
      $counter = 0;
      $start_at_priority = 10;
      foreach ($custom_tabs_repeater as $custom_tab) {
        $tab_id = $counter . '_' . sanitize_title($custom_tab['tab_title']);
        
        $tabs[$tab_id] = [
          'title' => $custom_tab['tab_title'],
          'callback' => 'awp_custom_woocommerce_tabs',
          'priority' => $start_at_priority++
        ];
        $counter++;
      }
    }
    return $tabs;
  });
 
  function awp_custom_woocommerce_tabs($key, $tab) {
    global $post;
 
    $custom_tabs_repeater = get_field('custom_tabs', $post->ID);
    
    $tab_id = explode('_', $key);
    $tab_id = $tab_id[0];
 
    echo $custom_tabs_repeater[$tab_id]['tab_content'];
  }
}


add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'cinchws_filter_dropdown_args', 10 );

function cinchws_filter_dropdown_args( $args ) {
    $args['show_option_none'] = 'CHOISIR VOTRE MILLÉSIME';
    return $args;
}








add_action( 'wp_footer', 'cart_update_qty_script' ); 
function cart_update_qty_script() { 
    if (is_cart()) : 
    ?> 
    <script>
    jQuery( 'div.woocommerce' ).on( 'change', '.qty', function () {
    jQuery( "[name='update_cart']" ).prop('disabled', false).trigger( "click" );
    } );
    </script>
    <?php 
    endif; 
}


add_action( 'woocommerce_reset_variations_link' , 'sd_change_clear_text', 15 );
function sd_change_clear_text() {
   echo '<a class="reset_variations" href="#">' . esc_html__( 'Changer de Millésime', 'woocommerce' ) . '</a>';
 
}


add_filter( 'woocommerce_dropdown_variation_attribute_options_html', 'filter_dropdown_option_html', 12, 2 );
function filter_dropdown_option_html( $html, $args ) {
    $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'ACHETER', 'woocommerce' );
    $show_option_none_html = '<option value="">' . esc_html( $show_option_none_text ) . '</option>';

    $html = str_replace($show_option_none_html, '', $html);

    return $html;
}

add_filter( 'wp_lazy_loading_enabled', '__return_false' );

function custom_wc_translations($translated){
    $text = array(
    'Your order' => 'Votre commande',
    'any other string' => 'New string',
    );
    $translated = str_ireplace(  array_keys($text),  $text,  $translated );
    return $translated;
}

add_shortcode( 'show_single_product_distinctions', 'display_single_product_acf_distinctions' );
function display_single_product_acf_distinctions() {
    $rows = get_field('notes');
    if(!$rows) return;
    
    echo "<div class='notes-distinctions-single-product'>";
    foreach( $rows as $row ) {
        if ($row['evaluateur'] && $row['notation']) {
            
            $evaluateur = $row['evaluateur'];
            $notation = $row['notation'];
            
            echo 
                "<article class='note'>
                    <h3>$evaluateur : </h3>
                    <span>$notation</span>
                </article>";
        }            
    }
    echo "</div>";
}


add_shortcode('if', 'if_statement');
function if_statement($atts, $content)
{
  if (empty($atts)) return '';

  $callable = array_shift($atts);
  if (is_callable($callable)) {
    $condition = (bool)call_user_func_array($callable, $atts);
  } else {
    throw new Excaption('First argument must be callable!');
  }

  $else = '[else]';
  if (strpos($content, $else) !== false) {
    list($if, $else) = explode($else, $content, 2);
  } else {
    $if = $content;
    $else = "";
  }

  return do_shortcode($condition ? $if : $else);
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );


function is_single_product_acf_distinction() {    
    return get_field('notes') ? true : false; 
}


function preload_styles() {
    $href = 'https://use.typekit.net/pfa6ebg.css';
    echo '<link rel="preload" as="style" id="main-css" href="'.$href.'" type="text/css/">';
}
add_action( 'wp_head','preload_styles', 10);


function escape_html_title($atts) {
    global $post;
    
    // Get the post title and strip HTML tags
    $title = wp_strip_all_tags(get_the_title($post->ID));
    
    return $title;
}
add_shortcode('escaped_title', 'escape_html_title');


if( !function_exists('yith_wcan_all_filters_label') ){

  add_filter('yith_wcan_all_filters_label', 'yith_wcan_all_filters_label');

  function yith_wcan_all_filters_label(){
    return "Choisir";
  }

}


add_filter( 'woocommerce_single_product_image_thumbnail_html', function ( $html, $post_thumbnail_id ) {
	global $product;

	if ( $post_thumbnail_id === $product->get_image_id() )
		$html = '';

	return $html;
}, 10, 2 );


// change wooGallery thumbnail size 
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'cg_woocommerce_image_size_gallery_thumbnail', 99 );
function cg_woocommerce_image_size_gallery_thumbnail( $size ) {
    return array(
        'width'  => 600,
        'height' => 600,
        'crop'   => 1,
    );
}


add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
	return array(
		'width'  => 630,
		'height' => 891,
		'crop'   => 1,
	);
} );

if(!function_exists('yith_wcan_change_reset_filter_text')){

 add_filter( 'yith_wcan_filter_reset_button', 'yith_wcan_change_reset_filter_text');

 function yith_wcan_change_reset_filter_text(){
   return 'TOUS';
 }
}

function fix_load_more_pagination_ajax() {
    wp_localize_script( 'elementor-frontend', 'loadmore_params', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ), // URL correcte pour les requêtes AJAX
    ));
}
add_action( 'wp_enqueue_scripts', 'fix_load_more_pagination_ajax' );

function defer_complianz_script($tag, $handle) {
    if ('cmplz-cookiebanner-js' === $handle || 'cmplz-cookiebanner-js-extra' === $handle) {
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'defer_complianz_script', 10, 2);


// Filtrer le texte pour enlever les backslashes dans la sortie du plugin
function remove_backslashes_from_asl($content) {
    // Enlever les backslashes avant les apostrophes
    $content = stripslashes($content);
    
    // Retourner le contenu nettoyé
    return $content;
}

// Appliquer ce filtre à l'affichage des résultats du plugin ASL Store Locator
add_filter('asl_store_locator_output', 'remove_backslashes_from_asl');



add_action( 'after_setup_theme', 'disable_woocommerce_zoom_feature', 100 );
function disable_woocommerce_zoom_feature() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}