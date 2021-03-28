<?php 

function wpb_customize_register($wp_customize){
    // showcase section
    $wp_customize->add_section("showcase", [
        "title" =>  __("Showcase", "bootstraptheme"),
        "description" =>  sprintf(__("Options for showcase", "bootstraptheme")),
        "priority" =>  130,
    ]);

// settings for image
$wp_customize->add_setting("showcase_image", [
    "default"  =>  get_bloginfo("template_directory")."/img/showcase.jpg",
    "type"  => "theme_mod",
]);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "showcase_image", [
    "label" =>  __("Showcase Image", "bootstraptheme"),
        "section" =>  "showcase",
        "settings" =>  "showcase_image",
        "priority" =>  1,
]));

   // settings and control for heading
    $wp_customize->add_setting("showcase_heading", [
        "default"  => _x("Traversy Media Bootstrap Theme",  "bootstraptheme"),
        "type"  => "theme_mod",
    ]);

    $wp_customize->add_control("showcase_heading", [
        "label" =>  __("Heading", "bootstraptheme"),
        "section" =>  "showcase",
        "priority" =>  2,
    ]);

    // heading and control for description
    $wp_customize->add_setting("showcase_text", [
        "default"  => _x("Just another WordPress site",  "bootstraptheme"),
        "type"  => "theme_mod",
    ]);

    $wp_customize->add_control("showcase_text", [
        "label" =>  __("Description", "bootstraptheme"),
        "section" =>  "showcase",
        "priority" =>  3,
    ]);

       $wp_customize->add_setting("btn_url", [
        "default"  => _x("http://test.com",  "bootstraptheme"),
        "type"  => "theme_mod",
    ]);

    $wp_customize->add_control("btn_url", [
        "label" =>  __("Button URL", "bootstraptheme"),
        "section" =>  "showcase",
        "priority" =>  4,
    ]);
// button text
    $wp_customize->add_setting("btn_text", [
        "default"  => _x("Read More",  "bootstraptheme"),
        "type"  => "theme_mod",
    ]);
    $wp_customize->add_control("btn_text", [
        "label" =>  __("Button Text", "bootstraptheme"),
        "section" =>  "showcase",
        "priority" =>  5,
    ]);
}

add_action("customize_register", "wpb_customize_register")

?>