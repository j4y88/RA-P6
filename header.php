<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<style>
					.hero-background {
						background: url(<?php the_field("company-logo"); ?>) center no-repeat,
						url(<?php the_field("banner-image"); ?>) center no-repeat;
						background-size: auto, cover;
						height: 50vh;
					}
				</style>
				<div class="hero-background">
					<div class="height30px flex flex-center-a flex-space-between">
						<?php echo "<img src='".get_bloginfo("stylesheet_directory")."/assets/images/logos/inhabitent-logo-tent-white.svg' class='height30px'>"; ?>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->

			
