<?php get_header(); ?>
<div id="container" class="group">
	<div id="blog" class="left-col col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class="thumbnail">
	 			<?php single_post_thumbnail(); ?>
			</div>	
			<div class="post group">
				<?php 
					dohko_post_title();
					dohko_meta_top();
					dohko_product_post_content();
					if(is_singular()) { 
						dohko_social_share_2();
						?>
						<div class="flex-center">
							<button class="btn-cta" type="button" onclick="location.href='<?php echo get_page_link( get_page_by_title( 'Solicitar Productos' )->ID ); ?>'">Solicita Productos Aquí</button>
						</div>
						<?php
						dohko_related_posts();
    				echo do_shortcode('[fbcomments]'); 
					}
			  ?>
			  
			</div>
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
 	$(window).ready(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: false
	  });
	  $('.entry-video').fitVids();
	}); 
</script>