<?php
/**
 * Created by PhpStorm.
 * User: jamestrevorlees
 * Date: 16/01/23
 * Time: 12:51 PM
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}



