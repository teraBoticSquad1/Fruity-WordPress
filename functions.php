<?php

/** 
 * Theme Functions goes here 
 **/
add_theme_support('title-tag');

// calling all important files like css js jquery and bootstrap
function fruity_register_important_files()
{
    wp_enqueue_style('fruity_style', get_stylesheet_uri());

    // registering bootstrap
    wp_register_style('fruity_bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_bootstrap');
    
    // registering custom css
    wp_register_style('fruity_hero_stylesheet', get_template_directory_uri() . '/css/hero.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_hero_stylesheet');

    //google font
    wp_enqueue_style('fruity_google_font', 'https://fonts.googleapis.com/css2?family=Belanosima&display=swap', false);


    // registering js
    wp_enqueue_script('jquery');
    wp_enqueue_script('fruity_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array(), "4.0.0", "true");
    wp_enqueue_script('fruity_root_js', get_template_directory_uri() . '/js/root.js', array(),  "1.0.0", "true");
    wp_enqueue_script('fruity_menu_js', get_template_directory_uri() . '/js/responsive_menu.js', array(),  "1.0.0", "true");
}
add_action("wp_enqueue_scripts", "fruity_register_important_files");

// registering menu
register_nav_menu('fruity_menu', __('Header Menu', 'fruity'));
