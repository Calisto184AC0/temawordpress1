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