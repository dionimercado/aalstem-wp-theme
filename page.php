<?php get_header() ?>
<main class="mb-5 pb-5">
  <div class="breadcrumbs-wrap text-center text-md-left py-3 py-md-5 mb-5">
    <div class="container">
      <h1 class="page-title"><?php the_title() ?></h1>
      <ul class="breadcrumbs list-inline">
        <li class="list-inline-item"><a href="<?php echo home_url() ?>">Home</a></li>
        <li class="list-inline-item"><?php the_title() ?></li>
      </ul>
    </div>
  </div>
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
