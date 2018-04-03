<?php
$company_id = get_post_meta( get_the_ID(), 'company', true );
$company_location = get_post_meta( $company_id, 'location', true );
$company_address = explode(", ", $company_location['address']);
?>
<article class="job-content my-4">
  <header class="bg-primary text-white p-4 mb-5">
    <div class="row">
      <div class="col-2">
        <?php
        if( has_post_thumbnail($company_id) ) {
          echo get_the_post_thumbnail( $company_id, 'thumbnail', array( 'class' => 'img-fluid rounded-circle bg-white p-2' ) );
        }
        ?>
      </div>
      <div class="col-10">
        <div class="mb-sm-0">
          <span class="price text-success"><strong><?php echo get_post_meta( get_the_ID(), 'employment_type', true ) ?></strong></span>
        </div>
        <h2 class="mb-0"><?php the_title() ?> <small style="font-size: 14px; font-weight: 600; color: #fff; border: 1px solid rgba(255,255,255,.2); border-radius: 50px; padding: 5px 15px;"><?php echo get_post_meta( get_the_ID(), 'reporting_location', true ) ?></small> </h2>
        <span class="text-muted ml-1"><?php echo $company_address[1] . ", " . $company_address[2] ?></span>

      </div>
    </div>
  </header>
  <section class="bg-white rounded p-4 mb-5">
    <h2 style="font-size: 18px;
      display: inline-block;
      border-radius: 50px;
      padding: 8px 25px;
      text-transform: unset;
      color: #444;
      transform: translateY(-44px);
      background-color: #fff;
      box-shadow: 0 3px 20px rgba(0,0,0,.15);">Required Skills</h2>
  </section>
  <section class="bg-white rounded p-4">
    <h2 style="font-size: 18px;
    display: inline-block;
    border-radius: 50px;
    padding: 8px 25px;
    text-transform: unset;
    color: #444;
    transform: translateY(-44px);
    background-color: #fff;
    box-shadow: 0 3px 20px rgba(0,0,0,.15);">Description</h2>
    <?php the_content() ?>
  </section>
</article>
