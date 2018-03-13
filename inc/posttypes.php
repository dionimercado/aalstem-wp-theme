<?php

// Register Custom Post Type
function Testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonial', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array(),
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
		'name'                => __( 'FAQs', 'Post Type General Name', 'fuel_meals' ),
		'singular_name'       => __( 'FAQ', 'Post Type Singular Name', 'fuel_meals' ),
		'menu_name'           => __( 'FAQs', 'fuel_meals' ),
		'parent_item_colon'   => __( 'Parent Faq:', 'fuel_meals' ),
		'all_items'           => __( 'All Faqs', 'fuel_meals' ),
		'view_item'           => __( 'View Faq', 'fuel_meals' ),
		'add_new_item'        => __( 'Add New Faq', 'fuel_meals' ),
		'add_new'             => __( 'Add New', 'fuel_meals' ),
		'edit_item'           => __( 'Edit Faq', 'fuel_meals' ),
		'update_item'         => __( 'Update Faq', 'fuel_meals' ),
		'search_items'        => __( 'Search Faq', 'fuel_meals' ),
		'not_found'           => __( 'Not found', 'fuel_meals' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fuel_meals' ),
	);
	$rewrite = array(
		'slug'                => 'faqs',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'post_type', 'fuel_meals' ),
		'description'         => __( 'Fuel Meals FAQs', 'fuel_meals' ),
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
