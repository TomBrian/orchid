<?php
// include styles,fonts and scripts
wp_enqueue_style('main', get_template_directory_uri() . '/src/main.css', false, '1.1', 'all');
wp_enqueue_style('loader', get_template_directory_uri() . '/src/loader.css', false, '1.1', 'all');
//wp_enqueue_style( 'tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css',false,'all');
wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css', false, 'all');
// wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', false, 'all');
wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, 'all');
wp_enqueue_style('KoHo', 'https://fonts.googleapis.com/css2?family=KoHo&display=swap', false, 'all');
wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap', false, 'all');
wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', false, 'all');
wp_enqueue_script('menus', get_template_directory_uri() . '/src/main.js', array('jquery'), 1.1, true);
wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', 1.1, true);
wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'), 1.1, true);
// require the theme customizer
require(dirname(__FILE__) . '/includes/scripts/customizer/theme-options.php');
require(dirname(__FILE__) . '/includes/scripts/customizer/homepage.php');
require(dirname(__FILE__) . '/includes/scripts/customizer/sidebars.php');
require(dirname(__FILE__) . '/includes/scripts/function-admin.php');

// support thumbnails
add_theme_support('post-thumbnails');
add_theme_support('post-formats');
add_theme_support('widgets');
// register the main menu.The header menu
add_theme_support('menus');
register_nav_menus(
    array(
        'header-menu' => __('Header Menu')
    )
);
// add bootstrap classes
function register_navwalker()
{
    require_once get_template_directory() . '/src/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
function orc_get_footer_text()
{
    $text = " " . bloginfo('name') . " all rights reserved";
    echo $text;
}
function orc_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'orc_custom_excerpt_length', 999);
// send email
add_action('wp_ajax_enquiry', 'orc_send_email');
add_action('wp_ajax_nopriv_enquiry', 'orc_send_email');
function orc_send_email()
{
    // array to parse form data into
    $formData = [];
    // $_POST returns an object where the form data (string) is stored in the enquiry property
    wp_parse_str($_POST['enquiry'], $formData);
    // email data
    $to = get_option('admin_email');
    $subject = 'an enquiry from ' . $formData['fname'] . ' ' . $formData['sname'];
    $message = $formData['enquiry'];
    $headers[] = 'content-Type:text/html';
    $headers[] = 'From:' . $formData['email'];
    $headers[] = 'Phone:' . $formData['phone'];
    $headers[] = 'Reply-to:' . $formData['email'];
    try {
        // wp_mail error
        if (wp_mail($to, $subject, $message, $headers)) {
            wp_send_json_success($formData['email']);
        } else {
            wp_send_json_error($formData['email']);
        }
    }
    // global error
    catch (Exception $e) {
        wp_send_json_error($e);
    }
}
function orc_get_blog_sidebar(){
    get_template_part( 'template-parts/sidebar', 'blog');
}
function orc_get_page_sidebar(){
    get_template_part( 'template-parts/sidebar', 'page');
}