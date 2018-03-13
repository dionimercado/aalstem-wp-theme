<aside id="sidebar">
  <div class="widget-search bg-gray mb-4">
    <?php get_search_form() ?>
  </div>
  <div class="mb-4">
    <?php get_template_part( 'template-parts/featured', 'video' ); ?>
  </div>
  <div class="mb-4">
    <?php get_template_part( 'template-parts/upcoming', 'events' ); ?>
  </div>
  <div class="mb-4">
    <div class="widget-instagram text-white h-100">
      <header class="mb-3">
        <i class="fab fa-instagram fa-2x"></i>
      </header>
      <article class="">
        <?php echo do_shortcode('[rev_slider alias="ig-feed"]') ?>
      </article>
      <div class="info-link">
        <a class="text-white" href="https://www.instagram.com/aalstem/" target="_blank"><?php _e( 'Follow Us on Instagram' ) ?></a>
      </div>
    </div>
  </div>
</aside>
