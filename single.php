<?php get_header() ?>
<main class="mb-5">
  <div class="breadcrumbs-wrap py-5 mb-5">
    <div class="container">
      <h1 class="page-title"><?php the_title() ?></h1>
      <ul class="breadcrumbs list-inline">
        <li class="list-inline-item"><a href="/">Home</a></li>
        <li class="list-inline-item"><a href="/category/news/">News &amp; Media</a></li>
        <li class="list-inline-item"><?php the_title() ?></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-justify">
        <?php while( have_posts() ) : the_post() ?>
          <article class="single-post">
            <div>
              <?php the_content() ?>
            </div>
          </article>
        <?php endwhile ?>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar() ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
