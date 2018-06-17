<?php //Template Name: Health Coaching Page
get_header();  ?>
<section id="health-coaching">
	<h1 class='page-title'><?php the_title(); ?></h1>
	<div class="about-top group">
			<?php
				$wp1 = get_option('dohko_hc_what_p1');
				$wp2 = get_option('dohko_hc_what_p2');
				$wp3 = get_option('dohko_hc_what_p3');
				$wp4 = get_option('dohko_hc_what_p4');
			?>
		<div class="about-text-l long-text">
			<?php if($wp1): ?>
				<p class="content"><?php print $wp1; ?></p>
			<?php endif; ?>
			<?php if($wp2): ?>
				<p class="content"><?php print $wp2; ?></p>
			<?php endif; ?>				
			<?php if($wp3): ?>
				<p class="content"><?php print $wp3; ?></p>
			<?php endif; ?>				
			<?php if($wp4): ?>
				<p class="content"><?php print $wp4; ?></p>
			<?php endif; ?>				
		</div>
		<div class="about-img h-img long-text">
			<img src="<?php print IMAGES.'/Bien Conmigo - Health Coach.jpg'; ?>" alt="¿Qué es Health Coaching?" />
		</div>
	</div>
	
	<div class="video-container">
		<?php 
			$video_url = get_option('dohko_video');
			if($video_url !== ''){ 
				echo wp_oembed_get($video_url);
			} 	
		?>
	</div>
	<div class="hc-container">
		<button class="btn-cta" type="button" onclick="location.href='<?php echo get_page_link( get_page_by_title( 'Reservar Cita' )->ID); ?>'">Reservar Cita</button>
	</div>
	<div class="flex-center" style="width:100%">
		<div style="width:100%">
			<p class="content" style="text-align:center">Reserva tu cita inicial conmigo <a href="<?php echo get_page_link( get_page_by_title( 'Reservar Cita' )->ID); ?>">aquí</a></p>
		</div>
		<div style="width:100%">
			<p class="content" style="text-align:center">¿Te gustaría ser health coach? Para más información ingresa <a href="<?php echo get_page_link( get_page_by_title( 'Conviertete en Health Coach' )->ID); ?>">aquí</a></p>
		</div>		
	</div>		
</section>
<?php get_footer(); ?>