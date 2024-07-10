<?php


function regular_content_background( $background = false, $settings = [] ){

    if( !$background ){ return; }

    
    $color = $background['color'];

    $desktop_image = $background['image']['desktop']['url'];
    $mobile_image = $background['image']['desktop']['url'];
    if( isset($background['image']['mobile']) && !empty($background['image']['mobile']) ){
        $mobile_image = $background['image']['mobile']['url'];
    }

    $video_url = $background['video']['url'];
    $overlay = $background['overlay'];

    $parallax = ( isset($settings['parallax']) ) ? $settings['parallax'] : false;

    $content = '
        <div class="regular-content__background ' . ( ( $parallax ) ? 'regular-content__background--parallax' : '' ) . '">
            <div class="regular-content__background__wrap">
    
                <div class="regular-content__background--item regular-content__background--color" style="background-color: '.$color.'"></div>
                <div class="regular-content__background--item regular-content__background--image desktop" style="background-image: url('.$desktop_image.')"></div>
                <div class="regular-content__background--item regular-content__background--image mobile" style="background-image: url('.$mobile_image.')"></div>
                <div class="regular-content__background--item regular-content__background--video">
                    ' . ( ( isset($video_url) && !empty($video_url) ) ? '<video><source src="'.$video_url.'"></video>' : '' ) . '
                </div>
                <div class="regular-content__background--item regular-content__background--overlay" style="background: '.$overlay.'"></div>
            
            </div>
        </div>
    ';
    return $content;
}