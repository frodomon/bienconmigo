<?php //Template Name: Testimonials Page
get_header();  ?>
<section id="health-coaching">
	<h1 class='page-title'><?php the_title(); ?></h1>
	<div class="about-top group">
		<div class="testimonials">
			<?php
				$t1 = get_option('dohko_t1');
				$t2 = get_option('dohko_t2');
				$t3 = get_option('dohko_t3');
				$t4 = get_option('dohko_t4');
				$t5 = get_option('dohko_t5');
				$t6 = get_option('dohko_t6');
				$t7 = get_option('dohko_t7');
				$t8 = get_option('dohko_t8');
				$t9 = get_option('dohko_t9');
				$t10 = get_option('dohko_t10');
				$t1_a = get_option('dohko_t1_a');
				$t2_a = get_option('dohko_t2_a');
				$t3_a = get_option('dohko_t3_a');
				$t4_a = get_option('dohko_t4_a');
				$t5_a = get_option('dohko_t5_a');
				$t6_a = get_option('dohko_t6_a');
				$t7_a = get_option('dohko_t7_a');
				$t8_a = get_option('dohko_t8_a');
				$t9_a = get_option('dohko_t9_a');
				$t10_a = get_option('dohko_t10_a');
				$testi = get_option('dohko_video_testi');
			?>
	
			<?php if($t1): ?>
				<div class="testi group">
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 1.png'; ?>" alt="Micaela Gonzalez" />
					</div>
					<div class="testimonials-l">
						<p class="content"><?php print $t1; ?></p>
						<p class="content"><?php print $t1_a; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<?php if($t2): ?>
				<div class="testi group">
					<div class="testimonials-r">
						<p class="content"><?php print $t2; ?></p>
						<p class="content"><?php print $t2_a; ?></p>
					</div>
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 2.png'; ?>" alt="Cindy Beuermann" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($t3): ?>
				<div class="testi group">
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 3.png'; ?>" alt="Mariana Barrera" />
					</div>
					<div class="testimonials-l">
						<p class="content"><?php print $t3; ?></p>
						<p class="content"><?php print $t3_a; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<?php if($t4): ?>
				<div class="testi group">
					<div class="testimonials-r">
						<p class="content"><?php print $t4; ?></p>
						<p class="content"><?php print $t4_a; ?></p>
					</div>
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 4.png'; ?>" alt="Alessandra Dentone" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($t5): ?>
				<div class="testi group">
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 5.png'; ?>" alt="¿Qué es Health Coaching?" />
					</div>
					<div class="testimonials-l">
						<p class="content"><?php print $t5; ?></p>
						<p class="content"><?php print $t5_a; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<?php if($t6): ?>
				<div class="testi group">
					<div class="testimonials-r">
						<p class="content"><?php print $t6; ?></p>
						<p class="content"><?php print $t6_a; ?></p>
					</div>
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 6.png'; ?>" alt="¿Qué es Health Coaching?" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($t7): ?>
				<div class="testi group">
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 7.png'; ?>" alt="¿Qué es Health Coaching?" />
					</div>
					<div class="testimonials-l">
						<p class="content"><?php print $t7; ?></p>
						<p class="content"><?php print $t7_a; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<?php if($t8): ?>
				<div class="testi group">
					<div class="testimonials-r">
						<p class="content"><?php print $t8; ?></p>
						<p class="content"><?php print $t8_a; ?></p>
					</div>
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 8.png'; ?>" alt="¿Qué es Health Coaching?" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($t9): ?>
				<div class="testi group">
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 9.png'; ?>" alt="¿Qué es Health Coaching?" />
					</div>
					<div class="testimonials-l">
						<p class="content"><?php print $t9; ?></p>
						<p class="content"><?php print $t9_a; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<?php if($t10): ?>
				<div class="testi group">
					<div class="testimonials-r">
						<p class="content"><?php print $t10; ?></p>
						<p class="content"><?php print $t10_a; ?></p>
					</div>
					<div class="img-testi">
						<img src="<?php print IMAGES.'/Bien Conmigo - Testimonial 10.png'; ?>" alt="¿Qué es Health Coaching?" />
					</div>
				</div>
			<?php endif; ?>
		</div>	
		<div class="video-container">
			<?php 
				$video_url = get_option('dohko_video_testi');
				if($video_url !== ''){ 
					echo wp_oembed_get($video_url);
				} 	
			?>
		</div>
	</div>		
</section>
<?php get_footer(); ?>