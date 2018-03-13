<?php
/* Template Name: Sign In/Sign Up */
get_header();
?>
<?php while( have_posts() ) : the_post(); ?>
<section class="signup-page">
  <div class="header text-center">
    <?php echo get_post_meta( get_the_ID(), 'header_content', true ) ?>
  </div>
  <div class="signup-form">
    <div class="form-content">
      <?php the_content() ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer() ?>
