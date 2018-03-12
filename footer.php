

		<footer class="footer-content">

			<?php echo do_shortcode('[mc4wp_form id="50"]'); ?>

			<div class="footer-bottom">
				<div class="social-footer">
					<a href="https://www.facebook.com/najaforest/">fb</a>
					<a href="https://www.instagram.com/najaforest/">ig</a>
					<a href="mailto:info@najaforest.com" target="_blank">@</a>
				</div>

				<div class="footer-text">
					<a href="<?php echo site_url(); ?>/shipping-returns/">shipping & returns</a>
					<a href="<?php echo site_url(); ?>/terms-conditions/">terms & conditions</a>
					<span>&copy; Naja Forest 2017 / website by Kadnezz Studio</span>
				</div>
			</div>

			<div class="special-for-arrow">
				<img class="arrow-up" src="<? echo get_template_directory_uri()?>/images/icons/arrow-up-orange.svg" alt="arrow-up">
			</div>
		</footer>

		<script>
			;(function($){
				$(document).ready(function(){
					$('.close').on("click", function(){
						$('body').css('margin-top', '60px');
						$('.contact-page-footer').addClass('footer-height-on-close');
						$('.block-menu').css('height', '93vh');
						$('.block-search').css('height', '93vh');
					})
				})
			})(jQuery);
		</script>

		<script>			
			(function($){
				$(document).ready(function(){
					$("#mc4wp-form-1").attr("autocomplete", "off");

					$(".arrow-up").click(function() {
						$('html, body').animate({
							scrollTop: 0
						}, 2000);
					});

				})
			})(jQuery);
		</script>


</div>
</div>

<?php						
						// Start the loop.
while ( have_posts() ) : the_post();
						//the_content();
						// End the loop.
endwhile;
?>
<?php wp_footer(); ?>
</body>
</html>