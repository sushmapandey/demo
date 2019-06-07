<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header container">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></h1>				
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="">
			<div class="ham">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="menus">
				<!-- <ul>
					<li><a href="">Diamonds</a></li>
					<li><a href="">Wedding & Engagement</a></li>
					<li><a href="">Collection</a>
						<ul class="submenu">
							<li><a href="">Gem</a></li>
							<li><a href="">Gem</a></li>
							<li><a href="">Gem</a></li>
							<li><a href="">Gem</a></li>
						</ul>
					</li>
					<li><a href="">About us</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Contact</a></li>
				</ul> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
			) );
			?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
