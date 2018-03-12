<?php

/* Side Cart */
function thb_side_cart() {
?>
 	<nav id="side-cart"></nav>
<?php
}
add_action( 'thb_side_cart', 'thb_side_cart',3 );

/* Side Cart Update */
function thb_woocomerce_side_cart_update($fragments) {
	ob_start();
	?>
		<nav id="side-cart">
		 	<header class="item">
		 		<a href="#" class="thb-close" title="<?php _e('Close', 'north'); ?>"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="12" height="12" viewBox="1.1 1.1 12 12" enable-background="new 1.1 1.1 12 12" xml:space="preserve"><path d="M8.3 7.1l4.6-4.6c0.3-0.3 0.3-0.8 0-1.2 -0.3-0.3-0.8-0.3-1.2 0L7.1 5.9 2.5 1.3c-0.3-0.3-0.8-0.3-1.2 0 -0.3 0.3-0.3 0.8 0 1.2L5.9 7.1l-4.6 4.6c-0.3 0.3-0.3 0.8 0 1.2s0.8 0.3 1.2 0L7.1 8.3l4.6 4.6c0.3 0.3 0.8 0.3 1.2 0 0.3-0.3 0.3-0.8 0-1.2L8.3 7.1z"/></svg></a>
		 		<h6><?php _e('Your Cart','north'); ?></h6>
		 	</header>
			<?php if (sizeof(WC()->cart->cart_contents)>0) : ?>
				<div class="custom_scroll" id="side-cart-scroll">
					<div>
						<ul>
						<?php foreach (WC()->cart->cart_contents as $cart_item_key => $cart_item) :
						    $_product = $cart_item['data'];
						    if ($_product->exists() && $cart_item['quantity']>0) :?>
							<li class="item">
								<figure>
									<?php
										$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
										if ( ! $_product->is_visible() )
											echo $thumbnail;
										else
											printf( '<a href="%s">%s</a>', $_product->get_permalink( $cart_item ), $thumbnail );
									?>
								</figure>
					
								<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">×</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __('Remove this item','north') ), $cart_item_key ); ?>
								
								<div class="list_content">
									<?php
									 $product_title = $_product->get_title();
								       echo '<h5><a href="'.get_permalink($cart_item['product_id']).'">' . apply_filters('woocommerce_cart_widget_product_title', $product_title, $_product) . '</a></h5>';
								       echo '<span class="quantity">'.$cart_item['quantity'].'</span><span class="cross">×</span>';
								       echo '<div class="price">'.apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ).'</div>';
								       
									?>
								</div>
							</li>
						<?php endif; endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="subtotal item">
				    <?php _e('Subtotal', 'north'); ?><span><?php echo WC()->cart->get_cart_total(); ?></span>
				</div>
				<div class="buttons item">
					<a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" class="btn large full"><?php _e('View Cart', 'north'); ?></a>
			
					<a href="<?php echo esc_url( WC()->cart->get_checkout_url() ); ?>" class="btn large full accent"><?php _e('Checkout', 'north'); ?></a>
				</div>
			<?php else: ?>
				<div class="cart-empty text-center">
					<div>
						<figure class="item"></figure>
						<p class="message item"><?php _e( 'Your cart is currently empty.', 'north') ?></p>
						<?php do_action( 'woocommerce_cart_is_empty' ); ?>
						
						<p class="return-to-shop item"><a class="button wc-backward" href="<?php echo apply_filters( 'woocommerce_return_to_shop_redirect', get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><?php _e( 'Return To Shop', 'north' ) ?></a></p>
					</div>
				</div>
			<?php endif; ?>
		</nav>
	<?php
	$fragments['#side-cart'] = ob_get_clean();
	return $fragments;

}
add_filter('add_to_cart_fragments', 'thb_woocomerce_side_cart_update');

/* Header Cart */
function thb_quick_cart() {
	$header_style = ot_get_option('header_style', 'style1');
	if(class_exists('woocommerce')) {
		if ($header_style === 'style1') {
			?>
		<a id="quick_cart" data-target="open-cart" href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>" title="<?php _e('View your Cart','north'); ?>"><svg xmlns="http://www.w3.org/2000/svg" id="cart-icon" version="1.1" x="0" y="0" width="19" height="18" viewBox="0 0 19 18" enable-background="new 0 0 19 18.006" xml:space="preserve"><path class="handle icon-fill" d="M6.5 5.3C6.5 2.9 6.9 1.8 9.5 1.8c2.6 0 3 1.2 3 3.6v0.4h1.9V5.3C14.4 1.9 13.2 0 9.5 0 5.8 0 4.6 1.9 4.6 5.3v0.4h1.9V5.3z"/><path class="icon-fill" fill-rule="evenodd" clip-rule="evenodd" d="M17 0H2c-1.4 0-2 0.8-2 2.1v13.4c0 1.3 1.2 2.4 2.6 2.4H16.4c1.4 0 2.6-1.1 2.6-2.4V2.1C19 0.8 18.4 0 17 0z"/></svg>
	
	
			<span class="float_count" id="float_count"><?php echo WC()->cart->cart_contents_count; ?></span>
		</a>
	<?php
		} else {
	?>
		<a id="quick_cart" data-target="open-cart" href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>" title="<?php _e('View your Cart','north'); ?>"><svg xmlns="http://www.w3.org/2000/svg" id="cart-icon" version="1.1" x="0" y="0" width="19" height="18" viewBox="0 0 19 18" enable-background="new 0 0 19 18.006" xml:space="preserve"><path class="handle icon-fill" d="M6.5 5.3C6.5 2.9 6.9 1.8 9.5 1.8c2.6 0 3 1.2 3 3.6v0.4h1.9V5.3C14.4 1.9 13.2 0 9.5 0 5.8 0 4.6 1.9 4.6 5.3v0.4h1.9V5.3z"/><path class="icon-fill" fill-rule="evenodd" clip-rule="evenodd" d="M17 0H2c-1.4 0-2 0.8-2 2.1v13.4c0 1.3 1.2 2.4 2.6 2.4H16.4c1.4 0 2.6-1.1 2.6-2.4V2.1C19 0.8 18.4 0 17 0z"/></svg><span class="cart_text"><?php _e('Cart','north'); ?> (</span><span class="float_count" id="float_count"><?php echo WC()->cart->cart_contents_count; ?></span><span class="cart_text">)</span>
		</a>
	<?php
		}
	}
}
add_action( 'thb_quick_cart', 'thb_quick_cart',3 );

?>