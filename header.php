<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>	
</head>
<body>
  <div id='wrap'>
	  <header>
      <div class="header-top group">
        <div class="h-left">
        </div>
        <div class="h-mid">
          <div class="header-logo">
            <?php $logo= get_option( 'dohko_logo');
              if (strcmp($logo, '') === 0) { $logo = IMAGES.'/Logo Bien Conmigo.png'; } 
              $url = home_url( '/' );
            ?>
            <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
          </div>
        </div>
        <div class="h-right flex-center">
          <?php
            $facebook = get_option('dohko_facebook');
            $youtube = get_option('dohko_youtube');
            $instagram = get_option('dohko_instagram');
            $googleplus = get_option('dohko_googleplus');
            $twitter = get_option('dohko_twitter');
          ?>
          <div class='h-social'>
            <?php if($facebook): ?><a href="<?php print $facebook; ?>" target="_blank"><i class="fa fa-facebook-square fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
            <?php if($youtube): ?><a href="<?php print $youtube; ?>" target="_blank"><i class="fa fa-youtube fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
            <?php if($instagram): ?><a href="<?php print $instagram; ?>" target="_blank"><i class="fa fa-instagram fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
            <?php if($googleplus): ?><a href="<?php print $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-official fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
            <?php if($twitter): ?><a href="<?php print $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
            <a href="<?php echo get_page_link( get_page_by_title( Contacto )->ID ); ?>"><i class="fa fa-envelope fa-2x sn_icons" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="header-menu group">
        <div class="h-logo">
          <a href="<?php echo esc_url($url) ?>"><img id="logo-fixed" src="<?php print IMAGES.'/Logo Bien Conmigo Fixed.png' ?>" alt="<?php bloginfo('name'); ?>" /></a>
          <a href="<?php echo esc_url($url) ?>"><img id="logo-mobile" src="<?php print IMAGES.'/Logo Bien Conmigo Fixed Inv.png' ?>" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
        <div class="h-menu">
          <?php
            wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'sf-menu' ));
          ?>
        </div>
          <?php
            get_search_form();
          ?>
        <div class="togglemenu">
          <button class="togglebar" href="#" title="Menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
        </div>
      </div>
      <div class="responsive-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'toggle-menu' ) ); ?>
      </div>
    </header>	
    