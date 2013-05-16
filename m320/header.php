<?php
/**
* The Header for our theme.
*
* @package WordPress
* @subpackage m320
*/
?>
<!--[if lt IE 8]>
<html class="no-js ie oldie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="no-js ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8)| !(IE 9)  ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width" />

	<title><?php m320_page_title(); ?></title>
	<meta name="author" content="Matias Mancini" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- wp header -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="hfeed site">
		<header class="site-header" role="banner">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>

			<nav class="main-nav" role="navigation">
				<h3 class="visuallyhidden"><?php _e( 'Main Menu', 'm320' ); ?></h3>
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'm320' ); ?>"><?php _e( 'Skip to content', 'm320' ); ?></a>
				<?php wp_nav_menu( array('container' => false, 'menu' => 'primary', 'menu_class' => 'menu inline' ) ) ?>
			</nav>
		</header>

		<div id="main">

