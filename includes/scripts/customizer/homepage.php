<?php
function orc_customize_register($wp_customize)
{
    // hero
    $wp_customize->add_section('home_page', array(
        'title' => 'Homepage settings',
        'description' => 'edit the homepage settings',
    ));
    // heading text
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
        'default' => get_template_directory_uri().'/includes/scripts/customizer/hero.jpg'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'             => 'background image for the hero section',
        'section'           => 'home_page',
        'settings'          => 'hero_image',
    )));
 // add selective refresh
       $wp_customize->selective_refresh->add_partial('hero_heading', array(
        'selector' => '.hero-heading', 
    ));
    $wp_customize->selective_refresh->add_partial('hero_paragraph', array(
        'selector' => '.hero-paragraph', 
    ));
    $wp_customize->selective_refresh->add_partial('hero_image', array(
        'selector' => '.hero', 
    ));
}
add_action('customize_register', 'orc_customize_register');
