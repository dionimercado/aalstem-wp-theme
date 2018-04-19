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
	add_theme_support( 'post-thumbnails');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

  // Add support for two custom navigation menus.
  register_nav_menus( array(
      'primary'   => __( 'Primary Menu', 'aalstem' ),
      'footer-links' => __('Footer Links', 'aalstem' )
  ) );

	// Register Sidebars
	function aalstem_sidebars() {

		$args = array(
			'id'            => 'sidebbar',
			'class'         => 'sidebar',
			'name'          => __( 'Sidebar', 'aalstem' ),
		);
		register_sidebar( $args );

	}
	add_action( 'widgets_init', 'aalstem_sidebars' );
}
add_action( 'after_setup_theme', 'custom_theme_features' );


// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Theme my login
include_once get_stylesheet_directory() . '/inc/theme-my-login-custom.php';

// Give Donations
// include_once get_stylesheet_directory() . '/inc/give-donations.php';

// Post Types and Taxonomies
include_once get_stylesheet_directory() . '/inc/posttypes.php';
include_once get_stylesheet_directory() . '/inc/taxonomies.php';

// Admin Features
include_once get_stylesheet_directory() . '/inc/admin/reports.php';

function add_theme_scripts() {
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.9/css/all.css', array(), '5.0.6', 'all' );
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,900|Open+Sans:300,400,700', array(), null, 'all' );
  wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(), '3.5.2', 'all' );
	wp_enqueue_style( 'social-stream', get_stylesheet_directory_uri() . '/assets/css/dcsns_wall.css', array(), uniqid() );
	wp_enqueue_style( 'fancybox', get_stylesheet_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '3.2.10' );
  // wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.1', 'all' );
  wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.2.1', 'all' );

  wp_enqueue_style( 'aalstem', get_template_directory_uri() . '/assets/css/aalstem.css', array(), uniqid(), 'all');

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'popper' ), '4.0.0', true );
  wp_enqueue_script( 'jquery.easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array( 'jquery' ), '1.4.1', true );

	wp_enqueue_script( 'social-stream-wall', get_stylesheet_directory_uri() . '/assets/js/jquery.social.stream.wall.1.8.js', array('jquery'), '1.8', true );
  wp_enqueue_script( 'social-stream', get_stylesheet_directory_uri() . '/assets/js/jquery.social.stream.1.6.2.min.js', array('jquery'), '1.6.2', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array ( 'jquery' ), '3.2.10', true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), '2.2.1', true);
	wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array ( 'jquery' ), '1.1.2', true);
  wp_enqueue_script( 'jquery.countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array ( 'jquery' ), '2.2.0', true);
  wp_enqueue_script( 'aalstem', get_template_directory_uri() . '/assets/js/aalstem.js', array ( 'jquery' ), uniqid(), true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




function convert_datetime($str) {
	list($date, $time) = explode(' ', $str);
	list($year, $month, $day) = explode('-', $date);
	list($hour, $minute, $second) = explode(':', $time);

	$timestamp = mktime($hour, $minute, $second, $month, $day, $year);

	return $timestamp;
}

// to get 'time ago' text
function time_elapsed_string($datetime, $full = false) {

    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}



/**
 * Use * for origin
 */
add_action( 'rest_api_init', function() {

	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
	add_filter( 'rest_pre_serve_request', function( $value ) {
		header( 'Access-Control-Allow-Origin: *' );
		// header( 'Access-Control-Allow-Origin: http://localhost:8080' );
		header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE' );
		header( 'Access-Control-Allow-Credentials: true' );

		return $value;

	});
}, 15 );



/**
 * Only Show Current User's Attachments
 */
add_filter( 'ajax_query_attachments_args', 'show_current_user_attachments', 10, 1 );
function show_current_user_attachments( $query = array() ) {
    $user_id = get_current_user_id();
    if( $user_id ) {
        $query['author'] = $user_id;
    }
    return $query;
}

// Admin CSS
function aasltem_admin_css() {

    echo "
    <style type='text/css'>
    	.give-invalid-license { display: none; };
    }
    </style>
    ";
}
add_action( 'admin_head', 'aasltem_admin_css' );


// Gravity Forms Submit Button Add CSS Class
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button($button, $form) {
    return '<input type="submit" class="btn btn-default" id="gform_submit_button_' . $form['id'] . '" value="' . $form['button']['text'] . '">';
}
