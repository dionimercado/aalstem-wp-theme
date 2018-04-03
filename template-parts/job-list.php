<?php
$company_id = get_post_meta( get_the_ID(), 'company', true );
$company_location = get_post_meta( $company_id, 'location', true );
$company_address = explode(", ", $company_location['address']);
?>
<article class="job-item bg-white px-4 py-3 my-4 rounded">
  <a href="<?php the_permalink() ?>">
    <div class="row">
      <div class="col-sm-2 text-center">
        <?php
        if( has_post_thumbnail($company_id) ) {
          echo get_the_post_thumbnail( $company_id, 'thumbnail', array( 'class' => 'img-fluid p-3' ) );
        }
        ?>
      </div>
      <div class="col-sm-10 d-flex flex-column justify-content-center">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">
          <h2><?php the_title() ?></h2>
          <div class="mb-sm-0">
            <span class="price text-success"><strong><?php echo get_post_meta( get_the_ID(), 'employment_type', true ) ?></strong></span>
            <span class="time-ago ml-2"><?php echo time_elapsed_string( get_the_time('Y-m-d H:i:s') ) ?></span>
          </div>
        </div>
        <div>
          <div class="d-flex flex-column flex-sm-row text-center text-sm-left justify-content-between">
            <div class="d-flex text-center text-sm-center justify-content-center">
              <span class="text-muted mr-1"><i class="far fa-building"></i> <?php echo get_the_title( $company_id ) ?></span>
              <span class="text-muted ml-1"><i class="fas fa-map-marker-alt"></i> <?php echo $company_address[1] . ", " . $company_address[2] ?></span>
            </div>
            <div class="">
              <ul class="skills-list">
                <li>Javascript</li>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>React</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</article>
