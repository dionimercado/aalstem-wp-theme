<?php get_header() ?>

<main class="mb-5 pb-5">
  <div class="breadcrumbs-wrap py-4 py-md-5 mb-4 mb-md-5 text-center text-md-left">
    <div class="container">
      <h1 class="page-title">News &amp; Media</h1>
      <ul class="breadcrumbs list-inline">
        <li class="list-inline-item"><a href="/">Home</a></li>
        <li class="list-inline-item">News &amp; Media</li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php
        while( have_posts() ) : the_post();
        $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

        ?>
        <article class="aalstem-post mb-5">
          <div class="post-attachment mb-4">
            <a href="<?php the_permalink() ?>"><img class="img-fluid" src="<?php echo $post_thumb[0]; ?>&amp;resize=750,450" alt="<?php the_title(); ?>" /></a>
          </div>
          <div class="row">
            <div class="col-md-2 d-none d-md-block">
              <div class="entry-date">
                <div class="entry-month"><?php the_time('M') ?></div>
                <div class="entry-day"><?php the_time('d') ?></div>
              </div>
            </div>
            <div class="col-md-10">
              <div class="post-info">
                <h4 class="entry-link"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                <div class="entry-meta">
                  <?php
                  // If comments are open or we have at least one comment, load up the comment template.
                  if ( comments_open() || get_comments_number() ) :
                      comments_template();
                  endif;

                  ?>

                  <a href="<?php the_permalink() ?>#comments" class="entry-comments-link"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
                  <span class="entry-byline">by <?php the_author_posts_link(); ?></span>
                  <span class="entry-cat">in <a href="#"> News</a></span>
                </div>
                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>" class="info-btn"><?php _e( 'Read More' ) ?></a>
              </div>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar() ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer() ?>
