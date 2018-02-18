<?php //Template Name: Buy Products Page
get_header();  ?>
<section id="contact_us">
	<h1 class='page-title' style="display:none;"><?php the_title(); ?></h1>
	<div class="contact-middle group">
		<div class='contact-form'>
			<p class="padding-abajo negrita"><i class="fa fa-envelope" aria-hidden="true"></i> Solicita Aquí:</p>
			<?php	$cf_msg = get_option('dohko_cf_txt_msg_product'); ?>
			<p class="padding-abajo no-margin negrita"><?php if($cf_msg): print $cf_msg; ?><?php endif; ?></p>
				<?php	echo do_shortcode('[contact-form-7 id="175" title="Solicitar Productos"]');?>

		</div>
		<div class='gmaps'>
		</div>
	</div>
</section>
<?php get_footer(); ?>