<?php
/*
Template Name: Checkout
*/
?>
<?  get_header(); ?>


<section id="cart-template" class="first-on-page checkout-page">
	<a href="<?php echo get_site_url(); ?>/" class="close-button"></a>
	<div class="container-fluid">
		<div class="checker col-md-10 col-md-offset-1">
			<div class="cart-header">

				<span>My order details</span>
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
