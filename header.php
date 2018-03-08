<!DOCTYPE HTML>
<html>
<head lang="id">
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<meta name="description" content="">
	<meta name="author" content="Moch Diki Widianto">
	
	<title><?php wp_title( '|', true, 'right' ); bloginfo();?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
	<!-- core CSS -->
	<!-- STYLES & JQUERY 
	================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/icons.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/skinbrown.css"/><!-- change skin color -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css"/><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>	
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid latansa-b">
	<div class="row space-bot latansa-b">
		<!--Logo-->
		<div class="c4">
			<a href="<?php echo site_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<?php wp_nav_menu( 
				array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'false',
					//'container_id'  	=> 'topNav',
					'menu_id'  		    => 'responsivemenu',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker()
				)
			); ?>
			</nav>
		</div>
	</div>
</div>
