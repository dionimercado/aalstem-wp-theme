<?php
/* Template Name: Contact */
get_header()
?>

<section class="signup-page">
  <div class="header text-center">
    <?php while( have_posts() ) : the_post() ?>
      <?php the_content() ?>
    <?php endwhile ?>
  </div>
  <div class="signup-form">
    <div class="container">
      <div class="form-content px-0 pt-0 pb-5 pb-md-0" style="max-width: 900px">
        <div class="row">
          <div class="col-md-7">
            <div class="pt-4 pl-md-4 pl-md-4 pr-md-0 pt-md-4 pl-lg-5 pr-lg-4 pt-lg-4 pb-lg-0">
              <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ) ?>
            </div>
          </div>
          <div class="col-md-5">
            <div class="bg-primary h-100 text-white p-4 p-lg-5 contact-info">
              <h4 class="mb-4"><?php _e( 'Contact Information' ) ?></h4>
              <p class="d-none d-md-block">Changing lives, aligning destinies<br> and uplifting communities.</p>
              <p>
                P.O. Box 671088<br>
                Flushing, NY 11367
              </p>
              <p><a href="mailto:connect@aalstem.org"><i class="fas fa-envelope"></i> connect@aalstem.org</a></p>
              <p><a href="tel:+19176868373"><i class="fas fa-phone" style="transform: rotate(115deg);"></i> (917) 686-8373</a></p>
              <hr class="my-4" style="border-color: rgba(255,255,255,.1)" />
              <h4 class="mb-4"><?php _e( 'Get in touch' ) ?></h4>
              <ul class="contact-socials list-inline">
                <li class="list-inline-item"><a href="https://www.facebook.com/aalstem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/aalstem" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/aalstem/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCxuOV4gydwhmSVgN0OInMrQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.linkedin.com/company/american-association-of-latinos-in-stem" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php get_footer() ?>
