		<?php
				$facebook = get_option('dohko_facebook');
				$youtube = get_option('dohko_youtube');
				$instagram = get_option('dohko_instagram');
				$googleplus = get_option('dohko_googleplus');
				$twitter = get_option('dohko_twitter');
				$trademark_text = get_option('dohko_trademark_text');
				$email = get_option('dohko_email');
			?>
		<section id="instagram-feed">
			<div class="follow-ig">
				<p class="ig-text">Sígueme en Instagram  <a class="ig-link" href="<?php print $instagram; ?>" target="_blank">@astridbeuermann</a></p>
			</div>
			<?php echo do_shortcode('[instagram-feed]'); ?>
		</section>
		<footer class="flex-center">
			<div class="footer-logo">
			  <?php $url = home_url( '/' ); ?>
    		<a href="<?php echo esc_url($url) ?>">
					<img id="footer-logo" src="<?php echo get_template_directory_uri().'/images/Logo Bien Conmigo Inv.png'; ?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>
			<div class="trademark-text">
				<div class='footer-content'>
					<p>
						<?php if($trademark_text): print $trademark_text; ?><?php endif; ?>	
					</p>
					<?php if($email): ?>
						<p>Contáctame: <a href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p>
					<?php endif; ?>
				</div>
			</div>
			
			<div class='footer-social'>
				<?php if($facebook): ?><a href="<?php print $facebook; ?>" target="_blank"><i class="fa fa-facebook-square fa-2x sn_f_icons" aria-hidden="true"></i></a><?php endif; ?>
				<?php if($youtube): ?><a href="<?php print $youtube; ?>" target="_blank"><i class="fa fa-youtube fa-2x sn_f_icons" aria-hidden="true"></i></a><?php endif; ?>
				<?php if($instagram): ?><a href="<?php print $instagram; ?>" target="_blank"><i class="fa fa-instagram fa-2x sn_f_icons" aria-hidden="true"></i></a><?php endif; ?>
				<?php if($googleplus): ?><a href="<?php print $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-official fa-2x sn_f_icons" aria-hidden="true"></i></a><?php endif; ?>
				<?php if($twitter): ?><a href="<?php print $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-2x sn_f_icons" aria-hidden="true"></i></a><?php endif; ?>
				<a href="<?php echo get_page_link( get_page_by_title( Contacto )->ID ); ?>"><i class="fa fa-envelope fa-2x sn_f_icons" aria-hidden="true"></i></a>
			</div>
			
			<div class='footer-bottom col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class='footer-bottom-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
					<p class='footer-bot'>Copyright &copy; <?=date('Y');?> <?php bloginfo('name'); ?>. Todos los derechos reservados</p>
				</div>
				<div class='footer-bottom-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
					<p class='footer-bot'>Desarrollado por <a href="https://pe.linkedin.com/in/alfredohvasqueza" target="_blank"><strong>Alfredo Vásquez</strong></a></p>
				</div>		
			</div>	
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>