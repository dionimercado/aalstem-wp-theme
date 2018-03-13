<div id="upcoming-events" class="widget-upcoming text-black h-100">
  <header class="mb-4">
    <h4><?php _e('Upcoming Events') ?></h4>
  </header>
  <?php
    $events = new WP_Query( array( 'post_type' => 'tribe_events', 'showposts' => 2 ) );
    while( $events->have_posts() ) : $events->the_post();
  ?>
  <div class="row mb-3">
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
          <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueCity', true ) ?>
          <?php //echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueState', true ) ?>
          <?php //echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueZip', true ) ?>
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
  <div class="row mb-3">
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
  <div class="info-link mt-5">
    <a href="<?php echo get_post_type_archive_link('tribe_events') ?>"><?php _e( 'More Events' ) ?></a>
  </div>
</div>
