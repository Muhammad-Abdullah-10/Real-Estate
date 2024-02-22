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
        'show_in_rest' => true,
        'custom-fields' => true,
       
        'labels' => array(
            'name' => 'Agent',
            'edit_item' => 'Edit Agent',
            'view_item' => 'View Agent',
            'add_new' => 'Add New Agent',
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
        'add_new'=> 'A',
        'add_new_item'=>'AA',
        'labels' => array(
            'name' => 'Real Estate',
            'edit_item' => 'Edit Property',
            'view_item' => 'View Property',
            'add_new' => 'Add New Property',
            'add_new_item' => 'Add New Property',
            'all_items' => 'All Property',
            'singular_name' => 'Property'
        ),
        'menu_icon' => 'dashicons-building'
    ));

        register_taxonomy( 'Type', 'properties', array(
            'rewrite'      => array( 'slug' => 'type' ),
            'label' => __( 'Type', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'Status', 'properties', array(
            'rewrite'      => array( 'slug' => 'status' ),
            'label' => __( 'Status', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'Features', 'properties', array(
            'rewrite'      => array( 'slug' => 'features' ),
            'label' => __( 'Features', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'Labels', 'properties', array(
            'rewrite'      => array( 'slug' => 'labels' ),
            'label' => __( 'Labels', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'Landmark', 'properties', array(
            'rewrite'      => array( 'slug' => 'landmark' ),
            'label' => __( 'Landmark', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'City', 'properties', array(
            'rewrite'      => array( 'slug' => 'city' ),
            'label' => __( 'City', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'State', 'properties', array(
            'rewrite'      => array( 'slug' => 'state' ),
            'label' => __( 'State', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
        register_taxonomy( 'Reviews', 'properties', array(
            'rewrite'      => array( 'slug' => 'reviews' ),
            'label' => __( 'Reviews', 'text_domain' ),
            'public' => true,
            'hierarchical' => true,
        ) );
}

add_action('init', 'add_custom_post_types');
