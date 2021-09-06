<?php
/*
========================
ORCHID ADMIN PAGE
========================
*/
function orc_create_admin_page()
{
 add_menu_page( 'orchid options', 'orchid options', 'manage_options', 'theme_options', 'orc_render_menu_page', get_template_directory_uri( ).'/icons/favicon.svg', 60);
}
function orc_render_menu_page(){
    require_once get_template_directory( ).'/includes/admin-templates/general.php';
}
add_action('admin_menu', 'orc_create_admin_page');
