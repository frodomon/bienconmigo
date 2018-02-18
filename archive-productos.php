<?php get_header();  ?>
<section id="products">
	<h1 class="page-title">PRODUCTOS</h1>
	<div class="page-description">
	</div>
	<div id='blog' class="group">
		<div id="grid" class="group" data-columns >
			<?php
				$posts= query_posts(array(
      	'post_type' => 'productos',
      	'order'=>'ASC',
      ));
    	foreach ($posts as $post) :  setup_postdata($post); 			
				$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	    	$custom = get_post_custom($post->ID);
	  		$package = $custom["package"][0];
			?>
			<div class="index-post group">
				<?php	index_post_thumbnail(); ?>
				<div class="index-post-content group">
				<?php index_post_title();	?>	
					<div class="index-post-excerpt">
		      	<?php the_excerpt(); ?>
		      </div>
				</div>
			</div>
			<?php endforeach;  
    	wp_reset_postdata(); ?>
		</div>
		<?php dohko_pagination($pages = '', $range = 2); ?>
	</div>
</section>
<?php get_footer(); ?>