<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
	<div class="loading-wrapper d-flex justify-content-center align-items-center">
		<div class="logo-wrapper d-flex">
				<div class="brand-title">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>
				</div>
				<div class="menu-toggle">
					<div class="line"></div>
				</div>
			</div>
			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
		</div>
	</div>
	<div class="header-wrapper">
		<div id="header-background" class="d-flex flex-column justify-content-center align-items-center">
			<div class="menu-wrapper">
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'h-100 align-items-center justify-content-center align-content-center',
						'container_id'    => 'nav-wrapper',
						'menu_class'      => '',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
			<div class="logo-wrapper d-flex">
				<div class="brand-title">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>
				</div>
				<div class="menu-toggle">
					<div class="line"></div>
				</div>
			</div>
			<div class="contact-info">
				<div class="button d-flex justify-content-center align-items-center"><i class="fas fa-mobile-alt"></i></div>
				<div class="info">
					<a href="mailto:info@juventaonline.nl"><i class="fas fa-at"></i> info@juventaonline.nl</a>
					<a href="tel:060123456789"><i class="fas fa-mobile-alt"></i> Fabian: 06 321 542 67</a>
					<a href="tel:0625277247"><i class="fas fa-mobile-alt"></i> Mike: 06 252 772 47</a>
					<a target="_blank" href="https://www.facebook.com/juventaonline/"><i class="fab fa-facebook-f"></i> Facebook</a>
				</div>
			</div>
			<div id="particles-js"></div> 
		</div>