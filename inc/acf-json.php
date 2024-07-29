<?php

add_action('acf/init', 'my_acfe_modules');
function my_acfe_modules(){

    // Enable Force Sync
    acf_update_setting('acfe/modules/force_sync', true);
    
}


function my_acf_json_save_point( $path ) {


    return get_template_directory() . '/acf-json';
    // return get_stylesheet_directory() . '/acf-json';
    

}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );



function my_acf_json_load_point( $paths ) {
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_stylesheet_directory() . '/acf-json';
    $paths[] = get_template_directory() . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );

