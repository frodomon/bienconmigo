<?php //Template Name: About Us Astrid Page
get_header();  ?>
<section id="about_us">
	<h1 class="page-title">Astrid Beuermann</h1>
	<div class="about-top group">
		<?php
			$p5 = get_option('dohko_about_p5');
			$p6 = get_option('dohko_about_p6');
			$p7 = get_option('dohko_about_p7');
			$p8 = get_option('dohko_about_p8');
		?>
		<div class="about-text-l">
			<p class="content"><?php if($p5): print $p5; ?><?php endif; ?></p>
			<p class="content"><?php if($p6): print $p6; ?><?php endif; ?></p>
		</div>
		<div class="about-img w-img">
			<img src="<?php print IMAGES.'/About - Astrid Beuermann.png'; ?>" alt="Astrid Beuermann" />
		</div>
	</div>
	<div class="about-bottom group">
		<div class="about-img w-img">
			<img src="<?php print IMAGES.'/About - Astrid Beuermann 2.png'; ?>" alt="Astrid Beuermann" />
		</div>
		<div class="about-text-r">
			<p class="content"><?php if($p7): print $p7; ?><?php endif; ?></p>
			<p class="content"><?php if($p8): print $p8; ?><?php endif; ?></p>
			<p class="content">Conoce un poco más de mi historia <a href="<?php echo get_page_link( get_page_by_title( 'Mi historia de cambio', OBJECT, 'post' )->ID); ?>">aquí</a></p>
		</div>		
	</div>
</section>
<?php get_footer(); ?>