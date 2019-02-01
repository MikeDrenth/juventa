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
		<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
	</div>
	<div id="wrapper-navbar" class="d-none fixed-top" itemscope itemtype="http://schema.org/WebSite">
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
			<div class="logo-wrapper">
				<div class="menu-toggle">
					<div class="line"></div>
				</div>
				<div class="brand-title">
					<h2>Juventa Online</h2>
				</div>
			</div>
			<div class="header-text">
				<h3>Ontzorgen</h3>
				<h3>Dat is wat we doen</h3>
				<p>Juventa is er om jou te helpen meer uit je online activiteiten<br/> te halen op een zo makkelijk mogelijke manier</p>
			</div>
			<div class="contact-info">
				<div class="button d-flex justify-content-center align-items-center"><i class="fas fa-mobile-alt"></i></div>
				<div class="info">
					<a href="mailto:info@juventaonline.nl">info@juventaonline.nl</a>
					<a href="tel:060123456789">06 321 54 67</a>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>
	</div>