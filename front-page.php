<? get_header(); ?>

<section id="intro">	
	<div class="container-fluid main-section">
		<div class="col-xs-7 col-sm-8 col-md-9 forest-img">	</div>
		<div class="col-xs-5 col-sm-4 col-md-3 main-block">
			<h1 class="main-text">Embrace the Wisdom and practice of Thousands of years</h1>
			<div class="bttom-block">
				<div class="product-images">
					<img class="img-responsive mushroom" src="<? echo get_template_directory_uri()?>/images/icons/mushroom-icon.svg" alt="mushroom">
					<div class="text">
						Product Images <br> Featuring-Blends №2-№3-№5-№7
					</div>
				</div>
				<img class="arrow-down-ico" src="<? echo get_template_directory_uri()?>/images/icons/Arrow-down-grey.svg" alt="">
			</div>				
		</div>
		<div class="brush-first-one"></div>
	</div>
</section>




<section id="next">

	<div id="second-section">
		<div class="container-fluid">

			<div class="naja-text col-xs-12 col-md-5 col-md-offset-2">
				<h1 class="sec-section-intro">A practive of thousands of years of medicinal and spiritual wellness</h1>
				<div class="first-block-text">
					At NAJA Forest, we believe in all things mushrooms... sustainable foraging, growing, cooking, teas, tinctures, ancient prectices, spiritual englightenment, ecological and bio-clearning uses (the great work of Paul Stamets), and most importantly, high quality, research supported mushroom supplements for everyday wellness and healthy lifestyles.<br> <br>
					<a href="<? echo site_url();?>/about/">&nbsp;&nbsp;Get to know us!</a>				
				</div>
			</div>

		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="images">

					<div class="brush"></div>

					<div class="img-one">
						<img class="slide img-1" src="<? echo get_template_directory_uri()?>/images/secondSection1.jpg" alt="man in forest">
						<span class="one">Lifestyle image</span>
					</div>
					<div class="img-two">
						<img id="logo-mark" class="rotate-logo" src="<? echo get_template_directory_uri()?>/images/icons/circleBadget.svg" alt="">
						<img class="slide img-2" src="<? echo get_template_directory_uri()?>/images/secondSection2.jpg" alt=""> 
						<span class="two">Product image</span>
					</div>
					<div class="img-three">
						<img class="slide img-3" src="<? echo get_template_directory_uri()?>/images/secondSection3.jpg" alt="">		
						<span class="three">Indigrients image</span>
					</div>
				</div>
			</div>
		</div>

		<script>
			jQuery(function() {
				var rotation = 0, 
				scrollLoc = jQuery(document).scrollTop();
				jQuery(window).scroll(function() {
					var newLoc = jQuery(document).scrollTop();
					var diff = (scrollLoc - newLoc)/10;
					rotation += diff, scrollLoc = newLoc;
					var rotationStr = "rotate(" + rotation + "deg)";		

					jQuery(".rotate-logo").css({
						"-webkit-transform": rotationStr,
						"-moz-transform": rotationStr,
						"transform": rotationStr
					});


				});
			})
		</script>

		<div class="container-fluid">
			<div class="col-xs-12 col-sm-4 col-sm-offset-7 col-md-3 col-md-offset-7">
				<h2 class="text-right text-under">Let Naja Forest keep you healthy and in the game... whatever your game may be</h2>
			</div>
		</div>
	</div>
</section>


<section id="slider">

	<div class="brush-life"></div>

	<div id="myCarousel" class="carousel slide carousel-fade" data-interval="false">

		<div class="carousel-inner">
			<div class="active item first">
				<div class="container-fluid">
					<div class="background-slide-img bg-sl">
						<div class="container-fluid container-inside">
							<div class="row blocks-inside">
								<img class="img-responsive" src="<? echo get_template_directory_uri()?>/images/frontSlide/embrace.jpg" alt="">
								<div class="block-inside-list">
									<ul class="slider-list">
										<li class="cross">Embrace</li>
										<li>Reboot</li>
										<li>Wellness</li>
										<li>Active</li>
										<li>Immunity</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container-fluid">
					<div class="background-slide-img-reboot bg-sl">
						<div class="container-fluid container-inside">
							<div class="row blocks-inside">
								<img class="img-responsive" src="<? echo get_template_directory_uri()?>/images/frontSlide/reboot.jpg" alt="">
								<div class="block-inside-list">
									<ul class="slider-list">
										<li class="cross-done">Embrace</li>
										<li class="cross">Reboot</li>
										<li>Wellness</li>
										<li>Active</li>
										<li>Immunity</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container-fluid">
					<div class="background-slide-img-wellness bg-sl">
						<div class="container-fluid container-inside">
							<div class="row blocks-inside">
								<img class="img-responsive" src="<? echo get_template_directory_uri()?>/images/frontSlide/wellness.jpg" alt="">
								<div class="block-inside-list">
									<ul class="slider-list">
										<li class="cross-done">Embrace</li>
										<li class="cross-done">Reboot</li>
										<li class="cross">Wellness</li>
										<li>Active</li>
										<li>Immunity</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container-fluid">
					<div class="background-slide-img-active bg-sl">
						<div class="container-fluid container-inside">
							<div class="row blocks-inside">
								<img class="img-responsive" src="<? echo get_template_directory_uri()?>/images/frontSlide/embrace.jpg" alt="">
								<div class="block-inside-list">
									<ul class="slider-list">
										<li class="cross-done">Embrace</li>
										<li class="cross-done">Reboot</li>
										<li class="cross-done">Wellness</li>
										<li class="cross">Active</li>
										<li>Immunity</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="item last">
				<div class="container-fluid">
					<div class="background-slide-img-immunity bg-sl">
						<div class="container-fluid container-inside">
							<div class="row blocks-inside">
								<img class="img-responsive" src="<? echo get_template_directory_uri()?>/images/frontSlide/embrace.jpg" alt="">
								<div class="block-inside-list">
									<ul class="slider-list">
										<li class="cross-done">Embrace</li>
										<li class="cross-done">Reboot</li>
										<li class="cross-done">Wellness</li>
										<li class="cross-done">Active</li>
										<li class="cross">Immunity</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

