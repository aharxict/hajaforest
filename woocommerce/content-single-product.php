<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row preload-hidden-container reference">
	    <div class="container-fluid">
        <div class=" col-sm-4 col-md-4 single-col-1">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
	    <div class="share-button">
		    <img src="<? echo get_template_directory_uri()?>/images/icons/share-button-62.svg" alt="">
		    <div class="share-button-description">
			    share this product
		    </div>
	    </div>
        </div>
        <div class=" col-sm-4 col-md-4 single-col-2">
            <div class="description">
                <h3>lifestyle collection</h3>
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
                <div class="badges">
                <img src="<?php echo get_template_directory_uri();?>/images/icons/organic-badges.svg" alt="Organic"></div>
                <div class="addons-container">
                <div class="no-addons">NO artificial colors, flavors, or preservatives</div>
                <div class="no-addons">NO: Alcohol | Soy <br> Gluten | Dairy <br> Not tested on animals <br> Suitable for vegans </div>
                <div class="no-addons"></div>
                </div>
            </div>
	<div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div><!-- .summary -->
        </div>
        <div class="col-sm-4 col-md-4 single-col-3">
        <div class="product-right-info">
	        <div class="key-part">
	        <?php echo get_field ('product_info');?>
	        </div>
	        <div class="accord-part">
		        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="panel panel-default">
				        <div class="panel-heading" role="tab" id="headingOne">
					        <h3 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							        Ingredients
						        </a>
					        </h3>

				        </div>
				        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					        <div class="panel-body"><?php echo get_field( 'product_ingredients' )?>         </div>
				        </div>
			        </div>
			        <div class="panel panel-default">
				        <div class="panel-heading" role="tab" id="headingTwo">
					        <h3 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							        Directions
						        </a>
					        </h3>

				        </div>
				        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					        <div class="panel-body"><?php echo get_field( 'product_directions' )?></div>
				        </div>
			        </div>
		        </div>

	        </div>
        </div>
        </div>
	    </div>
    </div>
    <div style="clear: both;"></div>
	<?php $naja_products = new WP_Query(array('post_type' => 'product', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
	<?php //global $product; ?>
	<?php $naja_products_array = array(); ?>
	<?php
	$naja_array_id = 0;
	$naja_product_id = 0;
	?>
	<?php if ( $naja_products->have_posts() ) : ?>
		<?php while ( $naja_products->have_posts() ) : $naja_products->the_post(); ?>
			<?php $naja_products_array[$naja_array_id]['name'] = $naja_products->posts[$naja_array_id]->post_title; ?>
			<?php $naja_products_array[$naja_array_id]['short_description'] = $naja_products->posts[$naja_array_id]->post_excerpt;?>
			<?php $naja_products_array[$naja_array_id]['permalink'] = $naja_products->posts[$naja_array_id]->guid;?>
			<?php $naja_array_id = $naja_array_id + 1;?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php
//    echo "<pre>";
//	var_dump($naja_products->posts[1]);
//	echo "</pre>";
	wp_reset_query();
	?>
    <div id="shop-template" class="preload-product-page">
	    <div class="shop-title">
		    <h1><?php the_title(); ?></h1>
	    </div>
        <div class="product-row pl-25">
			<?php while ($naja_product_id <= 7) :  ?>
                <div class="product-block">
                    <a href="<?php  echo $naja_products_array[$naja_product_id]['permalink'];?>" class="btn">
						<?php  echo $naja_products_array[$naja_product_id]['name'];?>
                    </a>
                </div>
				<?php $naja_product_id = $naja_product_id + 1;
			endwhile; ?>
        </div>
    </div>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
	?>

</div><!-- #product-<?php the_ID(); ?> -->
<div class="row-holder"></div>
<div class="row preload-hidden-container">
	<div class="container-fluid">
		<?php
		global $post, $product;
		$attachment_ids = $product->get_gallery_image_ids();
		//var_dump( $attachment_ids );
		$image_count = 1;
		$image_array = array();
		while ( $image_count <= 5 ) :
		$product_img = wp_get_attachment_image_src ($attachment_ids[$image_count],'full');
		$image_array[$image_count] = $product_img[0];
		?>
		<?php
		//echo $image_array[$image_count];
		$image_count = $image_count +1;
		endwhile;
		?>

			<div class="col-md-5 single-product-img-1 plr-0">
				<div class="back-img" style="background-image: url('<?php echo $image_array[1]; ?>')">
					<img src="<?php echo $image_array[1]; ?>" alt="">
				</div>
			</div>

			<div class="col-md-7 reference_2">
				<div class="row">
					<div class="col-md-8 single-product-img-2 plr-0">
						<div class="back-img" style="background-image: url('<?php echo $image_array[2]; ?>')">
							<img src="<?php echo $image_array[2]; ?>" alt="">
						</div>
					</div>
					<div class="col-md-4 single-product-img-3 plr-0">
						<div class="back-img" style="background-image: url('<?php echo $image_array[3]; ?>')">
							<img src="<?php echo $image_array[3]; ?>" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 single-product-img-4 plr-0">
						<div class="back-img" style="background-image: url('<?php echo $image_array[4]; ?>')">
							<img src="<?php echo $image_array[4]; ?>" alt="">
						</div>
					</div>
					<div class="col-md-8 single-product-img-5 plr-0">
						<div class="back-img" style="background-image: url('<?php echo $image_array[5]; ?>')">
							<img src="<?php echo $image_array[5]; ?>" alt="">
						</div>
					</div>
				</div>
			</div>

	</div>
</div>
<div class="row preload-hidden-container mlr-0 mb-90vh">
	<div class="container-fluid bottle-back">
		<div class="col-md-5 col-md-offset-2 bottle-part">
			<img src="<?php echo get_template_directory_uri(); ?>/images/icons/shiitake-bottle-illustration-specs-38.svg" alt="">
		</div>
		<div class="col-md-5 bottle-text">
			<div>
				<p>NAJA Forest formulas are all 100% organic, full-spectrum, alcohol-free and highly concentrated, with maximum bio-availability of active ingredients, and a naturally sweet and delicious, earthy flavor.Enjoy!</p>
				<table class="bottle-table">
					<tr>
						<td>
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/directions-section-bottle_shaken-40.svg" alt="">
						</td>
						<td><h4>shake</h4><p>Shake well before each use</p>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/directions-section-spoon-41.svg" alt="">
						</td>
						<td><h4>take</h4><p> Best taken on an empty stomach.</p>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/directions-section-teacup-42.svg" alt="">
						</td>
						<td><h4>enjoy</h4><p>Enjoy directly from a spoon or stir into your tea, coffee, smoothie or favorite healthy drink.  </p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
