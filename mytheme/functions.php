<?php

// Add Css
function raddy_enqueue_styles(){
    wp_register_style("styles", get_template_directory_uri(  ) . "/css/styles.css");
    $dependencies = array("styles");
    wp_enqueue_style( "raddy-style", get_stylesheet_uri(  ), $dependencies );
}
add_action( "wp_enqueue_scripts", "raddy_enqueue_styles" );

// adds the title to the tab
function basic_wp_setup() {
    add_theme_support( "title-tag" );
}
add_action( "after_setup_theme", "basic_wp_setup" );

// adds images to the posts
add_theme_support( "post-thumbnails" );

// custom menu
function wpb_custom_new_menu(){
    register_nav_menu( "my-custom-meny", __("My Custom Menu") );
}
add_action("init", "wpb_custom_new_menu");



?>