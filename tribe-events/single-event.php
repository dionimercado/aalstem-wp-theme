<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();
$event_flyer = wp_get_attachment_image_src( get_post_thumbnail_id($event_id), 'full' );


?>

<section class="aalstem-single-event">
  <div class="aalstem-event-map mb-5">
    <?php echo tribe_get_embedded_map( $event_id ) ?>
  </div>
  <div class="container">

    <?php while ( have_posts() ) :  the_post(); ?>
    <div class="row">
      <div class="col-md-4">
        <!-- Event featured image, but exclude link -->
        <a href="<?php echo $event_flyer[0] ?>" data-fancybox="images"><?php echo tribe_event_featured_image( $event_id, 'full', false ); ?></a>

        <!-- Countdown -->
        <div class="countdown p-3 mb-4 bg-secondary">
          <div data-countdown="<?php echo get_post_meta( $event_id, '_EventStartDate', true ) ?>"></div>
        </div>
        <div class="mb-4">
          <a href="#tickets" class="btn btn-primary btn-block smooth-scrolling"><?php _e( 'Get Tickets' ) ?></a>
        </div>
      </div>
      <div class="col-md-8">
        <div class="p-4 bg-secondary text-white">
          <?php the_title( '<h1 class="tribe-events-single-event-title mb-2">', '</h1>' ); ?>
          <p class="m-0"><i class="far fa-calendar"></i> <?php echo date( "l, F j, Y", convert_datetime( get_post_meta( $event_id, '_EventStartDate', true ) ) ) ?></p>
  				<p class="m-0"><i class="far fa-clock"></i> Doors Open at <em><?php echo date( "h:i A", convert_datetime( get_post_meta( $event_id, '_EventStartDate', true ) ) ) ?></em></p>
  				<p class="m-0"><i class="fa fa-map-marker"></i> <?php echo get_the_title( get_post_meta( $event_id, '_EventVenueID', true ) ) ?></p>
          <p class="m-0"><i class="fa fa-location-arrow"></i> <a class="text-white" href="<?php echo tribe_get_map_link( $event_id ) ?>" target="_blank"><?php echo tribe_get_full_address() ?></a></p>
        </div>
  			<?php if( get_the_content() ) : ?>
        <!-- Event content -->
  			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
  			<div class="tribe-events-single-event-description tribe-events-content bg-primary p-4 text-white">
  				<?php the_content(); ?>
  			</div>
  			<!-- .tribe-events-single-event-description -->
  			<?php //do_action( 'tribe_events_single_event_after_the_content' ) ?>
  			<?php endif; ?>

        <!-- Event meta -->
        <div id="tickets">
          <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
          <?php // tribe_get_template_part( 'modules/meta' ); ?>
          <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>
