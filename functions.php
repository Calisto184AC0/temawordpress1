<?php

// Agregar menús de navegación
function xlc_menus() {
    $locations = array(
        'header-menu1' => __('Menú 1 Header', 'xaloc'),
        'header-menu2' => __('Menú 2 Header', 'xaloc'),
        'footer-menu1' => __('Menú 1 Footer', 'xaloc'),
        'footer-menu2' => __('Menú 2 Footer', 'xaloc')
    );

    register_nav_menus($locations);
}

add_action('init', 'xlc_menus');

// Agregar estilos al li en el menú del footer
function xlc_add_class_on_li($classes, $item, $args) {
    if (isset( $args->add_li_class )) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter( 'nav_menu_css_class', 'xlc_add_class_on_li', 1, 3 );

// Agregar javascripts y css
function xlc_scripts_styles() {
    // Estilos
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.3');
    wp_enqueue_script('script', get_template_directory_uri() .'/assets/js/script.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'xlc_scripts_styles' );