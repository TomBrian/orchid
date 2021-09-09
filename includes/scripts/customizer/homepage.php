<?php
 if (class_exists('WP_Customize_Control')) {
    require_once  get_template_directory() . '/inc/class-customizer-toggle-control/class-customizer-toggle-control.php';
}
function orc_customize_register($wp_customize)
{
    // hero 
    $wp_customize->add_section('home_page', array(
        'title' => 'Frontpage settings',
        'description' => 'edit the homepage settings',
    ));
    // heading text
    $wp_customize->add_setting(
        'hero_visibility',
        array(
            'default' => '1',
        )
    );
    $wp_customize->add_control(new Customizer_Toggle_Control(
        $wp_customize,
        'hero_visibility',
        array(
            'label' => __('Edit hero section visibility &nbsp;'),
            'section' => 'home_page',
            'type' => 'ios',
            'priority' => 2,
        )
    ));
    $wp_customize->add_setting('hero_heading', array(
        'title' => 'edit hero heading',
        'transport' => 'postMessage',
        'type'  => 'theme_mod',
        'default' => 'some hero heading here'
    ));
    $wp_customize->add_control('hero_heading', array(
        'label' => 'edit heading text',
        'description'=>'if the fields are left empty default text is adapted',
        'section' => 'home_page',
        'priority' => 1
    ));
     // paragraph text
     $wp_customize->add_setting('hero_paragraph', array(
        'title' => 'edit hero paragraph',
        'transport' => 'postMessage',
        'type'  => 'theme_mod',
        'default' => 'some hero paragraph here'
    ));
    $wp_customize->add_control('hero_paragraph', array(
        'label' => 'edit paragraph text',
        'description'=>'if the fields are left empty default text is adapted',
        'section' => 'home_page',
        'priority' => 1
    ));
 
    //hero background image
    $wp_customize->add_setting('hero_image', array(
        'title' => 'hero image',
        'type' => 'theme_mod',
        'default' => get_template_directory_uri().'/includes/scripts/customizer/hero.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'             => 'background image for the hero section',
        'section'           => 'home_page',
        'settings'          => 'hero_image',
    )));
    // hero button
    $wp_customize->add_setting('hero_button_text', array(
        'title' => 'edit hero button text',
        'transport' => 'postMessage',
        'type'  => 'theme_mod',
        'default' => 'take the first step,Call us now'
    ));
    $wp_customize->add_control('hero_button_text', array(
        'label' => 'edit button text',
        'description'=>'if the fields are left empty default text is adapted',
        'section' => 'home_page',
        'priority' => 3
    ));
    // hero button link
    $wp_customize->add_setting('hero_button_link', array(
        'title' => 'edit hero button link',
        'transport' => 'postMessage',
        'type'  => 'theme_mod',
        'default' => '#'
    ));
    $wp_customize->add_control('hero_button_link', array(
        'label' => 'edit button link',
        'description'=>'if the fields are left empty default link is adapted',
        'section' => 'home_page',
        'priority' => 3
    ));

 // add selective refresh
 $wp_customize->selective_refresh->add_partial('hero_visibility', array(
    'selector' => '.hero', 
));
       $wp_customize->selective_refresh->add_partial('hero_heading', array(
        'selector' => '.hero-heading', 
    ));
    $wp_customize->selective_refresh->add_partial('hero_paragraph', array(
        'selector' => '.hero-paragraph', 
    ));
    $wp_customize->selective_refresh->add_partial('hero_image', array(
        'selector' => '.hero', 
    ));
    $wp_customize->selective_refresh->add_partial('hero_button_text', array(
        'selector' => 'button.hero-cta', 
    ));
}
add_action('customize_register', 'orc_customize_register');
