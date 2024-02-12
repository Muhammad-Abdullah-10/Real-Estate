<?php
function add_custom_post_types()
{
    register_post_type('agent', array(
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => false,
        'custom-fields' => true,
        'labels' => array(
            'name' => 'Agent',
            'edit_item' => 'Edit Agent',
            'view_item' => 'View Agent',
            'add_new_item' => 'Add New Agent',
            'all_items' => 'All Agent',
            'singular_name' => 'Agent'
        ),
        'menu_icon' => 'dashicons-businessman'
    ));

    register_post_type('properties', array(
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => false,
        'custom-fields' => true,
        'labels' => array(
            'name' => 'Property',
            'edit_item' => 'Edit Property',
            'view_item' => 'View Property',
            'add_new_item' => 'Add New Property',
            'all_items' => 'All Property',
            'singular_name' => 'Property'
        ),
        'menu_icon' => 'dashicons-building'
    ));
}

add_action('init', 'add_custom_post_types');
