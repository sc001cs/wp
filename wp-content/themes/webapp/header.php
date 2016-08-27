<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WEBAPP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Hind:400,300,600,500,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Bootstrap & Styles -->
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/block_grid_bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/owl.theme.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/animate.min.css" rel="stylesheet" />
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/jquery.circliful.css" rel="stylesheet" />
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/slicknav.css" rel="stylesheet" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'webapp' ); ?></a>

	<!-- TOP HEADER
	=================================================================-->
	<div class="top">

		<!--START MENU-->
		<div class="row">
			<div class="col-sm-3">
				<div class="logo">
					<a href="index.html"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt="" />
					</a>
				</div>
			</div>

			<!--START NAVBAR-->
			<div class="col-sm-9">

				<?php
					wp_nav_menu( array(
							'theme_location' 	=> 'primary',
							'container' 		=> 'nav',
							'container_class' 	=> '',
							'container_id' 	=> 'desktop-menu',
							'menu_class' 		=> 'sf-menu',
							'menu_id'			=> 'navigation'
						)
					)
				?>


<!--				<nav id="desktop-menu">-->
<!--					<ul class="sf-menu" id="navigation">-->
<!--						<li class="current"><a href="#">Home</a>-->
<!--						</li>-->
<!--						<li><a href="#">Services</a>-->
<!--							<ul>-->
<!--								<li><a href="shared.html"><i class="fa fa-file"></i> Website</a>-->
<!--								</li>-->
<!--								<li><a href="vps.html">SEO & Optimization</a>-->
<!--								</li>-->
<!--								<li><a href="servers.html">Social Network</a>-->
<!--								</li>-->
<!--								<li><a href="servers.html">Marketing on internet</a>-->
<!--								</li>-->
<!--							</ul>-->
<!--						</li>-->
<!--						<li><a href="#">Our works</a>-->
<!--						</li>-->
<!--						<li><a href="blog.html">Blog</a>-->
<!--						<li><a href="#">About us</a>-->
<!--						</li>-->
<!--						<li><a href="contact.html">Contact</a>-->
<!---->
<!--						</li>-->
<!--					</ul>-->
<!--				</nav>-->



			</div>
			<!--END NAVBAR-->
		</div>
		<!--END MENU-->
	</div>
	<!-- End of HEADER
	=================================================================-->
