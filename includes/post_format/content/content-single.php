<?php 
	dohko_post_title();
	dohko_meta_top();
?>
<div class="thumbnail">
	<?php single_post_thumbnail(); ?>
	<?php dohko_meta_tags_index() ?>
</div>	
<div class="post group">
	<?php 
		dohko_post_content();
		if(is_singular()) { 
			dohko_social_share();
		}
  ?>
</div>