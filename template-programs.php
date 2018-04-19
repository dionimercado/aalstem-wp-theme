<?php
/* Template Name: Our Programs */

get_header();
?>

<div class="breadcrumbs-wrap text-center py-5">
  <div class="container">
    <h1 class="page-title"><?php _e( 'Our Programs' ) ?></h1>
  </div>
  <img class="atom" src="<?php echo get_template_directory_uri() ?>/assets/images/icon-atom.svg" alt="">
  <img class="bulb" src="<?php echo get_template_directory_uri() ?>/assets/images/icon-bulb.svg" alt="">
</div>

<section class="bg-white py-0 py-lg-5 mb-5 mb-lg-0">
  <div class="block-header  mt-5 text-center mb-4 mb-md-5">
    <h1><?php _e( 'Community <strong class="text-secondary">Engagement</strong>' ) ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
        <img class="img-fluid mb-4" src="/wp-content/uploads/2018/04/community.jpg" alt="Job Opportunities">
      </div>
      <div class="col-lg-6 text-center text-lg-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
        <p>We have a network of established Latino professionals that are of first generation and as a result bring our experiences and challenges that we had to face in order to achieve our personal goals. As such, we will also look to leverage and work in tandem with similar organizations to make a much needed impact on the Latino community with respects to pursuing careers in STEM. The hope is that the next generation listens to our message in an effort to increase our numbers.</p>
        <a href="<?php echo get_the_permalink('174') ?>" class="btn btn-primary mt-4"><?php _e( 'Learn more ') ?></a>
      </div>
    </div>
  </div>
</section>

<section class="bg-light py-5">
  <div class="block-header text-center mb-4 mb-md-5">
    <h1><?php _e( '<strong class="text-secondary">Mentoring</strong> Program' ) ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-block d-lg-none  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
        <img class="img-fluid mb-4" src="/wp-content/uploads/2018/03/mentorig.jpg" alt="AALSTEM Mentoring Program">
      </div>
      <div class="col-lg-6 text-center text-lg-right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
        <p>The AALSTEM mentoring program focuses on the personal, academic and social needs of college students. It is dedicated to building relationships to empower college students in taking on leadership roles in their school and community at large. In addition, we provide services, resources and support needed for students to realize their full potential in order to meet their personal and career aspirations. The relationships formed enable mentees to broaden their horizons, grow and develop academically, build a positive image and develop strong leadership skills.</p>
        <a href="<?php echo get_the_permalink('304') ?>"class="btn btn-primary mt-4"><?php _e( 'Learn more' ) ?></a>
      </div>
      <div class="col-lg-6 d-none d-lg-block  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
        <img class="img-fluid" src="/wp-content/uploads/2018/03/mentorig.jpg" alt="AALSTEM Mentoring Program">
      </div>
    </div>
  </div>
</section>


<section class="bg-white py-5">
  <div class="block-header text-center mb-4 mb-md-5">
    <h1><?php _e( '<strong class="text-secondary">Volunteering</strong> Opportunities' ) ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0s">
        <img class="img-fluid mb-4" src="/wp-content/uploads/2018/03/volunteer.jpg" alt="Job Opportunities">
      </div>
      <div class="col-lg-6 text-center text-lg-left wow bounceInRight" data-wow-duration="2s" data-wow-delay="0s">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt illum nisi asperiores laudantium est tempore iste ratione voluptatem provident placeat, perferendis laborum. Illum amet, repellendus voluptates optio porro. Inventore dolores quod amet saepe illo, perspiciatis at reprehenderit, dolorum enim culpa officia labore sapiente, necessitatibus? Molestiae deleniti vitae quo illum, id.</p>
        <a href="<?php echo get_the_permalink('153') ?>?role=volunteer" class="btn btn-primary mt-4"><?php _e( 'Become a volunteer' ) ?></a>
      </div>
    </div>
  </div>
</section>


<section class="bg-light py-5">
  <div class="block-header text-center mb-4 mb-md-5">
    <h1><?php _e( '<strong class="text-secondary">Job</strong> Opportunities' ) ?></h1>
  </div>
  <div class="container wow bounceIn" data-wow-duration="1500ms" data-wow-delay="0s">
    <div class="row">
      <div class="col-lg-6 d-block d-lg-none">
        <img class="img-fluid mb-4" src="/wp-content/uploads/2018/03/jobs.jpg" alt="Job Opportunities">
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt illum nisi asperiores laudantium est tempore iste ratione voluptatem provident placeat, perferendis laborum. Illum amet, repellendus voluptates optio porro. Inventore dolores quod amet saepe illo, perspiciatis at reprehenderit, dolorum enim culpa officia labore sapiente, necessitatibus? Molestiae deleniti vitae quo illum, id.</p>
        <a href="<?php echo get_post_type_archive_link('job') ?>" class="btn btn-primary mt-4"><?php _e( 'See job openings' ) ?></a>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <img class="img-fluid" src="/wp-content/uploads/2018/03/jobs.jpg" alt="Job Opportunities">
      </div>
    </div>
  </div>
</section>

<section class="bg-white py-5">
  <div class="block-header text-center mb-4 mb-md-5">
    <h1><?php _e( '<strong class="text-secondary">Entrepreneurship</strong> Program' ) ?></h1>
  </div>
  <div class="container wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid mb-4" src="/wp-content/uploads/2018/03/entreprenourship.jpg" alt="Job Opportunities">
      </div>
      <div class="col-lg-6 text-center text-lg-left">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt illum nisi asperiores laudantium est tempore iste ratione voluptatem provident placeat, perferendis laborum. Illum amet, repellendus voluptates optio porro. Inventore dolores quod amet saepe illo, perspiciatis at reprehenderit, dolorum enim culpa officia labore sapiente, necessitatibus? Molestiae deleniti vitae quo illum, id.</p>
        <a href="<?php echo get_post_type_archive_link('job') ?>" class="btn btn-primary mt-4"><?php _e( 'Learn more' ) ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
