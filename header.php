<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-3 col-xl-2">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>" class="logo">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-9 col-xl-10">
                    <nav class="navbar navbar-expand-xl p-0 no-gutters mt-4 mb-4">
                        <div class="col-10 col-xl-4">
							<span id="site-description"><?php echo get_bloginfo( 'description', 'display' ); ?></span>
                            <span id="site-title"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></span>
                        </div>

                        <div class="col-2 col-xl-8">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="close"><i class="fas fa-times"></i></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <?php
                            wp_nav_menu(array(
                            'theme_location'    => 'secondary',
                            'container'       => 'div',
                            'container_id'    => 'social-nav-header',
                            'container_class' => 'collapse navbar-collapse justify-content-end social-nav',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 1,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                            ));
                            ?>

                            <?php
                            wp_nav_menu(array(
                            'theme_location'    => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => 'collapse navbar-collapse justify-content-end',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 252" id="blue-wave">
        <path fill-rule="evenodd"  fill="rgb(227, 227, 227)"
        d="M0.000,206.248 C0.000,206.248 0.000,234.322 0.000,251.256 C110.332,194.159 472.954,53.582 1082.782,23.620 C1463.391,4.920 1780.646,49.397 1920.000,81.522 C1920.000,60.261 1920.000,3.712 1920.000,3.712 L1920.000,-0.000 L0.000,-0.000 L0.000,206.248 Z"/>
        <path fill-rule="evenodd"  fill="rgb(2, 143, 197)"
        d="M0.000,0.000 L0.000,136.000 C0.000,136.000 31.746,124.664 66.563,115.295 C114.477,102.400 147.188,99.354 147.188,99.354 C147.188,99.354 100.588,114.144 63.750,126.547 C31.345,137.457 0.000,151.864 0.000,151.864 L0.000,228.752 C0.000,228.752 20.321,217.583 40.610,207.910 C62.533,197.459 84.375,187.495 84.375,187.495 C84.375,187.495 64.364,192.856 36.563,202.498 C16.112,209.590 0.000,217.500 0.000,217.500 L0.000,199.685 C0.000,199.685 123.494,136.389 353.438,86.227 C563.500,40.402 730.313,27.154 730.313,27.154 C730.313,27.154 701.836,32.868 668.437,39.344 C624.925,47.780 579.375,60.910 579.375,60.910 C579.375,60.910 958.709,-7.595 1401.560,8.401 C1776.458,21.942 1920.000,71.223 1920.000,71.223 L1920.000,39.344 C1920.000,39.344 1894.022,32.810 1860.937,26.216 C1827.853,19.622 1763.437,8.401 1763.437,8.401 C1763.437,8.401 1825.738,13.431 1860.000,18.715 C1898.244,24.613 1920.000,29.967 1920.000,29.967 L1920.000,0.000 L0.000,0.000 Z"/>
    </svg>
    <?php if(is_front_page()): ?>
        <div id="page-sub-header-background">
            <div id="page-sub-header" style="background: url('wp-content/uploads/2021/07/banner.png?w=1920&ssl=1') no-repeat center;">

            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>