<?php

$theme_settings = get_theme_global_settings();

// print_r('ADDITIONAL SCRIPTS --');
// print_r($theme_settings);


function site_custom_scripts_on_head(){
    global $theme_settings;

    print_r($theme_settings['additional_scripts']['header_scripts']); 
}
add_action('wp_head', 'site_custom_scripts_on_head');


function site_custom_scripts_on_footer(){
    global $theme_settings;

    print_r($theme_settings['additional_scripts']['footer_scripts']); 
}
add_action('wp_footer', 'site_custom_scripts_on_footer');