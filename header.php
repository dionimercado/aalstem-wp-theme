<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <nav id="header" class="navbar fixed-top navbar-light bg-white">
    <button class="d-block d-md-none mr-4 mr-md-5 p-0 border-0 navbar-toggler collapsed" type="button" data-toggle="offcanvas" data-target="#aalstemNavigation" aria-controls="aalstemNavigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-md-5" href="<?php echo home_url() ?>">
      <img height="80" class="d-none d-md-block" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ) ?>" />
      <img height="60" class="d-block d-md-none" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-mobile.svg" alt="<?php bloginfo( 'name' ) ?>" />
    </a>
    <div class="ml-auto position-relative">
      <div class="links-section">
        <span class="d-inline-block">
          <?php echo do_shortcode('[give_form id="160" display_style="button" show_title="false"]') ?>
        </span>
        <?php if( is_user_logged_in() ) : ?>
          <a class="position-relative d-inline-block dropdown-toggle no-chev" style="top: 5px; margin-right: 10px;" href="<?php echo get_the_permalink( '159' ) ?>" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle" style="font-size: 2.8em;"></i><?php //_e( 'Dashboard' ) ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo get_the_permalink( '207' ) ?>"><?php _e( 'Dashboard' ) ?></a>
            <a class="dropdown-item" href="<?php echo get_the_permalink( '159' ) ?>"><?php _e( 'My Profile' ) ?></a>
            <a class="dropdown-item" href="<?php echo wp_logout_url() ?>"><?php _e( 'Log Out' ) ?></a>
          </div>
        <?php else: ?>
          <a class="position-relative d-inline-block" style="top: 5px; margin-right: 10px;" href="<?php echo get_the_permalink( '151' ) ?>"><i class="fas fa-user-circle" style="font-size: 2.8em;"></i><?php //_e( 'Sign In' ) ?></a>
        <?php endif; ?>
        <!-- <a class="btn btn-donate py-1 py-md-2 px-3 px-md-4 ml-4" href="<?php echo get_the_permalink( '160' ) ?>"><?php _e('Donate') ?></a> -->
      </div>
    </div>

    <button class="d-none d-md-block ml-4 mr-md-5 p-0 border-0 navbar-toggler collapsed" type="button" data-toggle="offcanvas" data-target="#aalstemNavigation" aria-controls="aalstemNavigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse collapse" id="aalstemNavigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav mr-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
    </div>
  </nav>
