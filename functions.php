<?php 

function wpt_register_js() {
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', 'jquery');	
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');	
	wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery');

  wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('main');
}

add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style( 'font-awesome' );
}

add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
register_nav_menus( array(
	'top_menu' => 'Top menu',
	'left_menu' => 'Left menu',
	'social_menu' => 'Social menu',
) );

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="nav collapse"/',$menu);        
    return $menu;      
} 
add_filter('wp_nav_menu','new_submenu_class');

// WooCommerce Checkout Fields Hook

add_filter('woocommerce_checkout_fields', 'custom_woocommerce_checkout_fields');

function custom_woocommerce_checkout_fields( $fields ) {

	$fields['billing']['billing_company']['class'] = array( 'form-row-first' );
	$fields['billing']['billing_country']['class'] = array( 'form-row-last' );
	$fields['billing']['billing_address_1']['class'] = array( 'form-row-first' );
	$fields['billing']['billing_city']['class'] = array( 'form-row-last' );
	$fields['billing']['billing_state']['class'] = array( 'form-row-first' );
	$fields['billing']['billing_postcode']['class'] = array( 'form-row-last' );

	$fields['shipping']['shipping_company']['class'] = array( 'form-row-first' );
	$fields['shipping']['shipping_country']['class'] = array( 'form-row-last' );
	$fields['shipping']['shipping_address_1']['class'] = array( 'form-row-first' );
	$fields['shipping']['shipping_city']['class'] = array( 'form-row-last' );
	$fields['shipping']['shipping_state']['class'] = array( 'form-row-first' );
	$fields['shipping']['shipping_postcode']['class'] = array( 'form-row-last' );
	return $fields;
}
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'mmx_remove_select_text');

function mmx_remove_select_text( $args ){ $args['show_option_none'] = ''; return $args; }

//// Display Fields
//add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
//
//// Save Fields
//add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );
//
//function woo_add_custom_general_fields() {
//
//	global $woocommerce, $post;
//
//	echo '<div class="options_group">';
//
//	// Custom fields will be created here...
//	// Textarea
//	woocommerce_wp_textarea_input(
//		array(
//			'id'          => '_textarea',
//			'label'       => __( '3rd column description', 'woocommerce' ),
//			'placeholder' => '',
//			'description' => __( 'Enter text.', 'woocommerce' )
//		)
//	);
//
//	echo '</div>';
//
//}
//
//function woo_add_custom_general_fields_save( $post_id ){
//
//	// Text Field
//	$woocommerce_text_field = $_POST['_text_field'];
//	if( !empty( $woocommerce_text_field ) )
//		update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );
//
//	// Number Field
//	$woocommerce_number_field = $_POST['_number_field'];
//	if( !empty( $woocommerce_number_field ) )
//		update_post_meta( $post_id, '_number_field', esc_attr( $woocommerce_number_field ) );
//
//	// Textarea
//	$woocommerce_textarea = $_POST['_textarea'];
//	if( !empty( $woocommerce_textarea ) )
//		update_post_meta( $post_id, '_textarea', esc_html( $woocommerce_textarea ) );
//
//	// Select
//	$woocommerce_select = $_POST['_select'];
//	if( !empty( $woocommerce_select ) )
//		update_post_meta( $post_id, '_select', esc_attr( $woocommerce_select ) );
//
//	// Checkbox
//	$woocommerce_checkbox = isset( $_POST['_checkbox'] ) ? 'yes' : 'no';
//	update_post_meta( $post_id, '_checkbox', $woocommerce_checkbox );
//
//	// Custom Field
//	$custom_field_type =  array( esc_attr( $_POST['_field_one'] ), esc_attr( $_POST['_field_two'] ) );
//	update_post_meta( $post_id, '_custom_field_type', $custom_field_type );
//
//	// Hidden Field
//	$woocommerce_hidden_field = $_POST['_hidden_field'];
//	if( !empty( $woocommerce_hidden_field ) )
//		update_post_meta( $post_id, '_hidden_field', esc_attr( $woocommerce_hidden_field ) );
//
//	// Product Field Type
//	$product_field_type =  $_POST['product_field_type'];
//	update_post_meta( $post_id, '_product_field_type_ids', $product_field_type );
//
//}

//add_filter( 'woocommerce_checkout_fields' , 'custom_wc_checkout_fields' );
//// Change order comments placeholder and label, and set billing phone number to not required.
//function custom_wc_checkout_fields( $fields ) {
//	$fields['order']['order_comments']['placeholder'] = 'Enter your placeholder text here.';
//	$fields['order']['order_comments']['label'] = 'Enter your label here.';
//	$fields['billing']['billing_phone']['required'] = false;
//	return $fields;
//}
?>