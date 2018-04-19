<div id="upcoming-events" class="widget-upcoming text-black h-100">
  <header class="mb-4">
    <h4><?php _e('Our Events') ?></h4>
  </header>
  <?php
    $events = new WP_Query( array(
      'post_type' => 'tribe_events',
      'showposts' => 3,
      'eventDisplay'=>'custom',
      'meta_key'=>'_EventStartDate',
      'orderby'=>'_EventStartDate',
      'order'=>'DESC',
      // 'meta_query' => array(
      //   array(
      //     'key' => '_EventStartDate',
      //     'value' => '2016-01-01 00:00:00',
      //     'compare' => '>='
      //   )
      // )
    ));
    $count = 0;
    while( $events->have_posts() ) : $events->the_post();
      $count++;
  ?>
  <a class="d-block mb-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="<?php echo $count/5 ?>s" href="<?php the_permalink() ?>">
    <div class="row">
      <div class="col-3">
        <div class="event-date">
          <div class="event-month"><?php echo date('M', convert_datetime( get_post_meta(get_the_ID(), '_EventStartDate', true) ) ); ?></div>
          <div class="event-day"><?php echo date('d', convert_datetime( get_post_meta(get_the_ID(), '_EventStartDate', true) ) ); ?></div>
        </div>
      </div>
      <div class="col-9 p-0 m-0">
        <div class="event-info">
          <h6 class="truncate-text"><?php the_title() ?></h6>
          <div class="event-info-item">
            <i class="fas fa-map-marker-alt"></i>
            <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueAddress', true ) ?>,
            <?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueCity', true ) ?>
            <?php //echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueState', true ) ?>
            <?php //echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueZip', true ) ?>
          </div>
          <div class="event-info-item">
            <i class="far fa-clock"></i>
            <?php echo date('h:i a', strtotime( get_post_meta( get_the_ID(), '_EventStartDate', true ) )) ?>
            <?php echo get_post_meta( get_the_ID(), 'eventDisplay ', true ) ?>
            <span>-</span>
            <?php echo date( "h:i a", strtotime( get_post_meta( get_the_ID(), '_EventEndDate', true ) ) ) ?>
          </div>
        </div>
      </div>
    </div>
  </a>
  <?php endwhile; wp_reset_postdata() ?>
  <div class="info-link mt-5">
    <a href="<?php echo get_post_type_archive_link('tribe_events') ?>"><?php _e( 'More Events' ) ?></a>
  </div>
</div>
