<?php

// Agregar javascripts y css
function xlc_scripts_styles() {
    // Estilos
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.7');
    wp_enqueue_script('script', get_template_directory_uri() .'/assets/js/script.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'xlc_scripts_styles' );