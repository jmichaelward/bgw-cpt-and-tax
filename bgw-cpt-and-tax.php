<?php
/**
 * Plugin Name: Board Games Weekly Custom Post Types and Taxonomies
 * Plugin URI: https://boardgamesweek.com
 * Description: Registers Custom Post Types and Taxonomies to be accessed via the API.
 * Author: J. Michael Ward
 * Author URI: https://jmichaelward.com
 */

add_action( 'init', 'register_games_post_type' );

function register_games_post_type() {
    register_post_type( 'bgw_game',
        [
            'labels'             => [
                'name'               => _x( 'Games', 'post type general name', 'bgw' ),
                'singular_name'      => _x( 'Game', 'post type singular name', 'bgw' ),
                'menu_name'          => _x( 'Games', 'admin menu', 'bgw' ),
                'name_admin_bar'     => _x( 'Game', 'add new on admin bar', 'bgw' ),
                'add_new'            => _x( 'Add New', 'bgw_game', 'bgw' ),
                'add_new_item'       => __( 'Add New Game', 'bgw' ),
                'new_item'           => __( 'New Game', 'bgw' ),
                'edit_item'          => __( 'Edit Game', 'bgw' ),
                'view_item'          => __( 'View Game', 'bgw' ),
                'all_items'          => __( 'All Games', 'bgw' ),
                'search_items'       => __( 'Search Games', 'bgw' ),
                'parent_item_colon'  => __( 'Parent Games:', 'bgw' ),
                'not_found'          => __( 'No games found', 'bgw' ),
                'not_found_in_trash' => __( 'No games found in Trash.', 'bgw' ),
            ],
            'description'        => __( 'A post type for a board games collection', 'bgw' ),
            'public'             => false,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'rewrite'            => [ 'slug' => 'game' ],
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'supports'           => [ 'title', 'editor', 'thumbnail' ],
        ]
    );

    add_theme_support ( 'post-thumbnails', [ 'bgw_game' ] );
}