<div class="col-6 col-md-4 col-lg-3 mb-4">
  <div class="card team-member h-100">
    <a href="#">
      <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'thumbnail', array( 'class' => 'card-img-top img-fluid' ) );
      }
      else {
          echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/no-avatar.gif" />';
      }
      ?>
    </a>
    <a class="linkedin" href="<?php echo get_post_meta( get_the_ID(), 'linkedin_profile', true ) ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <div class="card-body text-center">
      <h5 class="card-title"><?php the_title() ?></h5>
      <p class="card-text"><?php echo get_post_meta( get_the_ID(), 'role', true ) ?></p>
    </div>
  </div>
</div>
