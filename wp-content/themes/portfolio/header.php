<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>

    <link rel="favicon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri("/public/logo.png") ?>">

    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo bloginfo('description'); ?>">


</head>


<body>

    <div data-progress-track>
        <div data-progress-bar>a</div>
    </div>

    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-box" data-cursor-box></div>

    <div class="fixed-bg" id="fixed-bg" style="--url:url(<?php echo get_theme_file_uri("/public/bg.png") ?>)"></div>


    <div class="preloader">
        <div class="letters">
            <span>p</span>
            <span>o</span>
            <span>r</span>
            <span>t</span>
        </div>
        <div class="letters">
            <span>f</span>
            <span>o</span>
            <span>l</span>
            <span>i</span>
            <span>o</span>
        </div>
    </div>


    <div class="website-content">

        <header class="header">
            <div class="container header-wrapper">
                <a href="/" class="logo">

                    <h1>
                        <span class="logo-wrap">
                            <span class="line"></span>
                            <span class="text">
                                mayank
                            </span>
                        </span>
                        <span class="logo-wrap">
                            <span class="line"></span>
                            <span class="text">
                                panchal
                            </span>
                        </span>
                    </h1>
                </a>

                <!-- <div class="search">
                <?php get_search_form();
                ?>
            </div> -->


                <div class="hidden sm:flex navigations">
                    <?php
                    echo wp_nav_menu(array(
                        "theme_location" => "header_nav",
                        "container" => false,
                        "items_wrap" => '<ul class="header-nav-links">%3$s</ul>'
                    ))
                    ?>

                </div>

                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </header>

        <!-- <div class="dropdown active">
        <div class="navigations">
            <?php
            echo wp_nav_menu(array(
                "theme_location" => "header_nav",
                "container" => false,
                "items_wrap" => '<ul class="mobile-nav-links">%3$s</ul>'
            ))
            ?>

        </div>
    </div> -->