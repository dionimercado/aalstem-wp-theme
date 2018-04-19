<?php get_header() ?>
<main class="mb-5 pb-5">
  <?php get_template_part('template-parts/breadcrumbs') ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php while( have_posts() ) : the_post() ?>
          <?php the_content() ?>
        <?php endwhile ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
