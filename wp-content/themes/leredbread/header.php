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
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container"> 	
					<div class="site-branding">
						<div class="site-branding-inner">
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<div class="logo">
								<a href="http://localhost:3000/le-red-bread/" rel="home">
									<img src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo.svg" class="logo" alt="Le Red Bread logo"/>
								</a>
							</div>
								
							<div >
								<ul class="social-container">
									<li><i class="fa fa-facebook"></i></li>
									<li><i class="fa fa-twitter"></i></li>
									<li><i class="fa fa-google-plus"></i></li>
									<li><i class="fa fa-envelope"></i></li>
								</ul>
							</div>

						</div>
					</div>

					<div class="clearfix" id="navigation">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="main-navigation-container">
								<div class="menu-main-container">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								</div>

								<div class="header-search">
									<?php get_search_form(); ?>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</header>

			<div id="content" class="site-content">
