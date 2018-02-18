<?php //Template Name: Appointment Page
get_header();  ?>
<section id="appointment">
	<h1 class='page-title' style="display:none;"><?php the_title(); ?></h1>
	<div class="contact-middle group">
		<div class='contact-form'>
			<p class="padding-abajo negrita text-center appointment-title">Reserva tu cita inicial conmigo!</p>
			<?php
				$app1 = get_option('dohko_appointment_message_p1');
				$app2 = get_option('dohko_appointment_message_p2');
				$app3 = get_option('dohko_appointment_message_p3');
				$app4 = get_option('dohko_appointment_message_p4');
			?>
			<?php if($app1): ?><p class="padding-abajo no-margin negrita text-justify"><?php print $app1; ?></p><?php endif; ?>
			<?php if($app2): ?><p class="padding-abajo no-margin negrita text-justify"><?php print $app2; ?></p><?php endif; ?>
			<?php if($app3): ?><p class="padding-abajo no-margin negrita text-justify"><?php print $app3; ?></p><?php endif; ?>
			<?php if($app4): ?><p class="padding-abajo no-margin negrita text-justify"><?php print $app4; ?></p><?php endif; ?>
			<?php echo do_shortcode('[contact-form-7 id="119" title="Reservar Cita"]'); ?>
		</div>
		<div class='reservar_cita'>
		</div>
	</div>
</section>
<?php get_footer(); ?>