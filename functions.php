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
    wp_register_style('fruity_root_stylesheet', get_template_directory_uri() . '/css/root.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_root_stylesheet');
    wp_register_style('fruity_hero_stylesheet', get_template_directory_uri() . '/css/home/hero.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_hero_stylesheet');
    wp_register_style('fruity_home_cetegory_stylesheet', get_template_directory_uri() . '/css/home/category.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_home_cetegory_stylesheet');
    wp_register_style('fruity_hurry_up_stylesheet', get_template_directory_uri() . '/css/home/hurry_up.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_hurry_up_stylesheet');
    wp_register_style('fruity_why_chose_us', get_template_directory_uri() . '/css/home/why_chose_us.css', array(), "4.0.0", "all");
    wp_enqueue_style('fruity_why_chose_us');

    //google font
    wp_enqueue_style('fruity_google_font', 'https://fonts.googleapis.com/css2?family=Ubuntu&display=swap', false);


    // registering js
    wp_enqueue_script('jquery');
    wp_enqueue_script('fruity_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array(), "4.0.0", "true");
    wp_enqueue_script('fruity_root_js', get_template_directory_uri() . '/js/root.js', array(),  "1.0.0", "true");
    wp_enqueue_script('fruity_menu_js', get_template_directory_uri() . '/js/responsive_menu.js', array(),  "1.0.0", "true");
    wp_enqueue_script('fruity_hurry_up_counter_js', get_template_directory_uri() . '/js/home/hurry_up_countdown.js', array(),  "1.0.0", "true");
}
add_action("wp_enqueue_scripts", "fruity_register_important_files");

// registering menu
register_nav_menu('fruity_menu', __('Header Menu', 'fruity'));
