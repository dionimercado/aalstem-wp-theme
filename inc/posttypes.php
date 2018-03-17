<?php

// Register Custom Post Type
function Testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'aalstem' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'aalstem' ),
		'menu_name'             => __( 'Testimonials', 'aalstem' ),
		'name_admin_bar'        => __( 'Testimonial', 'aalstem' ),
		'archives'              => __( 'Item Archives', 'aalstem' ),
		'attributes'            => __( 'Item Attributes', 'aalstem' ),
		'parent_item_colon'     => __( 'Parent Item:', 'aalstem' ),
		'all_items'             => __( 'All Items', 'aalstem' ),
		'add_new_item'          => __( 'Add New Item', 'aalstem' ),
		'add_new'               => __( 'Add New', 'aalstem' ),
		'new_item'              => __( 'New Item', 'aalstem' ),
		'edit_item'             => __( 'Edit Item', 'aalstem' ),
		'update_item'           => __( 'Update Item', 'aalstem' ),
		'view_item'             => __( 'View Item', 'aalstem' ),
		'view_items'            => __( 'View Items', 'aalstem' ),
		'search_items'          => __( 'Search Item', 'aalstem' ),
		'not_found'             => __( 'Not found', 'aalstem' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'aalstem' ),
		'featured_image'        => __( 'Featured Image', 'aalstem' ),
		'set_featured_image'    => __( 'Set featured image', 'aalstem' ),
		'remove_featured_image' => __( 'Remove featured image', 'aalstem' ),
		'use_featured_image'    => __( 'Use as featured image', 'aalstem' ),
		'insert_into_item'      => __( 'Insert into item', 'aalstem' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'aalstem' ),
		'items_list'            => __( 'Items list', 'aalstem' ),
		'items_list_navigation' => __( 'Items list navigation', 'aalstem' ),
		'filter_items_list'     => __( 'Filter items list', 'aalstem' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'aalstem' ),
		'description'           => __( 'Post Type Description', 'aalstem' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'								=> array(
			'slug'                  => 'testimonials',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		),
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonial', $args );

}
add_action( 'init', 'Testimonials_post_type', 0 );



// Register FAQs Post Type
function faqs_post_type() {

	$labels = array(
		'name'                => __( 'FAQs', 'Post Type General Name', 'aalstem' ),
		'singular_name'       => __( 'FAQ', 'Post Type Singular Name', 'aalstem' ),
		'menu_name'           => __( 'FAQs', 'aalstem' ),
		'parent_item_colon'   => __( 'Parent Faq:', 'aalstem' ),
		'all_items'           => __( 'All Faqs', 'aalstem' ),
		'view_item'           => __( 'View Faq', 'aalstem' ),
		'add_new_item'        => __( 'Add New Faq', 'aalstem' ),
		'add_new'             => __( 'Add New', 'aalstem' ),
		'edit_item'           => __( 'Edit Faq', 'aalstem' ),
		'update_item'         => __( 'Update Faq', 'aalstem' ),
		'search_items'        => __( 'Search Faq', 'aalstem' ),
		'not_found'           => __( 'Not found', 'aalstem' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'aalstem' ),
	);
	$rewrite = array(
		'slug'                => 'faqs',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'post_type', 'aalstem' ),
		'description'         => __( 'Fuel Meals FAQs', 'aalstem' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-editor-help',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'faq', $args );

}

// Hook into the 'init' action
add_action( 'init', 'faqs_post_type', 0 );
