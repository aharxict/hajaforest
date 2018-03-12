<?php
/*
Template Name: Shop
 */
?>
<? get_header(); ?>

<?php $products = new WP_Query(array('post_type' => 'product', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
<?php //global $product; ?>
<?php $products_array = array(); ?>
<?php
$array_id = 0;
$product_id = 0;
?>
<?php if ( $products->have_posts() ) : ?>
	<?php while ( $products->have_posts() ) : $products->the_post(); ?>
		<?php $products_array[$array_id]['name'] = $product->get_name();?>
		<?php $products_array[$array_id]['short_description'] = $product->get_short_description();?>
		<?php $products_array[$array_id]['price'] = $product->get_price();?>
		<?php $product_img = wp_get_attachment_image_src ($product->get_image_id(),'full');?>
		<?php $products_array[$array_id]['image'] = $product_img[0]; ?>
		<?php $products_array[$array_id]['permalink'] = $product->get_permalink();?>
		<?php $array_id = $array_id + 1;?>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<div id="shop-template">
    <div class="shop-title">
        <h1>shiitake</h1>
    </div>
		<section class="product-row pl-25">
			<?php while ($product_id <= 7) :  ?>
				<div class="product-block">
					<a href="<?php  echo $products_array[$product_id]['permalink'];?>" class="btn">
						<?php  echo $products_array[$product_id]['name'];?>
					</a>
				</div>
			<?php $product_id = $product_id + 1;
			endwhile; ?>
		</section>
</div>
<? get_footer(); ?>