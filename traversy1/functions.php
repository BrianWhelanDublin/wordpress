<?php
// adds the menus
add_theme_support( "menus" );


// adds images to the posts
add_theme_support( "post-thumbnails" );


register_sidebar([
    "name"  =>  __( "Right Hand Sidebar" ),
    "id"    =>  "right-sidebar",
    "description"    =>  __( "Widgets in this area will be shown on the right-hand side" ),
    "before_title"    =>  "<h2 class='sidebar_title' >",
    "after_title"    =>  "</h2>",
    "before_widget"    =>  "<div id='%1$s' class='widget %2$s'>",
    "after_widget"    =>  "</div> <!-- widget end -->",
]);

?>