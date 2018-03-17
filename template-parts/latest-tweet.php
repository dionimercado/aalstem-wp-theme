<?php
require_once( get_stylesheet_directory() . '/inc/TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "435678353-pujk7gWUgf8Bi7ec5FcP8hPGdDdzhHyIbnetP9SU",
    'oauth_access_token_secret' => "BYsn6mLo2v5xz9K5ekj91jVHcJrOhgwzqUueNXZXCVwdV",
    'consumer_key' => "8iBdMvH69qAHh3R6AKFaDG3kY",
    'consumer_secret' => "NfnKniCMndxXNwg8jH9yie3uR1VNgBHlwdbL6r8LOGCXGH046K"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$user = "aalstem";
$count = 1;

if (isset($_GET['user'])) { $user = $_GET['user']; }
if (isset($_GET['count'])) { $count = $_GET['count'];}

$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);

if(isset($string["errors"][0]["message"])) {
    echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";
    exit();
}
foreach($string as $items) {
  ?>
  <!-- <pre><?php //print_r($items) ?></pre> -->
  <p><?php _e( $items['text'] ) ?></p>
  <p class="text-muted"><?php _e( date( 'F d, Y', strtotime($items['created_at'])) ) ?></p>
  <a class="text-white text-uppercase" href="<?php echo esc_url( 'https://twitter.com/intent/retweet?tweet_id=' . $items['id'] ) ?>"><?php _e( 'Retweet' ) ?></a>
  <span class="text-muted"> | </span>
  <a class="text-white text-uppercase" href="<?php echo esc_url( 'https://twitter.com/intent/follow?screen_name=' .$items['user']['screen_name'] ) ?>"><?php _e( 'Follow' ) ?></a>
  <!--
        // echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo '<a href="">Retweet</a>';
        // echo "Tweeted by: ". $items['user']['name']."<br />";
        // echo "Screen name: ". $items['user']['screen_name']."<br />";
        // echo "Followers: ". $items['user']['followers_count']."<br />";
        // echo "Friends: ". $items['user']['friends_count']."<br />";
        // echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
-->
    <?php
  }

?>
