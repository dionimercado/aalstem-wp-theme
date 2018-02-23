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
        <article class="entry">
          <div class="entry-attachment">
            <figure class="thumbnail-attachment"><img src="https://mywebsitetester.com/wp-content/uploads/2018/02/news-1.jpg" alt="" width="570" height="371"></figure>
          </div>
          <div class="entry-body">
            <h6>Latest News</h6>
            <h4 class="entry-title"><a href="#">AALSTEM is hosting their first Technology Fair – Tech Fair in the Heights!</a></h4>
            <div class="entry-meta">
              <time class="entry-date" datetime="2018-03-25">March 25, 2018</time>
            </div>
            <a href="#" class="info-btn">More News</a>
          </div>
        </article>
      </div>
      <div class="col-lg-3 p-0 m-0">
        <div style="background: #14468c;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-twitter fa-2x"></i>
          </header>
        </div>
      </div>
      <div class="col-lg-3 p-0 m-0">
        <div style="background: #0d2f5d;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-facebook fa-2x"></i>
          </header>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div style="background: #0e1e40;" class="p-4 text-white h-100">
          <header class="mb-3">
            <i class="fab fa-instagram fa-2x"></i>
          </header>
        </div>
      </div>
      <div class="col-lg-4 p-0 m-0">
        <div id="upcoming-events" style="background: #fff;" class="p-4 text-black h-100">
          <header class="mb-4">
            <h4>Upcoming Events</h4>
          </header>
          <div class="row mb-4">
            <div class="col-3">
              <div class="event-date">
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
            <iframe src="https://www.youtube.com/embed/KP36cvEQ6uY?rel=0&showinfo=0&autohide=2&controls" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-5 text-center">
  <div class="block-header">
    <h2><?php _e( 'Testimonials' ) ?></h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">

      </div>
    </div>
  </div>
</section>
<section class="bg-light p-5 text-center">
  <div class="block-header mb-5">
    <h2><?php _e( 'Partners &amp; Sponsors' ) ?></h2>
  </div>
  <div class="">
    <a href="#">
      <img height="70" class="img-flusid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/nylife.png" alt="">
      <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/Spectrum_Logo_DBlue.png" alt="">
      <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/Columbia.png" alt="">
      <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/ccny.png" alt="">
      <img height="70" class="img-flsuid" src="https://mywebsitetester.com/wp-content/uploads/2018/02/highstep.png" alt="">
    </a>
  </div>
</section>
<?php get_footer() ?>
