<?php

show_admin_bar( false );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( '' ) );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

  // Add support for two custom navigation menus.
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'aalstem' ),
        'footer-links' => __('Footer Links', 'aalstem' )
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_features' );


// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';


function add_theme_scripts() {
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', array(), '5.0.6', 'all' );
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,900', array(), null, 'all' );
  // wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'aalstem', get_template_directory_uri() . '/assets/css/aalstem.css', array(), uniqid(), 'all');

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'popper' ), '4.0.0', true );
  wp_enqueue_script( 'aalstem', get_template_directory_uri() . '/assets/js/aalstem.js', array ( 'jquery' ), 1.1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>
