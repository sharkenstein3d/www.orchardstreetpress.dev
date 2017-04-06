<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="menu-btn"><i class="menu-toggle fa fa-bars fa-2x"></i></div>
	<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'osp' ); ?></a>

	<div class="hero" style="background-image: url('<?php header_image(); ?>')">
		<div class="inner-hero">
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<p><?php bloginfo('description'); ?> </p>
		</div>
	</div>

	<div id="content" class="site-content">
