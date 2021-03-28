<?php

// register nav walker for the nav
require_once('wp_bootstrap_navwalker.php');

// Theme support
function wpb_theme_setup(){
    // add images to post
    add_theme_support( "post-thumbnails" );
    // nav menus
    register_nav_menus([
        "primary" => __("Primary Menu"),
    ]);

    //  Post Formats
    add_theme_support("post-formats", ["aside", "gallery"]);
}

// add action used to create something
add_action("after_setup_theme", "wpb_theme_setup");

// Change length of the excerpt
function set_excerpt_length(){
    return 40;
}
// add filter is used to create something
add_filter("excerpt_length", "set_excerpt_length");

// widget locations

function wpb_init_widgets($id){
    register_sidebar([
        "name" => "Sidebar",
        "id" => "sidebar",
        "before_widget" => "<div class='sidebar-module'>",
        "after_widget" => "</div>",
        "before_title" => "<h4>",
        "after_title" => "</h4>",
    ]);
    register_sidebar([
        "name" => "Box1",
        "id" => "box1",
        "before_widget" => "<div class='box'>",
        "after_widget" => "</div>",
        "before_title" => "<h3>",
        "after_title" => "</h3>",
    ]);
    register_sidebar([
        "name" => "Box2",
        "id" => "box2",
        "before_widget" => "<div class='box'>",
        "after_widget" => "</div>",
        "before_title" => "<h3>",
        "after_title" => "</h3>",
    ]);
    register_sidebar([
        "name" => "Box3",
        "id" => "box3",
        "before_widget" => "<div class='box'>",
        "after_widget" => "</div>",
        "before_title" => "<h3>",
        "after_title" => "</h3>",
    ]);
}

add_action("widgets_init", "wpb_init_widgets");

// customizer file
require get_template_directory(  ). "/includes/customizer.php";
?>