<?php //Template Name: Conviertete Page
get_header();  ?>
<section id="health-coaching">
	<h1 class='page-title'><?php the_title(); ?></h1>
	<div class="about-top group">
			<?php
				$wp_b1 = get_option('dohko_hc_become_p1');
				$wp_b2 = get_option('dohko_hc_become_p2');
				$wp_b3 = get_option('dohko_hc_become_p3');
				$wp_b4 = get_option('dohko_hc_become_p4');
			?>
		<div class="about-img h-img very-long-img">
			<img src="<?php print IMAGES.'/Become - Astrid Beuermann.jpg'; ?>" alt="Conviértete en Health Coach" />
		</div>
		<div class="about-text-r very-long-text">
			<?php if($wp_b1): ?>
				<p class="content"><?php print $wp_b1; ?></p>
			<?php endif; ?>
			<?php if($wp_b2): ?>
				<p class="content"><?php print $wp_b2; ?></p>
			<?php endif; ?>				
			<?php if($wp_b3): ?>
				<p class="content"><?php print $wp_b3; ?></p>
			<?php endif; ?>				
			<?php if($wp_b4): ?>
				<p class="content"><?php print $wp_b4; ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="hc-container">
		<p class="content" style="margin:0;">Entérate más acerca de cómo empezar este lindo viaje</p>
		<button class="btn-cta" type="button" onclick="location.href='http://geti.in/2zFoS9D'">Click Aquí</button>
	</div>		
</section>
<?php get_footer(); ?>