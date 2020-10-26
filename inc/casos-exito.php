<?php

// Register Custom Post Type Caso de Éxito
function create_casodexito_cpt()
{

    $labels = array(
        'name' => _x('Casos de Éxito', 'Post Type General Name', 'cases'),
        'singular_name' => _x('Caso de Éxito', 'Post Type Singular Name', 'cases'),
        'menu_name' => _x('Casos de Éxito', 'Admin Menu text', 'cases'),
        'name_admin_bar' => _x('Caso de Éxito', 'Add New on Toolbar', 'cases'),
        'archives' => __('Archivos Caso de Éxito', 'cases'),
        'attributes' => __('Atributos Caso de Éxito', 'cases'),
        'parent_item_colon' => __('Padres Caso de Éxito:', 'cases'),
        'all_items' => __('Todas Casos de Éxito', 'cases'),
        'add_new_item' => __('Añadir nueva Caso de Éxito', 'cases'),
        'add_new' => __('Añadir nueva', 'cases'),
        'new_item' => __('Nueva Caso de Éxito', 'cases'),
        'edit_item' => __('Editar Caso de Éxito', 'cases'),
        'update_item' => __('Actualizar Caso de Éxito', 'cases'),
        'view_item' => __('Ver Caso de Éxito', 'cases'),
        'view_items' => __('Ver Casos de Éxito', 'cases'),
        'search_items' => __('Buscar Caso de Éxito', 'cases'),
        'not_found' => __('No se encontraron Casos de Éxito.', 'cases'),
        'not_found_in_trash' => __('Ningún Caso de Éxito encontrado en la papelera.', 'cases'),
        'featured_image' => __('Imagen destacada', 'cases'),
        'set_featured_image' => __('Establecer imagen destacada', 'cases'),
        'remove_featured_image' => __('Borrar imagen destacada', 'cases'),
        'use_featured_image' => __('Usar como imagen destacada', 'cases'),
        'insert_into_item' => __('Insertar en la Caso de Éxito', 'cases'),
        'uploaded_to_this_item' => __('Subido a esta Caso de Éxito', 'cases'),
        'items_list' => __('Lista de Casos de Éxito', 'cases'),
        'items_list_navigation' => __('Navegación por el listado de Casos de Éxito', 'cases'),
        'filter_items_list' => __('Lista de Casos de Éxito filtradas', 'cases'),
    );
    $args = array(
        'label' => __('Caso de Éxito', 'cases'),
        'description' => __('Implementaciones Eco-Fold', 'cases'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('casodexito', $args);
}
add_action('init', 'create_casodexito_cpt', 0);
