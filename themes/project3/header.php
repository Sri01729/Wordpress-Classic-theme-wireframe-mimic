<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/themes/project2/style.css">
    <?php wp_head(); ?>
</head>

<body>

    <main>
        <header>
            <div class="header-container">
                <div class="logo">
                    <?php $header = get_field('header'); ?>
                    <span>
                        <img src="<?php  the_field('header'); ?>" alt="">

                    </span>

                </div>


                <?php
                    // Check if the 'header' menu exists and then display it
                    if (has_nav_menu('header')) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'menu_id' => 'header-menu',
                                'menu_class' => 'nav-menu',
                                // Add any other wp_nav_menu options here
                            )
                        );
                    }
                    ?>


            </div>
            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
        </header>