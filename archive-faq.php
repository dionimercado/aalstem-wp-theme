<?php get_header() ?>
<main class="mb-5 pb-5">
  <div class="breadcrumbs-wrap py-5 mb-5">
    <div class="container">
      <h1 class="page-title"><?php _e( 'Frequently Asked Questions' ) ?></h1>
      <ul class="breadcrumbs list-inline">
        <li class="list-inline-item"><a href="<?php echo home_url() ?>">Home</a></li>
        <li class="list-inline-item"><?php _e( 'Frequently Asked Questions' ) ?></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div id="accordion">
          <?php while( have_posts() ) : the_post() ?>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo get_the_ID() ?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID() ?>">
                  <?php the_title() ?>
                </button>
              </h5>
            </div>
            <div id="collapse<?php echo get_the_ID() ?>" class="collapse" aria-labelledby="heading<?php echo get_the_ID() ?>" data-parent="#accordion">
              <div class="card-body">
                <?php the_content() ?>
              </div>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
