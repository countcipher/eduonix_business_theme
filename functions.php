<?php

require_once('wp_bootstrap_navwalker.php');

//THEME SUPPORT
//==============================
function business_theme_setup(){

    //REGISTER MENU
    //==============================
    register_nav_menus(array(
        'primary'   =>  'Primary Menu'
    ));

    //LOGO SUPPORT
    //===============================
    add_theme_support('custom-logo');
}

//FIRES THEME SUPPORT FUNCTIONS
//======================================
add_action('after_setup_theme', 'business_theme_setup');

//ADD CUSTOMIZER FUNCTIONS/FILES
require get_template_directory().'/includes/customizer.php';