<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Naja Forest</title>
	<?php wp_head(); ?>
</head>
<body <?php  body_class(); ?>>
	<section id="header">
		<div id="free-ship">
			<div class="alert alert-free-ship alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<span class="free-shipping-head-bar">free shipping for orders over $100!</span>
			</div>
		</div>




		<div id="navbar">
			<div class="title">		

				<div class="menu-close-cont">
					<img class="menu-lines" src="<? echo get_template_directory_uri()?>/images/icons/menu-lines.svg" alt="menu lines">
					<img class="menu-close ds-none" src="<? echo get_template_directory_uri()?>/images/icons/menu-close-button.svg" alt="menu lines">
				</div>


				<a href="<?php echo site_url();?>">
					<img class="logo" src="<? echo get_template_directory_uri()?>/images/icons/naja-forest-logo.svg" alt="logo">
				</a>

				<div class="search-close-cont">
					<img class="navbar-search" src="<? echo get_template_directory_uri()?>/images/icons/search-icon-92.svg" alt="search">
					<img class="menu-close-search ds-none" src="<? echo get_template_directory_uri()?>/images/icons/menu-close-button.svg" alt="menu lines">

				</div>
			</div>


			<script>
				;(function($){
					$(document).ready(function(){

						var menu_close = $('.menu-close');
						var block_menu = $('.block-menu');
						var navbar_search = $('.navbar-search');
						var block_search = $('.block-search');

						$(".menu-item a").on("click", function () {
							$(".menu-item a").siblings().find(".active").removeClass("active");
							$(this).addClass("active");
						});

						$('.menu-close-cont').on('click', function(){
							$('.menu-lines').toggleClass('ds-none');
							menu_close.toggleClass('ds-none');
						});

						$('.search-close-cont').on('click', function(){
							navbar_search.toggleClass('ds-none');
							$('.menu-close-search').toggleClass('ds-none');
							menu_close.addClass('ds-none');
							$('.menu-lines').removeClass('ds-none');
							block_menu.removeClass('show-mn');
							block_search.toggleClass('show-sh');
							$('.new-ajax-search').toggleClass('suggest');
						});

						$('.menu-close-cont').on("click", function(){
							block_search.removeClass('show-sh');
							block_menu.toggleClass('show-mn');
							$('.menu-close-search').addClass('ds-none');
							navbar_search.removeClass('ds-none');
							$(".menu-links li a[href='#']").addClass('plus');
							$(".menu-links li:has(span)").addClass('main-nav-small');
							$(".menu-links li:not(:has(span))").addClass('main-nav');
						});

						$('.menu-links li').click(function(){
							$(this).find(" > .nav.collapse").toggleClass('in');
							$(this).find("a[href='#']").toggleClass('plus minus');
						});

						$('.navbar-toggle').on('click', function(){
							$('.new-ajax-search').removeClass('suggest');
						});				
					});
				})(jQuery)
			</script>

			<div class="logotype">
				<img src="<? echo get_template_directory_uri()?>/images/icons/Naja-Menu_logo.svg" alt="logotype">
			</div>
			<a class="shop-navbar-block" href="<?php echo get_site_url(); ?>/cart/">
				<div class="shop-cart-icon">
					(<span class="shop-cart-contents-count"><?php echo $count_value = WC()->cart->get_cart_contents_count(); ?></span>)
					<img class="cart-ico" src="<? echo get_template_directory_uri()?>/images/icons/shopping-bag-icon-30.svg" alt="shoping-cart-ico">
				</div>
			</a>
		</div>

	</section>
	<div class="block-menu">
		<div class="nav-cont">
			<?php wp_nav_menu(array(
				'theme_location' => 'top_menu',
				'menu_class' => 'menu-links',
				'container' => 'false'
				) );
				?> 
				<div class="nav-click-bottom">
					<div class="social-footer nav-soc">				
						<a href="https://www.facebook.com/najaforest/">fb</a>
						<a href="https://www.instagram.com/najaforest/">ig</a>
						<a href="mailto:info@najaforest.com" target="_blank">@</a>
					</div>
					<div class="text">
						&copy; Naja Forest <?php echo date('Y');?> / website by Kadnezz Studio
					</div>
				</div>
			</div>
		</div>

		<div class="block-search">
			<?php echo do_shortcode('[wcas-search-form]'); ?>
			<div class="search-quant">
				<span>
					<span class="prod-name">product -</span> 
					<span class="prodQuant">no results</span>
				</span>



				<script>
					;(function($){
						$(document).ready(function(){


							$(".arrow-down-ico").click(function() {
								$('html, body').animate({
									scrollTop: $("#next").offset().top
								}, 2000);
							});

							function Start() {

								var OldHtml = window.jQuery.fn.html;

								window.jQuery.fn.html = function () {

									var EnhancedHtml = OldHtml.apply(this, arguments);

									if (arguments.length && EnhancedHtml.find('.dgwt-wcas-suggestion').length) {
										var TheElementAdded = EnhancedHtml.find('.dgwt-wcas-suggestion');
										$('.dgwt-wcas-suggestion').addClass('col-emde-4 col-md-4');
										var num  = $('.dgwt-wcas-suggestion:last-child').attr('data-index');
										var totalProducts = parseInt(num) + 1;

										if (totalProducts == 1) {
											$('.prod-name').html('product -');									
										} else {
											$('.prod-name').html('products -');
										}

										$('.prodQuant').html(totalProducts);

										var noResults = $('.dgwt-wcas-suggestion').hasClass('dgwt-wcas-nores');

										if (noResults) {
											$('.search-quant > span:first-child').css('display', 'none');										
										} else{
											$('.search-quant > span:first-child').css('display', 'block');
										}

										var keepProducts = EnhancedHtml.find('.dgwt-wcas-open');

										$('.dgwt-wcas-suggestions-wrapp').removeAttr('style');
										$('.dgwt-wcas-suggestions-wrapp').addClass('new-ajax-search suggest');

									}

									return EnhancedHtml;
								}
							}

							$(Start);



						})

					})(jQuery);
				</script>
			</div>
		</div>

		<div class="naja-navbar">
			<?php wp_nav_menu(array(
				'theme_location' => 'left_menu',
				'menu_class' => 'list-inline',
				'container' => 'false'
				) );?>
			</div>




			<div class="naja-social">
				<ul class="social">
					<li><a href="https://www.instagram.com/najaforest/">fb</a></li>
					<li><a href="https://www.facebook.com/najaforest/">ig</a></li>
					<li><a href="mailto:info@najaforest.com" target="_blank">@</a></li>
				</ul>
			</div>

			<div class="naja-container">

