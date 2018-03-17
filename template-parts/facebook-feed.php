<?php
$app_id = '326224234448777';
$app_secret = 'a54085e66d8d05258befc8c9dea446d3';
$fb_page_id = '738561746243800';
$access_token = $app_id . '|' . $app_secret;
$fields = "id,message,picture,link,name,description,type,icon,created_time,from,object_id";
$limit = 1;

$limit = '';

$json_link = "https://graph.facebook.com/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}&limit={$limit}";
$json = file_get_contents($json_link);

$obj = json_decode($json, true);
$feed_item_count = count($obj['data']);

// echo "<pre>";
$message = $obj['data'][0]['message'];
$post_link = $obj['data'][0]['link'];
$created_time = date( 'F d, Y', strtotime($obj['data'][0]['created_time']));
// print_r($obj['data'][0]);
?>
<p><?php _e( $message ) ?></p>
<p class="text-muted"><?php _e( $created_time ) ?></p>
<a class="text-white text-uppercase" href="<?php echo esc_url( $post_link ) ?>" target="_blank"><?php _e( 'See post' ) ?></a>
<span class="text-muted"> | </span>
<a class="text-white text-uppercase" href="<?php echo esc_url( 'https://www.facebook.com/sharer/sharer.php?u=' . $post_link ) ?>" target="_blank"><?php _e( 'Share' ) ?></a>
