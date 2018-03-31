<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

<?php
  $featured = new WP_Query( array(
		'post_type' => 'tribe_events',
		'showposts' => 1,
		'meta_query' => array(
			array(
				'key'	=> '_tribe_featured',
				'value' => 1
			)
		)
	));
  while( $featured->have_posts() ) : $featured->the_post();
	$flyer = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
?>
<section class="featured-event mb-5" data-bg="<?php echo $flyer[0] ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-6">
				<div class="p-4 pl-md-0 py-5 py-md-5 pr-md-5">
					<span class="sub mb-3"><?php _e( 'Upcoming Event' ) ?></span>
					<h2><?php the_title() ?></h2>
					<p>
						<i class="fas fa-map-marker-alt"></i>
						<?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueAddress', true ) ?>,
						<?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueCity', true ) ?>
					</p>
					<!-- Countdown -->
          <div class="countdown my-5">
            <div data-countdown="<?php echo get_post_meta(get_the_ID(), '_EventStartDate', true) ?>"></div>
          </div>
					<a href="<?php the_permalink() ?>" class="btn btn-primary"><?php _e( 'View event details' ) ?></a>
				</div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; wp_reset_postdata(); ?>

<div class="block-header text-center pt-5 pb-4">
	<h1><?php _e( 'Past Events' ) ?></h1>
</div>

<div class="container mb-5">
	<div class="row">
		<?php
		  $featured = new WP_Query( array(
				'post_type' => 'tribe_events',
				'eventDisplay'=>'custom',
				'meta_key'=>'_EventStartDate',
				'orderby'=>'_EventStartDate',
				'order'=>'DESC',
				'meta_query' => array(
					array(
						'key'	=> '_EventStartDate',
						'value' => date("Y-m-d H:i:s"),
						'compare' => '<='
					)
				)
			));
		  while( $featured->have_posts() ) : $featured->the_post();
			$past_flyer = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
		?>
		<div class="col-md-6">
			<div class="aalstem-event-item rounded mb-4">
				<a class="past-flyer" href="<?php the_permalink() ?>" style="background-image: url(<?php echo $past_flyer[0] ?>);"></a>
				<div class="aalstem-event-content p-4">
					<header class="d-flex justify-content-between">
						<h2 class="tribe-events-list-event-title">
							<a class="tribe-event-url" href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
						</h2>
						<div class="tribe-events-event-cost text-right">
							<strong class="text-danger">Free</strong>
						</div>
					</header>

					<div class="tribe-events-event-meta text-muted">
						<div class="location">
							<div class="tribe-event-schedule-details">
								<i class="fa fa-calendar"></i>
								<span class="tribe-event-date-start"><?php echo date('F j, Y @ h:i a', strtotime( get_post_meta(get_the_ID(), '_EventStartDate', true) ) ); ?></span> - <span class="tribe-event-date-end"><?php echo date('h:i a', strtotime( get_post_meta(get_the_ID(), '_EventEndDate', true) ) ); ?></span>
							</div>
							<div class="tribe-events-venue-details">
								<i class="fa fa-map-marker"></i>
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php echo get_the_title( get_post_meta( get_the_ID(), '_EventVenueID', true) ) ?></a>,
								<span class="tribe-address">
									<span class="tribe-street-address"><?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueAddress', true ) ?></span>
									<span class="tribe-locality"><?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueCity', true ) ?></a></span>
									<span class="tribe-delimiter">,</span>
									<span class="tribe-postal-code"><?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueZip', true ) ?></span>
									<!-- <span class="tribe-country-name"><?php echo get_post_meta( get_post_meta( get_the_ID(), '_EventVenueID', true), '_VenueCountry', true ) ?></span> -->
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>

<?php
do_action( 'tribe_events_after_template' );