<script>
	;(function($){	

		// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1, 33:1, 34:1};

function preventDefault(e) {
	e = e || window.event;
	if (e.preventDefault)
		e.preventDefault();
	e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
	if (keys[e.keyCode]) {		
		preventDefault(e);
		return false;
	}
}

function disableScroll() {
if (window.addEventListener) // older FF
	window.addEventListener('DOMMouseScroll', preventDefault, false);
window.onwheel = preventDefault; // modern standard
window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
window.ontouchmove  = preventDefault; // mobile
document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
	if (window.removeEventListener)
		window.removeEventListener('DOMMouseScroll', preventDefault, false);
	window.onmousewheel = document.onmousewheel = null; 
	window.onwheel = null; 
	window.ontouchmove = null;  
	document.onkeydown = null;  
}


$(document).ready(function(){		
	enableScroll();

	$('#myCarousel').bind('mousewheel', function(e){
		if(e.originalEvent.wheelDelta /120 > 0) {

			first_slide = $('.first').hasClass('active');

			if (first_slide) {
				$('.carousel').carousel({
					pause: "true"
				});
				enableScroll();					
			} else{
				$(this).carousel('prev');

			}
		}
		else{
			last_slide = $('.last').hasClass('active');

			if (last_slide) {
				$('.carousel').carousel({
					pause: "true"
				});
				enableScroll();
			} else{
				$(this).carousel('next');
			}

		}
	});




	var rendered_fisrt_brush = false;
	var rendered_second_brush = false;
	var rendered_slider_brush = false;

	$(window).on('scroll', function () {

		var win = $(window);
		var scrollTop = win.scrollTop();
		var brushLifeOne = $('.brush-first-one');

		first_elemOffset = brushLifeOne.offset().top,
		distance_first = (first_elemOffset - scrollTop);

		elementOffset = $('#next').offset().top,
		distance_sec  = (elementOffset - scrollTop);

		if (distance_first < 225 && !rendered_fisrt_brush) {
			brushLifeOne.addClass('brush-first-one-anim');
			rendered_fisrt_brush = true;
		}

	//homepage text block slide animation
	//TO DO
	var slideText = $('.naja-text');
	var brush = $('.brush');
	var brushLife = $('.brush-life');

	if(distance_first < 125 || distance_first > 200){
		slideText.addClass('slide-text');
	} else {
		slideText.removeClass('slider-text');
	}

	if (distance_sec < -100 && !rendered_second_brush) {
		brush.addClass('brush-anim');
		rendered_second_brush = true;
	}

	slider_brush = brushLife.offset().top,
	distance_slide = (slider_brush - scrollTop);

	if (distance_slide < 150 && !rendered_slider_brush) {
		brushLife.addClass('brush-life-anim');
		rendered_slider_brush = true;			
	}

	if (distance_slide < 150 && distance_slide > 0) {
		disableScroll();
	} else {
		enableScroll();
	}

	images = $('.images').offset().top,
	image_block = (images - scrollTop);

	var imgOne = $('.img-one');
	var one = $('.one');
	var two = $('.two');
	var three = $('.three');

	if (image_block > -50 && image_block < 600) {

		imgOne.addClass('vis-one');
		one.addClass('visibl-span');
		two.addClass('visibl-span');
		$('.img-three').addClass('vis-three');
		three.addClass('visibl-span');

	} else{
		imgOne.removeClass('vis-one');
		one.removeClass('visibl-span');
		two.removeClass('visibl-span');
		$('.img-three').removeClass('vis-three');
		three.removeClass('visibl-span');
	}

})
})
})(jQuery);
</script>

