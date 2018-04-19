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
    <!-- <button class="d-block d-md-none mr-auto mr-md-5 p-0 border-0 navbar-toggler collapsed" type="button" data-toggle="offcanvas" data-target="#aalstemNavigation" aria-controls="aalstemNavigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <a class="navbar-brand" href="<?php echo home_url() ?>">
      <img height="80" class="d-none d-md-block" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ) ?>" />
      <img height="50" class="d-block d-md-none" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ) ?>" />
    </a>
    <a href="<?php echo get_the_permalink( '354' ) ?>" class="ml-auto btn-mobile-donate d-block d-md-none"><i class="fas fa-donate"></i></a>
    <div class="d-none d-lg-inline-block ml-auto position-relative">
      <div class="links-section d-none d-md-inline-block">
        <a href="<?php echo get_the_permalink( '354' ) ?>" class="mr-4 btn-donate d-none d-md-inline-block give-btn position-relative" style="top: -6px;  margin-right: 10px;"><i class="fas fa-donate"></i> <?php _e( 'Donate' ) ?></a>
        <?php if( is_user_logged_in() ) : ?>
          <a class="position-relative d-none d-md-inline-block dropdown-toggle no-chev" style="top: 5px; margin-right: 10px;" href="<?php echo get_the_permalink( '159' ) ?>" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle" style="font-size: 2.8em;"></i><?php //_e( 'Dashboard' ) ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo get_the_permalink( '207' ) ?>"><?php _e( 'Dashboard' ) ?></a>
            <a class="dropdown-item" href="<?php echo get_the_permalink( '159' ) ?>"><?php _e( 'My Profile' ) ?></a>
            <a class="dropdown-item" href="<?php echo wp_logout_url() ?>"><?php _e( 'Log Out' ) ?></a>
          </div>
        <?php else: ?>
          <a class="position-relative d-none d-md-inline-block" style="top: 5px; margin-right: 10px;" href="<?php echo get_the_permalink( '151' ) ?>"><i class="fas fa-user-circle" style="font-size: 2.8em;"></i></a>
        <?php endif; ?>
      </div>
    </div>

    <button class="d-block d-md-block ml-4 mr-md-5 p-0 border-0 navbar-toggler collapsed" type="button" data-toggle="offcanvas" data-target="#aalstemNavigation" aria-controls="aalstemNavigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse collapse" id="aalstemNavigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav mr-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
      <div class="d-block d-lg-none text-center mt-5">
        <a href="#" class="btn btn-default"><?php _e( 'Sign In' ) ?></a>
        <a href="#" class="btn btn-primary mx-3"><?php _e( 'Sign Up' ) ?></a>
      </div>
    </div>
  </nav>
