<?php
function orc_customize_theme($wp_customize){
    $wp_customize->add_panel('Theme_options', array(
        'title' => 'Theme options (ORCHID)'
    ));
    //the header text control 
    $wp_customize->add_section('edit_header', array(
        'title' => 'Header options',
        'description' => '<h3 style="color:indigo;">edit the header section<h3/>',
        'panel'=>'Theme_options'
    ));
    $wp_customize->add_setting('edit_banner_text', array(
        'title' => 'edit_banner_text',
        'type'  => 'theme_mod',
        'default' => 'Dont wait .Get help now. Call us on 123-567-890'
    ));
    $wp_customize->add_control('edit_banner_text', array(
        'type'  => 'text',
        'label' => 'Edit banner text',
        'description'=>'If the field is left empty, default text will be adapted',
        'section' => 'edit_header',
        'priority' => 1
    ));
    // toggle the banner
    $wp_customize->add_setting( 'banner_visibility',
    array(
       'default' => 'show',
    )
 );
  
 $wp_customize->add_control( 'banner_visibility',
    array(
       'label' => __( 'Edit banner visibility' ),
       'description' => esc_html__( 'Hide or show the banner by selecting your options on the radio buttons below.' ),
       'section' => 'edit_header',
       'type' => 'radio',
       'priority'=> 1,
       'choices' => array( 
          'show' => __( 'show' ),
          'hide' => __( 'hide' ),
       )
    )
 );
//  navbar cta button text and link
// text
$wp_customize->add_setting('edit_navbar_button_text', array(
    'title' => 'edit_navbar_button_text',
    'type'  => 'theme_mod',
    'default' => 'call us'
));
$wp_customize->add_control('edit_navbar_button_text', array(
    'type'  => 'text',
    'label' => 'Edit navbar button text',
    'description'=>'If the field is left empty, default text will be adapted',
    'section' => 'edit_header',
    'priority' => 2
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
    'description'=>'If the field is left empty, default link will be adapted',
    'section' => 'edit_header',
    'priority' => 2
));
// footer
$wp_customize->add_section('footer_shortcode', array(
    'title' => 'footer options',
    'description' => '<h3 style="color:indigo;">edit the footer section<h3/>',
    'panel'=>'Theme_options'
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
    'description'=>'paste in your custom footer shortcode to use it',
    'section' => 'footer_shortcode',
    'priority' => 1
));
// custome theme colors
$wp_customize->add_section('color_schemes', array(
    'title' => 'Colors',
    'description' => '<h3 style="color:indigo;">edit the theme color scheme<h3/>',
    'panel'=>'Theme_options'
));
// theme color
$wp_customize->add_setting('theme_color', array(
    'title' => 'Theme color',
    'type'  => 'theme_mod',
    'default' => '#00E4BC'
));
$wp_customize->add_control(new WP_Customize_Color_Control( 
    $wp_customize, 
    'theme_color', 
    array(
        'label'      => __( 'Theme Color' ),
        'description'=>'pick your theme color of choice',
        'section'    => 'color_schemes',
        'settings'   => 'theme_color',
    ) ) );
    // theme text color
    $wp_customize->add_setting('theme_text_color', array(
        'title' => 'Theme text color',
        'type'  => 'theme_mod',
        'default' => '#49008E'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'theme_text_color', 
        array(
            'label'      => __( 'Theme text Color' ),
            'description'=>'pick your theme text color of choice',
            'section'    => 'color_schemes',
            'settings'   => 'theme_text_color',
        ) ) );
        // body color
        $wp_customize->add_setting('theme_body_color', array(
            'title' => 'Theme body color',
            'type'  => 'theme_mod',
            'default' => '#EEFFFC'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control( 
            $wp_customize, 
            'theme_body_color', 
            array(
                'label'      => __( 'Theme body Color' ),
                'description'=>'pick your theme body color of choice',
                'section'    => 'color_schemes',
                'settings'   => 'theme_body_color',
            ) ) );
}
add_action( 'customize_register', 'orc_customize_theme');
?>