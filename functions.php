<?php
// include styles,fonts and scripts
wp_enqueue_style( 'main', get_template_directory_uri() . '/src/main.css',false,'1.1','all');
//wp_enqueue_style( 'tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css',false,'all');
wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css',false,'all');
wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',false,'all');
wp_enqueue_style( 'KoHo', 'https://fonts.googleapis.com/css2?family=KoHo&display=swap',false,'all');
wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap',false,'all');
wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap',false,'all');
 wp_enqueue_script( 'menus', get_template_directory_uri() . '/src/menu.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', 1.1, true);
 wp_enqueue_script( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
// require the theme customizer
require(dirname(__FILE__).'/includes/scripts/customizer.php');
// support thumbnails
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );
// register the main menu.The header menu
    add_theme_support( 'menus' );
    register_nav_menus(
        array(
        'header-menu'=>__( 'Header Menu' )
        )
    );
    // add bootstrap classes
    function register_navwalker(){
        require_once get_template_directory() . '/src/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );
?>
