<?php
// Register Custom Post Type
function post_type_guides() {

	$labels = array(
		'name'                  => _x( 'Guides', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Guide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Guides', 'text_domain' ),
		'name_admin_bar'        => __( 'Guide', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Guides', 'text_domain' ),
		'add_new_item'          => __( 'Add New Guide', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Guide', 'text_domain' ),
		'edit_item'             => __( 'Edit Guide', 'text_domain' ),
		'update_item'           => __( 'Update Guide', 'text_domain' ),
		'view_item'             => __( 'View Guide', 'text_domain' ),
		'view_items'            => __( 'View Guides', 'text_domain' ),
		'search_items'          => __( 'Search Guide', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Guide image', 'text_domain' ),
		'set_featured_image'    => __( 'Set guide image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove guide image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as guide image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Guide', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this guide', 'text_domain' ),
		'items_list'            => __( 'Guides list', 'text_domain' ),
		'items_list_navigation' => __( 'Guides list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter guides list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Guide', 'text_domain' ),
		'description'           => __( 'A guide to include spots', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'guides', $args );

}
function post_type_spots() {

	$labels = array(
		'name'                  => _x( 'Spots', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Spot', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Spots', 'text_domain' ),
		'name_admin_bar'        => __( 'Spot', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Spots', 'text_domain' ),
		'add_new_item'          => __( 'Add New spots', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New spots', 'text_domain' ),
		'edit_item'             => __( 'Edit spots', 'text_domain' ),
		'update_item'           => __( 'Update Spot', 'text_domain' ),
		'view_item'             => __( 'View Spot', 'text_domain' ),
		'view_items'            => __( 'View Spots', 'text_domain' ),
		'search_items'          => __( 'Search Spot', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Spot image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Spot image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Spot image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Spot image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Spot', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Spot', 'text_domain' ),
		'items_list'            => __( 'Spots list', 'text_domain' ),
		'items_list_navigation' => __( 'Spots list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter spots list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Spot', 'text_domain' ),
		'description'           => __( 'A Spot to include spots', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'spots', $args );

}
add_action( 'init', 'post_type_guides', 0 );
add_action( 'init', 'post_type_spots', 0 );

function wpse_287931_register_categories_names_field() {

    register_rest_field( 'project',
        'categories_names',
        array(
            'get_callback'    => 'wpse_287931_get_categories_names',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}