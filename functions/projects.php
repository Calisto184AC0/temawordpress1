<?php

// Crear el custom post type para los proyectos
function xlc_create_project_post_type() {
    $labels = array(
        'name'                  => __('Proyectos', 'xaloc'),
        'singular_name'         => __('Proyecto', 'xaloc'),
        'menu_name'             => __('Proyectos', 'xaloc'),
        'all_items'             => __('Todos los proyectos', 'xaloc'),
        'view_item'             => __('Ver proyecto', 'xaloc'),
        'add_new_item'          => __('Añadir nuevo proyecto', 'xaloc'),
        'add_new'               => __('Añadir nuevo proyecto', 'xaloc'),
        'edit_item'             => __('Editar Proyecto', 'xaloc'),
        'update_item'           => __('Actualizar Proyecto', 'xaloc'),
        'search_item'           => __('Buscar Proyecto', 'xaloc'),
        'not_found'             => __('No encontrado', 'xaloc'),
        'not_found_in_trash'    => __('No encontrado en la papelera', 'xaloc')
    );

    $args = array(
        'label'                 => __('proyectos', 'xaloc'),
        'description'           => __('Proyectos realizados', 'xaloc'),
        'labels'                => $labels,
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-text-page',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'show_in_rest'          => true,
        'capibility_type'       => 'page'
    );

    register_post_type( 'proyectos', $args );
}

add_action( 'init', 'xlc_create_project_post_type', 0 );
add_theme_support( 'post-thumbnails' );     // Para que se pueda incluir la imagen destacada

// Creando la taxonomia para las diferentes categorias: voluntariado, divulgación e investigación
function xlc_create_project_type_taxonomy() {
    $labels = array(
        'name'                  => __('Tipo de proyecto', 'xaloc'),
        'singular_name'         => __('Tipo de proyecto', 'xaloc'),
        'search_items'          => __('Buscar tipo de proyecto', 'xaloc'),
        'all_items'             => __('Todos los tipo de proyecto', 'xaloc'),
        'edit_item'             => __('Editar tipo de proyecto', 'xaloc'),
        'update_item'           => __('Actualizar tipo de proyecto', 'xaloc'),
        'add_new_item'          => __('Añadir nuevo tipo de proyecto', 'xaloc'),
        'new_item_name'         => __('Nuevo tipo de proyecto', 'xaloc'),
        'menu_name'             => __('Tipo de proyecto', 'xaloc')
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'show_in_rest'          => true
    );

    register_taxonomy( 'tipo_proyecto', array('proyectos'), $args );
}

add_action( 'init', 'xlc_create_project_type_taxonomy' );