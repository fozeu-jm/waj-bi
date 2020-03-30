<?php

function theme_post_types() {
    register_post_type('services', array(
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Service',
            'add_new_item' => 'Ajouter service',
            'edit_item' => 'Modifier service',
            'all_items' => 'Tous les services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-awards',
    ));

    register_post_type('team', array(
        'rewrite' => array('slug' => 'Equipe'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Equipe',
            'add_new_item' => 'Ajouter un membre',
            'edit_item' => 'Modifier membre',
            'all_items' => 'Toutes l\'equipe',
            'singular_name' => 'Equipe'
        ),
        'menu_icon' => 'dashicons-groups',
    ));

    register_post_type('question', array(
        'rewrite' => array('slug' => 'Question'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Questions',
            'add_new_item' => 'Ajouter une questions',
            'edit_item' => 'Modifier question',
            'all_items' => 'Toutes les question',
            'singular_name' => 'Question'
        ),
        'menu_icon' => 'dashicons-editor-quote',
    ));
}

add_action('init', 'theme_post_types');
