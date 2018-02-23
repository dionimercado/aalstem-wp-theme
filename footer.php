<footer id="footer" class="bg-light pt-5">
  <div class="ft-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-8">
          <!-- Begin MailChimp Signup Form -->
          <div class="newsletter-form p-4 p-lg-5 bg-col-1">
            <div class="row">
              <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <h5 class="f-20 mb-3 mb-lg-0 text-white text-center text-uppercase">Join our team</h5>
              </div>
              <div class="col-lg-8">
                <form action="//lipo-natural.us9.list-manage.com/subscribe/post?u=63821adab4d8319263e450f74&amp;id=e59820419d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline m-0 p-0" target="_blank" novalidate="">
                  <div class="input-group m-0">
                    <input type="text" name="EMAIL" class="form-control required email w-75" id="mce-EMAIL" placeholder="Email address">
                    <input type="text" name="ZIP" class="form-control border-left required zip w-25" id="mce-ZIP" placeholder="Zip code">
                    <span class="input-group-btn">
                      <button style="margin-right: -12px; border-top-left-radius: 0; border-bottom-left-radius: 0;" class="btn btn-default px-3 h-100 text-uppercase" type="submit" name="subscribe" id="mc-embedded-subscribe">Sign Up</button>
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
        <div class="col-md-6 col-lg-4">
          <div class="p-0 d-flex align-items-center justify-content-center h-100">
            <a href="/" class="btn-donate p-4	d-flex justify-content-center h-100 w-100 f-20 align-items-center text-white text-uppercase">
              <span><?php _e( 'Donate Today!' ) ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ft-bottom bg-light pt-5">
    <div class="container mt-md-5">
      <div class="row">
        <div class="col-md-4 col-lg-4">
          <p>Changing lives, aligning destinies<br /> and uplifting communities.</p>
          <p>
            P.O. Box 671088<br />
            Flushing, NY 11367
          </p>
          <p><a href="mailto:connect@aalstem.org">connect@aalstem.org</a></p>
        </div>
        <div class="col-12 col-lg-3">
          <h4 class="footer-title mb-5">Quick Links</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-links', 'container' => '', 'menu_id' => '', 'menu_class' => '' ) ); ?>
        </div>
        <div class="col-md-4 col-lg-5">
          <div class="widget">
            <h4 class="widget-title">Connect With Us</h4>
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
        <div class="col-12 text-center mt-5">
          <p class="text-center pt-4 border-top">&copy; <?php echo date( 'Y' ) ?> <strong><?php bloginfo( 'name' ) ?></strong> <span class="d-none d-sm-inline-block">All rights reserved.</span>	</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
