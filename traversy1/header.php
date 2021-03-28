<!DOCTYPE html>
<!-- get language -->
<html <?php language_attributes(  ); ?>>

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- get site title from wordpress -->
    <title><?php bloginfo("title"); ?></title>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    <!-- linking to stylesheet -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <!-- adds what we need from the head. -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(  ); ?>>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header">
                <div id="logo">
                    <!-- get site title from wordpress -->
                    <h1><a href="#"><?php bloginfo( "title" ); ?></a></h1>
                    <!-- Get the site description -->
                    <p><?php bloginfo( "description" ); ?></p>
                </div>
            </div>
        </div>
        <!-- end #header -->
        <div id="menu">
            <!-- wordpress menu -->
        <?php wp_nav_menu(); ?>

            <!-- <ul>
                <li class="current_page_item"><a href="#">Homepage</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Links</a></li>
                <li><a href="#">Contact</a></li>
            </ul> -->


        </div>
        <!-- end #menu -->
        <div id="page">
            <div id="page-bgtop">
                <div id="page-bgbtm">
                    <div id="content">