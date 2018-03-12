<?php
/*
Template Name: Cart
*/
?>
<?  get_header(); ?>


<section id="cart-template" class="first-on-page">
	<a href="#<?php //echo get_site_url(); ?>/" onclick="goBack()" class="close-button"></a>
	<div class="container-fluid">
		<div class="checker col-md-10 col-md-offset-1">
			<div class="cart-header">

				<span>My cart</span>
				<span>Subtotal: <span class="subtotal"><?php echo WC()->cart->get_cart_subtotal();?></span></span>
			</div>
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		the_content();

		// End the loop.
	endwhile;
	?>
		</div>
	</div>




</section>

<?  get_footer(); ?>
