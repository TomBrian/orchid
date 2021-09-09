<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="<?php bloginfo('description') ?>" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" defer>
    <title><?php if (is_front_page()) {
                bloginfo('name');
            } elseif (is_home()) {
                bloginfo('title');
            } else {
                the_title();
            } ?> | <?php bloginfo('description') ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?> class="bodyColor">

    <?php wp_body_open() ?>
    <!-- custom color scheme -->
    <!-- variables -->
    <?php
    $theme_color = get_theme_mod('theme_color', '#29E2F2');
    $text_color = get_theme_mod('theme_text_color', '#024985');
    $body_color = get_theme_mod('theme_body_color', '#FFF');
    ?>
    <style>
        /* body background color */
        .bodyColor {
            background-color: <?php echo $body_color ?> !important;
        }

        body {
            background-color: <?php echo $body_color ?> !important;
        }

        /* Theme color */
        .themeBackgroundColor {
            background-color: <?php echo $theme_color ?> !important;
            color: white;
        }

        .themeTextColor {
            color: <?php echo  $theme_color ?>;
        }

        .navbar-brand:hover {
            color: <?php echo  $theme_color ?>;
        }

        .dropdown-menu {
            color: white !important;
            background-color: <?php echo $theme_color ?>;
        }

        /* Theme text color */
        .themeSecondaryTextColor {
            color: <?php echo $text_color ?>;
        }

        .themedarkbackground {
            background-color: <?php echo $text_color ?>;
            color: white;
        }

        /* arrow head */
        .dropdown>.dropdown-menu::before {
            border: solid 10px <?php echo $theme_color ?>;
        }

        /* front page */
        .hero {
            background-color: <?php echo $text_color . '41' ?>;
        }

        .article h1 {
            color: <?php echo $theme_color ?>;
        }
    </style>
    <?php include(dirname(__FILE__) . "/includes/templates/navbar.php") ?>