<?php //Template Name: About Us Bien Conmigo Page
get_header();  ?>
<section id="about_us">
	<h1 class="page-title">Bien Conmigo</h1>
	<div class="about-top group">
		<?php
			$p1 = get_option('dohko_about_p1');
			$p2 = get_option('dohko_about_p2');
			$p3 = get_option('dohko_about_p3');
			$p4 = get_option('dohko_about_p4');
		?>
		<div class="about-text-l">
			<p class="content"><?php if($p1): print $p1; ?><?php endif; ?></p>
			<p class="content"><?php if($p1): print $p2; ?><?php endif; ?></p>
			<p class="content">Conoce más acerca del <a href="<?php echo get_page_link( get_page_by_title( '¿Qué es Health Coaching?' )->ID); ?>">Health Coaching</a></p>
		</div>
		<div class="about-img w-img">
			<img src="<?php print IMAGES.'/About - Bien Conmigo.png'; ?>" alt="Bien Conmigo" />
		</div>
	</div>

	
</section>
<?php get_footer(); ?>