<section id="bottles">
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

	<div class="container text-center collection-names">
		<div class="col-xs-12 col-md-4">
			<h4>Badges</h4>
			<p class="badges">
				<span>shiitake</span>
				<span>maitake</span>
				<span>reishi</span>
				<span>cordyceps</span>
			</p>
		</div>
		<div class="col-xs-12 col-md-4">
			<span class="ml">60ml</span>
		</div>
		<div class="col-xs-12 col-md-4">
			<h4>Blends</h4>
			<p class="blends">
				<span>№2</span>
				<span>№3</span>
				<span>№5</span>
				<span>№7</span>
			</p>
		</div>
	</div>

	<div class="collection-bottoles-img">
		<img src="<?php echo get_template_directory_uri(); ?>/images/icons/Naja-badges_and_blends.svg" alt="bootles-blends">
	</div>

	<div class="home-btn-shop">
		<a href="#">
			<div class="home-shop">
				shop
			</div>
			<div class="shadow-shop">
			</div>
		</a>
	</div>

	<script>
		;(function($){
			$(".home-btn-shop").click(function() {
				$('html, body').animate({
					scrollTop: $("#products-pills").offset().top
				}, 2000);
			});
		})(jQuery);
	</script>
</section>



<section id="products-pills">
	<div class="container">


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

		<div class="tab-content col-md-5">
			<?php $product_id = 0; ?>
			<?php while ( $product_id <= 3) : ?>
				<div class="tab-pane fade <?php if ($product_id == 0) { echo "in active"; } ?>" id="tab_left_<?php echo $product_id+1;?>">
					<div class="home-product product-id-<?php echo $product_id; ?>">
						<div class="home-price"><div><sup>$</sup></div>
						<?php $string_price = str_split( $products_array[$product_id]['price'] );
						foreach ($string_price as $value ) {
							echo "<div>" . $value . "</div>";
						}?>
						<?php // echo $products_array[$product_id]['price'];?></div>
						<div class="brash">
							<!--		                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/EffectPNG/png/1.png" alt=""> -->
						</div>
						<img src="<?php  echo $products_array[$product_id]['image'];?>" alt="">
						<h2><?php  echo $products_array[$product_id]['name'];?></h2>
						<p><?php  echo $products_array[$product_id]['short_description'];?></p>
						<a href="<?php  echo $products_array[$product_id]['permalink'];?>" class="buy-btn"> <span class="icon"></span><span>BUY</span></a>
					</div>
				</div>
				<?php $product_id = $product_id + 1; ?>
			<?php endwhile;?>

		</div><!-- tab content -->
		<div class="col-md-2 product-column">
			<ul class="nav nav-pills nav-stacked left-product-column">
				<li class="active"><a class="product-link-button p-id-0" href="#tab_left_1" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">L1</a></li>
				<li><a class="product-link-button p-id-1" href="#tab_left_2" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">L2</a></li>
				<li><a class="product-link-button p-id-2" href="#tab_left_3" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">L3</a></li>
				<li><a class="product-link-button p-id-3" href="#tab_left_4" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">L4</a></li>
			</ul>
			<ul class="nav nav-pills nav-stacked right-product-column">
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">R1</a></li>
				<li class="active"><a class="product-link-button p-id-4" href="#tab_right_1" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">R2</a></li>
				<li><a class="product-link-button p-id-5" href="#tab_right_2" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">R3</a></li>
				<li><a class="product-link-button p-id-6" href="#tab_right_3" data-toggle="pill"></a></li>
				<li><a class="product-link-button hidden-button" href="#" data-toggle="pill">R4</a></li>
				<li><a class="product-link-button p-id-7" href="#tab_right_4" data-toggle="pill"></a></li>
			</ul>
		</div>
		<div class="tab-content col-md-5">
			<?php $product_id = 4; ?>
			<?php while ( $product_id <= 7) : ?>
				<div class="tab-pane fade <?php if ($product_id == 4) { echo "in active"; } ?>" id="tab_right_<?php echo $product_id-3;?>">
					<div class="home-product product-id-<?php echo $product_id; ?>">
						<div class="home-price"><div><sup>$</sup></div>
						<?php $string_price = str_split( $products_array[$product_id]['price'] );
						foreach ($string_price as $value ) {
							echo "<div>" . $value . "</div>";
						}?>
						<?php // echo $products_array[$product_id]['price'];?></div>
						<div class="brash"> </div>
						<img src="<?php  echo $products_array[$product_id]['image'];?>" alt="">
						<h2><?php  echo $products_array[$product_id]['name'];?></h2>
						<p><?php  echo $products_array[$product_id]['short_description'];?></p>
						<a href="<?php  echo $products_array[$product_id]['permalink'];?>" class="buy-btn"><span class="icon"></span><span>BUY</span></a>
					</div>
				</div>
				<?php $product_id = $product_id + 1; ?>
			<?php endwhile;?>
		</div><!-- tab content -->





	</div>		



</section>






<? get_footer(); ?>