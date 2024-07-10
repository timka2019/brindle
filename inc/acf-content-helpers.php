<?php



function acf_button ( $link = false, $classes = '' ) {

    if( !$link || trim($link['title']) == '' ){ return; }

    return '<a class="'. $classes .'" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a>';

}