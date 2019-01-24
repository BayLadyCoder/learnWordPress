<?php 

// Adding style.css
function newTheme_files () {
    wp_enqueue_style('newTheme_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', newTheme_files);


?>