<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page">
        <!-- skip to main content -->
        <a href="#content" class="skip-link screen-reader-text">
            <?php esc_html_e("Skip to Content", "wphierarchy"); ?>
        </a>

        <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
        <p class="site-title">
        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
        <?php bloginfo( "name" )  ?>
        </a>
        </p>
        <p class="site-description">
            <?php bloginfo( "description" ) ?>
        </p>
        </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                // two ways of adding nav menu
                $args = [
                    "theme_location" => "main-menu"
                ];
                wp_nav_menu($args);

                // wp_nav_menu([
                //     "theme_location" => "main-menu"
                // ]);
                ?>
            </nav>
        </header>
        <div id="content" class="site-content">

        
   