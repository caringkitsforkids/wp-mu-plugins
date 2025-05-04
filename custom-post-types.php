<?php
/*
 * Plugin Name:       Custom Post Types
 * Plugin URI:        https://github.com/caringkitsforkids/wp-mu-plugins
 * Version:           1.0.0
 * Author:            Caring Kits for Kids
 * Author URI:        https://github.com/caringkitsforkids
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       caringkitsforkids-custom-post-types
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action('init', function(){

    register_post_type('highlight', array(
        'labels'             => array(
            'name'                  => _x('Highlights', 'Post type general name'),
            'singular_name'         => _x('Highlight', 'Post type singular name'),
            'menu_name'             => 'Highlights',
            'name_admin_bar'        => 'Highlight',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Highlight',
            'new_item'              => 'New',
            'edit_item'             => 'Edit Highlight',
            'view_item'             => 'View',
            'all_items'             => 'All Highlights',
            'search_items'          => 'Search',
            'not_found'             => 'Not found.',
            'not_found_in_trash'    => 'Not found in Trash.',
        ),
        'public'             => false,
        'show_ui'            => true,
        'has_archive'        => false,
        'rewrite'            => false,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon'          => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgZmlsbD0iIzljYTFhNyIgY2xhc3M9ImJpIGJpLXN0YXItZmlsbCIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICA8cGF0aCBkPSJNMy42MTIgMTUuNDQzYy0uMzg2LjE5OC0uODI0LS4xNDktLjc0Ni0uNTkybC44My00LjczTC4xNzMgNi43NjVjLS4zMjktLjMxNC0uMTU4LS44ODguMjgzLS45NWw0Ljg5OC0uNjk2TDcuNTM4Ljc5MmMuMTk3LS4zOS43My0uMzkuOTI3IDBsMi4xODQgNC4zMjcgNC44OTguNjk2Yy40NDEuMDYyLjYxMi42MzYuMjgyLjk1bC0zLjUyMiAzLjM1Ni44MyA0LjczYy4wNzguNDQzLS4zNi43OS0uNzQ2LjU5Mkw4IDEzLjE4N2wtNC4zODkgMi4yNTZ6Ii8+Cjwvc3ZnPg==',
    ) );

    register_post_meta(
        'highlight',
        'read_more_link',
        array(
            'show_in_rest' => true,
            'type'         => 'string',
            'single'       => true,
            'description'  => '',
            'default'      => '',
        )
    );

    register_post_type('person', array(
        'labels'             => array(
            'name'                  => _x('People', 'Post type general name'),
            'singular_name'         => _x('Person', 'Post type singular name'),
            'menu_name'             => 'People',
            'name_admin_bar'        => 'Person',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Person',
            'new_item'              => 'New',
            'edit_item'             => 'Edit Person',
            'view_item'             => 'View',
            'all_items'             => 'All People',
            'search_items'          => 'Search',
            'not_found'             => 'Not found.',
            'not_found_in_trash'    => 'Not found in Trash.',
        ),
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'about-us/who-we-are', 'with_front' => false),
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'          => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0iI2E3YWFhZCIgY2xhc3M9ImJpIGJpLXBlcnNvbi1yb2xvZGV4IiB2aWV3Qm94PSIwIDAgMTYgMTYiPgogIDxwYXRoIGQ9Ik04IDkuMDVhMi41IDIuNSAwIDEgMCAwLTUgMi41IDIuNSAwIDAgMCAwIDUiLz4KICA8cGF0aCBkPSJNMSAxYTEgMSAwIDAgMC0xIDF2MTFhMSAxIDAgMCAwIDEgMWguNWEuNS41IDAgMCAwIC41LS41LjUuNSAwIDAgMSAxIDAgLjUuNSAwIDAgMCAuNS41aDlhLjUuNSAwIDAgMCAuNS0uNS41LjUgMCAwIDEgMSAwIC41LjUgMCAwIDAgLjUuNWguNWExIDEgMCAwIDAgMS0xVjNhMSAxIDAgMCAwLTEtMUg2LjcwN0w2IDEuMjkzQTEgMSAwIDAgMCA1LjI5MyAxem0wIDFoNC4yOTNMNiAyLjcwN0ExIDEgMCAwIDAgNi43MDcgM0gxNXYxMGgtLjA4NWExLjUgMS41IDAgMCAwLTIuNC0uNjNDMTEuODg1IDExLjIyMyAxMC41NTQgMTAgOCAxMGMtMi41NTUgMC0zLjg4NiAxLjIyNC00LjUxNCAyLjM3YTEuNSAxLjUgMCAwIDAtMi40LjYzSDF6Ii8+Cjwvc3ZnPg==',
    ) );

    register_post_meta(
        'person',
        'role',
        array(
            'show_in_rest' => true,
            'type'         => 'string',
            'single'       => true,
            'description'  => '',
            'default'      => '',
        )
    );

    register_post_meta(
        'person',
        'first_appointed',
        array(
            'show_in_rest' => true,
            'type'         => 'string',
            'single'       => true,
            'description'  => '',
            'default'      => '',
        )
    );

    register_post_meta(
        'person',
        'current_appointment_from',
        array(
            'show_in_rest' => true,
            'type'         => 'string',
            'single'       => true,
            'description'  => '',
            'default'      => '',
        )
    );

    register_post_meta(
        'person',
        'current_appointment_to',
        array(
            'show_in_rest' => true,
            'type'         => 'string',
            'single'       => true,
            'description'  => '',
            'default'      => '',
        )
    );
});

add_filter('allowed_block_types_all', function($allowed_block_types, $editor_context) {
    if ( 'person' === $editor_context->post->post_type ||
         'highlight' === $editor_context->post->post_type ) {
        return array(
            'core/paragraph'
        );
    }

    return $allowed_block_types;
}, 10, 2);

?>