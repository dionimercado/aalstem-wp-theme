<?php get_header() ?>

<section id="hero">
  <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
  <ul class="social-icons style-2 v-type d-none">
    <li><a href="https://www.facebook.com/aalstem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/aalstem" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/aalstem/" target="_blank"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCxuOV4gydwhmSVgN0OInMrQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
    <li><a href="https://www.linkedin.com/company/american-association-of-latinos-in-stem" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
  </ul>
</section>

<section id="about" class="home-section text-center text-lg-left">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h1>Welcome to <strong class="text-secondary">AALSTEM</strong></h1>
        <p>American Association of Latinos in STEM (AALSTEM) consists of a group of established technical professionals that is focused on encouraging and supporting the Latino youth in pursuing careers in Science, Technology, Engineering, and Math.</p>
        <p>We are also committed to further developing Latino professionals in an effort to improve their careers and help realize their full potential. We strive to achieve our mission through leadership, mentorship, education, and by providing professional development activities and networking events.</p>
      </div>
      <div class="d-none d-lg-block col-lg-6">
        <img class="img-fluid p-5" src="/wp-content/uploads/2018/04/svg.png" alt="">
      </div>
    </div>
  </div>
</section>

<section id="aalstem-actions" class="">
  <div class="container extra-size">
    <div class="row">
      <div class="col-md-3">
        <div class="action-item volunteer">
          <a href="<?php echo get_the_permalink( '290' ) ?>">
            <i class="fas fa-bullhorn"></i>
            <h5><?php _e( 'Get Involved' ) ?></h5>
            <p><?php _e( 'See our programs' ) ?></p>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="action-item donations">
          <h5><?php _e( 'Make a donation' ) ?></h5>
          <?php echo do_shortcode('[give_form id="160" display_style="modal" show_title="false"]') ?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="action-item sponsorship">
          <a href="<?php echo get_post_type_archive_link('company') ?>">
            <i class="far fa-handshake"></i>
            <h5><?php _e( 'Sponsorship' ) ?></h5>
            <p><?php _e( 'Be part of AALSTEM' ) ?></p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="recent-updates" class="widget-holder home-section bg-light">
  <div class="block-header text-center">
    <h1><?php _e( 'News &amp; Updates' ) ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 p-0 m-0">
        <?php
          // echo do_shortcode('[rev_slider alias="news-feed"]');
          $posts = new WP_Query( array('post_type' => 'post', 'showposts' => 1, 'offset' => 1) );
          while( $posts->have_posts() ) : $posts->the_post();
            $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        ?>
        <article class="entry">
          <div class="entry-attachment">
            <figure class="thumbnail-attachment">
              <img class="img-fluid" src="<?php echo $post_thumb[0]; ?>&amp;resize=750,400" alt="<?php the_title(); ?>" />
            </figure>
          </div>
          <div class="entry-body">
            <h6><?php _e( 'Latest News &amp; Media' ) ?></h6>
            <h4 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            <div class="entry-meta">
              <time class="post-date"><?php the_time('F j, Y') ?></time>
            </div>
            <div class="info-link">
              <a href="<?php echo get_category_link( '1' ) ?>" class="text-white"><?php _e( 'More News' ) ?></a>
            </div>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <?php get_template_part( 'template-parts/upcoming', 'events' ); ?>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div class="widget-instagram text-white h-100">
          <header class="mb-3">
            <i class="fab fa-instagram fa-2x"></i>
          </header>
          <article class="">
            <?php echo do_shortcode('[rev_slider alias="ig-feed"]') ?>
          </article>
          <div class="info-link">
            <a class="text-white" href="https://www.instagram.com/aalstem/" target="_blank"><?php _e( 'Follow Us on Instagram' ) ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div style="background: #14468c;" class="widget-twitter text-white h-100">
          <header class="mb-3">
            <i class="fab fa-twitter fa-2x"></i>
          </header>
          <article class="">
            <?php get_template_part( 'template-parts/latest', 'tweet' ); ?>
          </article>
          <div class="info-link mt-3">
            <a class="text-white" href="https://twitter.com/aalstem" target="_blank"><?php _e( 'Follow Us on Twitter' ) ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <?php get_template_part( 'template-parts/featured', 'video' ); ?>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="home-section">
  <div class="block-header text-center">
    <h1><?php _e( 'Testimonials' ) ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="owl-testimonials owl-carousel owl-theme" data-max-items="1" data-autoplay="true">
          <?php
            $events = new WP_Query( array( 'post_type' => 'testimonial', 'showposts' => 3, 'orderby' => 'rand' ) );
            while( $events->have_posts() ) : $events->the_post();
          ?>
          <div>
            <div class="testimonial testimonial-single">
              <div class="author-box">
                <a href="#" class="avatar">
                  <?php
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                  }
                  else {
                      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/no-avatar.gif" />';
                  }
                  ?>
                </a>
              </div>
              <div class="testimonial-holder text-center text-lg-left">
                <blockquote>
                  <?php the_content() ?>
                </blockquote>
                <div class="author-info">
                  <h6 class="author-name"><?php the_title() ?></h6>
                  <!-- <span class="author-position">Congresswoman</span> -->
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata() ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="partners-sponsors" class="bg-light home-section text-center">
  <div class="block-header mb-5">
    <h1 class="pl-3"><?php _e( 'Partners <span>&amp;</span> Sponsors' ) ?></h1>
  </div>
  <div class="logos-scroll owl-carousel owl-theme">
    <?php
      $companies = new WP_Query(
        array(
          'post_type' => 'company',
          'meta_query' => array(
            array(
              'key' => 'is_featured',
              'value' => 1,
              // 'compare' => '!=='
            )
          )
        )
      );

      while( $companies->have_posts() ) : $companies->the_post();
      $logo = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );

    ?>
    <img height="70" class="img-flusid" src="<?php echo $logo[0] ?>" alt="">
    <?php endwhile; wp_reset_postdata() ?>
  </div>
  <div class="text-center my-5  ">
    <a href="<?php echo get_post_type_archive_link('company') ?>" class="btn btn-primary"><?php _e( 'See more companies' ) ?></a>
  </div>
</section>

<?php get_footer() ?>
