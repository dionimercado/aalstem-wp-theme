<footer id="footer" class="bg-light">
  <div class="ft-top bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- Begin MailChimp Signup Form -->
          <div class="newsletter-form py-4 p-lg-5 bg-col-1">
            <div class="row">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <h5 class="f-20 mb-3 mb-md-0 text-white text-center text-uppercase">Join our team</h5>
              </div>
              <div class="col-md-8">
                <form action="https://dionimercado.us14.list-manage.com/subscribe/post?u=c84d33d7d0a554f6988195f5b&amp;id=443f1cf726" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="bg-white rounded form-inline validate m-0 p-0" target="_blank" novalidate="">
                  <div class="input-group d-flex flex-row">
                    <input type="text" name="EMAIL" class="form-control border-0 required email w-50" id="mce-EMAIL" placeholder="Email address">
                    <input type="text" name="ZIP" class="form-control border-0 required zip w-25" id="mce-ZIP" placeholder="Zip code">
                    <span class="input-group-btn w-25">
                      <button class="btn px-3 w-100 h-100 border-left text-uppercase" type="submit" name="subscribe" id="mc-embedded-subscribe">Sign Up</button>
                    </span>
                  </div><!-- /input-group -->
                  <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                </form>
              </div>
            </div>
          </div>
          <!--End mc_embed_signup-->
        </div>
        <div class="col-md-6 col-lg-4 d-none d-lg-block">
          <div class="p-0 d-flex align-items-center justify-content-center h-100">
            <a href="/" class="btn-donate p-4	d-flex justify-content-center h-100 w-100 f-20 align-items-center text-white text-uppercase">
              <span><?php _e( 'Donate Today!' ) ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ft-bottom bg-primary pt-5">
    <div class="container mt-md-5">
      <div class="row">
        <div class="col-md-6 col-lg-4 text-center text-md-left">
          <p class="d-none d-md-block">Changing lives, aligning destinies<br /> and uplifting communities.</p>
          <p>
            P.O. Box 671088<br />
            Flushing, NY 11367
          </p>
          <p><a href="mailto:connect@aalstem.org">connect@aalstem.org</a></p>
        </div>
        <div class="col-12 col-lg-3 d-none d-lg-block">
          <h4 class="footer-title mb-4">Quick Links</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-links', 'container' => '', 'menu_id' => '', 'menu_class' => '' ) ); ?>
        </div>
        <div class="col-md-6 col-lg-5 text-center text-md-right">
          <div class="widget mb-4">
            <h4 class="widget-title mb-4 d-none d-md-block">Connect With Us</h4>
            <ul class="social-icons list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/aalstem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/aalstem" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/aalstem/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCxuOV4gydwhmSVgN0OInMrQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/company/american-association-of-latinos-in-stem" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
          <a href="#">Privacy Policy</a>
          <span class="mx-2">&bullet;</span>
          <a href="#">Terms &amp; Conditions</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center mt-3 mt-md-5">
          <p class="text-center pt-3 pt-md-4 border-top">&copy; <?php echo date( 'Y' ) ?> <strong><?php bloginfo( 'name' ) ?></strong> <span class="d-none d-sm-inline-block">All rights reserved.</span>	</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>

</body>
</html>
