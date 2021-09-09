<?php
    // include the package 
    
    if (class_exists('WP_Customize_Control')) {
        require_once  get_template_directory() . '/inc/class-customizer-toggle-control/class-customizer-toggle-control.php';
    }
function orc_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'orc_custom_logo_setup');
function orc_customize_theme($wp_customize)
{
    $wp_customize->add_panel('Theme_options', array(
        'title' => 'Theme options (ORCHID)'
    ));

    //the header text control 
    $wp_customize->add_section('edit_header', array(
        'title' => 'menu bar options',
        'description' => '<h3 style="color:indigo;">edit the header section<h3/>',
        'panel' => 'Theme_options',
    ));
    $wp_customize->add_section('banner_options', array(
        'title' => 'banner options',
        'panel' => 'Theme_options'
    ));
    $wp_customize->add_setting('edit_banner_text', array(
        'title' => 'edit_banner_text',
        'type'  => 'theme_mod',
        'transport' => 'postMessage',
        'default' => 'Dont wait .Get help now. Call us on 123-567-890'
    ));
    $wp_customize->add_control('edit_banner_text', array(
        'type'  => 'text',
        'label' => 'Edit banner text',
        'description' => 'If the field is left empty, default text will be adapted',
        'section' => 'banner_options',
        'priority' => 1
    ));
    // pen icon
    $wp_customize->selective_refresh->add_partial('edit_banner_text', array(
        'selector' => '.banner p',
    ));

    // toggle the banner
    $wp_customize->add_setting(
        'banner_visibility',
        array(
            'default' => '1',
        )
    );
    $wp_customize->add_control(new Customizer_Toggle_Control(
        $wp_customize,
        'banner_visibility',
        array(
            'label' => __('Edit banner visibility &nbsp;'),
            'section' => 'banner_options',
            'type' => 'ios',
            'priority' => 2,
        )
    ));
    //  navbar cta button text and link
    // text
    $wp_customize->add_setting('edit_navbar_button_text', array(
        'title' => 'edit_navbar_button_text',
        'type'  => 'theme_mod',
        'default' => 'call us'
    ));
    $wp_customize->add_control('edit_navbar_button_text', array(
        'type'  => 'text',
        'transport' => 'postMessage',
        'label' => 'Edit navbar button text',
        'description' => 'If the field is left empty, default text will be adapted',
        'section' => 'edit_header',
        'priority' => 2
    ));
    // pen icon
    $wp_customize->selective_refresh->add_partial('edit_navbar_button_text', array(
        'selector' => '.navbar',
    ));

    // link
    $wp_customize->add_setting('edit_navbar_button_link', array(
        'title' => 'edit navbar button link',
        'type'  => 'theme_mod',
        'default' => '#'
    ));
    $wp_customize->add_control('edit_navbar_button_link', array(
        'type'  => 'text',
        'label' => 'Edit navbar button link',
        'description' => 'If the field is left empty, default link will be adapted',
        'section' => 'edit_header',
        'priority' => 2
    ));
    // add logo to navbar
    // $wp_customize->add_setting('add_logo', array(
    //     'title' => 'upload your logo',
    //         'type'  => 'theme_mod'
    //     ));
    //     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'add_logo', array(
    //         'label' => __( 'Upload Logo (replaces text)', 'upload logo' ),
    //         'section' => 'edit_header',
    //         'settings' => 'add_logo',
    //         ) ) );
    // footer
    $wp_customize->add_section('footer_shortcode', array(
        'title' => 'footer options',
        'description' => '<h3 style="color:indigo;">edit the footer section<h3/>',
        'panel' => 'Theme_options'
    ));
    // shortcode for a custom footer
    $wp_customize->add_setting('footer_shortcode', array(
        'title' => 'add custom footer',
        'type'  => 'theme_mod',
        'default' => ''
    ));
    $wp_customize->add_control('footer_shortcode', array(
        'type'  => 'text',
        'label' => 'add custom footer',
        'description' => 'paste in your custom footer shortcode to use it
        .You can create your own custom footer using elementor blocks',
        'section' => 'footer_shortcode',
        'priority' => 1
    ));
    $wp_customize->selective_refresh->add_partial('footer_shortcode', array(
        'selector' => '.theme-custom-footer',
    ));
    // custome theme colors
    $wp_customize->add_section('color_schemes', array(
        'title' => 'Colors',
        'description' => '<h3 style="color:indigo;">edit the theme color scheme<h3/>',
        // 'panel' => 'Theme_options'
    ));
    // theme color
    $wp_customize->add_setting('theme_color', array(
        'title' => 'Theme color',
        'type'  => 'theme_mod',
        'default' => '#29E2F2'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'theme_color',
        array(
            'label'      => __('Theme Color'),
            'description' => 'pick your theme color of choice',
            'section'    => 'color_schemes',
            'settings'   => 'theme_color',
        )
    ));
    // theme text color
    $wp_customize->add_setting('theme_text_color', array(
        'title' => 'Theme text color',
        'type'  => 'theme_mod',
        'default' => '#024985'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'theme_text_color',
        array(
            'label'      => __('Theme text Color'),
            'description' => 'pick your theme text color of choice',
            'section'    => 'color_schemes',
            'settings'   => 'theme_text_color',
        )
    ));
    // body color
    $wp_customize->add_setting('theme_body_color', array(
        'title' => 'Theme body color',
        'type'  => 'theme_mod',
        'default' => '#FFF'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'theme_body_color',
        array(
            'label'      => __('Theme body Color'),
            'description' => 'pick your theme body color of choice',
            'section'    => 'color_schemes',
            'settings'   => 'theme_body_color',
        )
    ));
    // navbar call to action

    $wp_customize->add_setting(
        'cta_visibility',
        array(
            'default' => '1',
        )
    );
    $wp_customize->add_control(new Customizer_Toggle_Control(
        $wp_customize,
        'cta_visibility',
        array(
            'label' => __('Edit navbar button visibility &nbsp;'),
            'section' => 'edit_header',
            'type' => 'ios',
            'priority' => 2,
        )
    ));
}
add_action('customize_register', 'orc_customize_theme');
