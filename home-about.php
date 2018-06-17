<section id="about">
	<div class="about-content group">
		<?php
			$hab_msg1 = get_option('dohko_msg_p1');
			$hab_msg2 = get_option('dohko_msg_p2');
			$hab_msg3 = get_option('dohko_msg_p3');
			$hab_msg4 = get_option('dohko_msg_p4');
		?>
		<div class="about-text-l">
			<?php if($hab_msg1): ?><p class="content"><?php print $hab_msg1; ?></p><?php endif; ?>
			<?php if($hab_msg2): ?><p class="content"><?php print $hab_msg2; ?></p><?php endif; ?>
			<?php if($hab_msg3): ?><p class="content"><?php print $hab_msg3; ?></p><?php endif; ?>
			<?php if($hab_msg4): ?><p class="content"><?php print $hab_msg4; ?></p><?php endif; ?>
		</div>
		<div class="home-about-img about-img w-img">
		</div>
	</div>
</section>