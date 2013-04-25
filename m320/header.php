<?php
/**
* The Header for our theme.
*
* @package WordPress
* @subpackage m320
*/
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php m320_page_title(); ?></title>
	<meta name="viewport" content="width=device-width" />
	<meta name="author" content="Matias Mancini" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="site-header" role="banner">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>

			<nav class="main-navigation" role="navigation">
				<h3 class="visuallyhidden"><?php _e( 'Main Menu', 'm320' ); ?></h3>
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'm320' ); ?>"><?php _e( 'Skip to content', 'm320' ); ?></a>
				<?php wp_nav_menu( array('container' => false, 'menu' => 'primary', 'menu_class' => 'menu inline' ) ) ?>
			</nav><!-- #site-navigation -->
		</header>

		<div id="main">

