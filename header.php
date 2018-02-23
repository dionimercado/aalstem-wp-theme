<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <nav id="header" class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand ml-md-5" href="<?php echo home_url() ?>">
      <img height="80" class="d-none d-md-block" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ) ?>" />
      <img height="60" class="d-block d-md-none" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-mobile.svg" alt="<?php bloginfo( 'name' ) ?>" />
    </a>

    <a class="btn btn-donate py-2 px-4 ml-auto" href="#"><?php _e('Donate') ?></a>

    <button class="ml-4 mr-md-5 p-0 border-0 navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#aalstemNavigation" aria-controls="aalstemNavigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="aalstemNavigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav mr-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
    </div>
  </nav>
