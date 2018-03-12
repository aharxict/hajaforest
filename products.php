<?php
/*
Template Name: Products
*/
?>
<? get_header(); ?>
<section id="bottles" class="pt-20">
	<h4 class="text-center collection-title">Lifestyle collection</h4>

	<div class="collection-colors text-center">
		<ul class="list-inline">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<div class="container text-center collection-names mb-0">
		<div class="col-md-4">
			<h4>Badges</h4>
			<p class="badges">
				<span>shiitake</span>
				<span>maitake</span>
				<span>reishi</span>
				<span>cordyceps</span>
			</p>
		</div>
		<div class="col-md-4">
			<span class="ml">60ml</span>
		</div>
		<div class="col-md-4">
			<h4>Blends</h4>
			<p class="blends">
				<span>№2</span>
				<span>№3</span>
				<span>№5</span>
				<span>№7</span>
			</p>
		</div>
	</div>


<!--	<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/icons/Naja-badges_and_blends.svg" alt="">-->

<!--	<div class="home-btn-shop">-->
<!--		<a href="/product/shiitake">-->
<!--			<div class="home-shop">-->
<!---->
<!--			</div>-->
<!--			<div>-->
<!--				shop-->
<!--			</div>-->
<!---->
<!---->
<!--		</a>-->
<!--	</div>-->

</section>
<section id="products" class="mtb-0 mb-90vh" >

		<div class="container-fluid">

			<?php $products = new WP_Query(array('post_type' => 'product', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
			<?php //global $product; ?>
			<?php $products_array = array(); ?>
			<?php $array_id = 0; ?>
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
			<?php //global $product; ?>
			<?php // var_dump($products_array);?>
			<?php // echo $products_array[7]['price'];?>
			<?php // echo WC()->cart->get_cart_url(); ?>
			<?php // echo WC()->cart->get_cart_contents_count(); ?>
			<?php // echo WC()->cart->get_cart_total(); ?>


			<div class="preload-hidden-container">

				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/0.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/1.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/2.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/3.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/4.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/5.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/6.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/EffectPNG/png/7.png" alt="">
			</div>

			<div class="product-row">
				<?php $product_id = 0; ?>
				<?php while ( $product_id <= 7) : ?>
						<div class="home-product product-id-<?php echo $product_id; ?>">
							<div class="home-price"><div><sup>$</sup></div>
								<?php $string_price = str_split( $products_array[$product_id]['price'] );
								foreach ($string_price as $value ) {
									echo "<div>" . $value . "</div>";
								}?>
								<?php // echo $products_array[$product_id]['price'];?></div>
							<div class="brash">
							</div>
							<img src="<?php  echo $products_array[$product_id]['image'];?>" alt="">
							<h2><?php  echo $products_array[$product_id]['name'];?></h2>
							<p><?php  echo $products_array[$product_id]['short_description'];?></p>
							<a href="<?php  echo $products_array[$product_id]['permalink'];?>" class="buy-btn"> <span class="icon"></span><span>BUY</span></a>
						</div>
					<?php $product_id = $product_id + 1; ?>
				<?php endwhile;?>

			</div><!-- tab content -->
		</div>
</section>


<? get_footer(); ?>





