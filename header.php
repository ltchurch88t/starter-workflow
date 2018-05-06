<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="fluid-container">

		<nav id="site-navigation" class="navbar navbar-expand-sm navbar-dark bg-dark">
			<span class="navbar-brand"><?php bloginfo( 'name' );?></span>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
	          			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	       	 		</li>
	        		<li class="nav-item">
	          			<a class="nav-link" href="#">Link</a>
	        		</li>
	        	</ul>
	        </div>
			
		</nav><!-- #site-navigation -->

		<div class="jumbotron">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="display-3" id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="display-3" id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$starter_description = get_bloginfo( 'description', 'display' );
			if ( $starter_description || is_customize_preview() ) :
				?>
				<p class="text-muted" id="site-description"><?php echo $starter_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="container">
