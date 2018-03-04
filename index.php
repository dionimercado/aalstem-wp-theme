<?php get_header() ?>
<section id="home-slider">
  <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
  <ul class="social-icons style-2 v-type">
    <li><a href="https://www.facebook.com/aalstem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/aalstem" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/aalstem/" target="_blank"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCxuOV4gydwhmSVgN0OInMrQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
    <li><a href="https://www.linkedin.com/company/american-association-of-latinos-in-stem" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
  </ul>
</section>
<section class="widget-holder py-5 bg-light">
  <div class="block-header text-center">
    <h1><?php _e( 'News &amp; Updates' ) ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 p-0 m-0">
        <?php
          $posts = new WP_Query( array('post_type' => 'post', 'showposts' => 1) );
          while( $posts->have_posts() ) : $posts->the_post();
        ?>
        <article class="entry">
          <div class="entry-attachment">
            <figure class="thumbnail-attachment"><img src="https://mywebsitetester.com/wp-content/uploads/2018/02/news-1.jpg" alt="" width="570" height="371"></figure>
          </div>
          <div class="entry-body">
            <h6>Latest News</h6>
            <h4 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            <div class="entry-meta">
              <time class="entry-date" datetime="2018-03-25">March 25, 2018</time>
            </div>
            <a href="#" class="info-btn">More News</a>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="col-lg-3 p-0 m-0">
        <div style="background: #14468c;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-twitter fa-2x"></i>
          </header>
          <div class="more-link mt-3">
            <a class="text-white" href="#"><?php _e( 'Follow Us on Twitter' ) ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 p-0 m-0">
        <div style="background: #0d2f5d;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-facebook-f fa-2x"></i>
          </header>
          <div class="more-link mt-3">
            <a class="text-white" href="#"><?php _e( 'Follow Us on Facebook' ) ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div style="background: #0e1e40;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-instagram fa-2x"></i>
          </header>
          <div class="more-link mt-3">
            <a class="text-white" href="#"><?php _e( 'Follow Us on Instagram' ) ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div id="upcoming-events" style="background: #fff;" class="p-4 text-black h-100">
          <header class="mb-4">
            <h4>Upcoming Events</h4>
          </header>
          <?php
            $events = new WP_Query( array( 'post_type' => 'tribe_events', 'showposts' => 2 ) );
            while( $events->have_posts() ) : $events->the_post();
          ?>
          <div class="row mb-4">
            <div class="col-3">
              <div class="event-date">
                <div class="event-month"><?php echo date('M', convert_datetime( get_post_meta(get_the_ID(), '_EventStartDate', true) ) ); ?></div>
                <div class="event-day"><?php echo date('d', convert_datetime( get_post_meta(get_the_ID(), '_EventStartDate', true) ) ); ?></div>
              </div>
            </div>
            <div class="col-9 p-0 m-0">
              <a class="event-info" href="<?php the_permalink() ?>">
                <h6><?php the_title() ?></h6>
                <div class="event-info-item">
                  <i class="fas fa-map-marker-alt"></i>
                  <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueAddress', true ) ?>,
                  <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueCity', true ) ?>,
                  <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueState', true ) ?>
                  <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueZip', true ) ?>
                </div>
                <div class="event-info-item">
                  <i class="far fa-clock"></i>
                  <?php echo date( "h:m a", convert_datetime( get_post_meta( get_the_ID(), '_EventStartDate', true ) ) ) ?>
                  -
                  <?php echo date( "h:m a", convert_datetime( get_post_meta( get_the_ID(), '_EventEndDate', true ) ) ) ?>
                </div>
              </a>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata() ?>
          <div class="row">
            <div class="col-3">
              <div class="event-date w-100">
                <div class="event-month">Aug</div>
                <div class="event-day">19</div>
              </div>
            </div>
            <div class="col-9 p-0 m-0">
              <h6><a href="#">TECH FAIR IN THE HEIGHTS</a></h6>
              <div class="event-info-item"><i class="fas fa-map-marker-alt"></i> 650 Academy St, New York</div>
              <div class="event-info-item"><i class="far fa-clock"></i> 12:00 pm – 5:00 pm</div>
            </div>
          </div>
          <div class="more-link mt-5">
            <a href="#"><?php _e( 'More Events' ) ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div style="background: #ce2028;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-youtube fa-2x"></i>
          </header>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/KP36cvEQ6uY?rel=0&showinfo=0&autohide=2&controls" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="more-link mt-3">
            <a class="text-white" href="#"><?php _e( 'View All Videos' ) ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="px-1 py-5">
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
              <div class="testimonial-holder">
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
    <div class="row">
      <div class="col">
        <div class="text-center">
          <a href="#" class="btn btn-default">Send your feedback</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="partners-sponsors" class="bg-light p-5 text-center">
  <div class="block-header mb-5">
    <h1><?php _e( 'Partners &amp; Sponsors' ) ?></h1>
  </div>
  <div class="sponsors-logos">
    <img height="70" class="img-flusid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/nylife.png" alt="">
    <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/Spectrum_Logo_DBlue.png" alt="">
    <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/Columbia.png" alt="">
    <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/ccny.png" alt="">
    <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/highstep.png" alt="">
  </div>
</section>
<?php get_footer() ?>
