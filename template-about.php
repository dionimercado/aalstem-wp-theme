<?php
/* Template Name: About Us */
get_header();
?>
<main class="bg-light pb-5">
  <div class="breadcrumbs-wrap text-center text-md-left py-3 py-md-5">
    <div class="container">
      <h1 class="page-title"><?php the_title() ?></h1>
      <ul class="breadcrumbs list-inline">
        <li class="list-inline-item"><a href="<?php echo home_url() ?>">Home</a></li>
        <li class="list-inline-item"><?php the_title() ?></li>
      </ul>
    </div>
  </div>

  <section class="bg-white py-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php while( have_posts() ) : the_post() ?>
            <?php the_content() ?>
          <?php endwhile ?>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light py-5 mt-5">
    <div class="block-header text-center">
      <h1><?php _e( 'Our Board' ) ?></h1>
    </div>
    <div class="container">
      <div class="row">
        <?php
          $team = new WP_Query( array( 'post_type' => 'team', 'showposts' => -1 ) );
          while( $team->have_posts() ) : $team->the_post();
            get_template_part( 'template-parts/team', 'member' );
          endwhile;
        ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>
