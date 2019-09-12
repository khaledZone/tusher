<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package X_Portfolio
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site grid">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'x-portfolio' ); ?></a>

	<header id="masthead" class="site-header col-3-12" role="banner">
		<div class="site-branding">
			<h1 class="site-title">
			<?php

                $output = null;

                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    $output .= get_custom_logo();
                } else {
                    $output .= '<a href="'. esc_url( trailingslashit( home_url() ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">';
                    $output .= get_bloginfo( 'name' );
                    $output .= '</a>';
                }

                echo $output; ?>
                
            </h1>
            <?php

            $description = get_bloginfo( 'description', 'display' );
            if ( ( function_exists( 'the_custom_logo' ) && ! has_custom_logo() ) && $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
		</div><!-- .site-branding -->
        <?php do_action('pro-portfolio-intro'); ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
		 wp_nav_menu(array(
        'container_id' => 'cssmenu',
        'theme_location' => 'main',
        'fallback_cb'       => 'X_Portfolio_Menu_Walker::fallback',
        'walker' => new X_Portfolio_Menu_Walker()
    	));	?>
		</nav><!-- #site-navigation -->

        <div class="secondary">
            <div class="widget">
            <?php 
            if (is_front_page()) {
                do_action('portfolio-filters'); 
            }
            ?>
            </div>
        </div>
		<?php get_sidebar(); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content col-9-12">
