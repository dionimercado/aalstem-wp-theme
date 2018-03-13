<?php
define('CONSUMER_KEY', '8iBdMvH69qAHh3R6AKFaDG3kY');
define('CONSUMER_SECRET', 'NfnKniCMndxXNwg8jH9yie3uR1VNgBHlwdbL6r8LOGCXGH046K');

function get_bearer_token(){
    // Step 1
    // step 1.1 - url encode the consumer_key and consumer_secret in accordance with RFC 1738
    $encoded_consumer_key = urlencode(CONSUMER_KEY);
    $encoded_consumer_secret = urlencode(CONSUMER_SECRET);
    // step 1.2 - concatinate encoded consumer, a colon character and the encoded consumer secret
    $bearer_token = $encoded_consumer_key.':'.$encoded_consumer_secret;
    // step 1.3 - base64-encode bearer token
    $base64_encoded_bearer_token = base64_encode($bearer_token);
    // step 2
    $url = "https://api.twitter.com/oauth2/token"; // url to send data to for authentication
    $headers = array(
        "POST /oauth2/token HTTP/1.1",
        "Host: api.twitter.com",
        "User-Agent: jonhurlock Twitter Application-only OAuth App v.1",
        "Authorization: Basic ".$base64_encoded_bearer_token."",
        "Content-Type: application/x-www-form-urlencoded;charset=UTF-8",
        "Content-Length: 29"
    );

    $ch = curl_init();  // setup a curl
    curl_setopt($ch, CURLOPT_URL,$url);  // set url to send to
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // set custom headers
    curl_setopt($ch, CURLOPT_POST, 1); // send as post
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials"); // post body/fields to be sent
    $header = curl_setopt($ch, CURLOPT_HEADER, 1); // send custom headers
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    ob_start();  // start ouput buffering
    curl_exec ($ch); // execute the curl
    $retrievedhtml = ob_get_contents(); // grab the retreived html
    ob_end_clean(); //End buffering and clean output
    curl_close($ch); // close the curl
    $output = explode("\n", $retrievedhtml);
    $bearer_token = '';
    $pos ="";
    foreach($output as $line)
    {
        if($pos === false)
        {
            // there was no bearer token
        }else{
            $bearer_token = $line;
        }
    }
    $bearer_token = json_decode($bearer_token);
    return $bearer_token->{'access_token'};
};


function get_latest_tweet($bearer_token, $screen_name, $count){

    //$url = "https://api.twitter.com/1.1/search/tweets.json"; // base url
    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json"; // base url

   // $q = $query; // query term

    $formed_url ='?q='; // fully formed url
    $result_type = "";

    if($result_type!='mixed'){
      $formed_url = $formed_url.'&screen_name='.$screen_name;

    } // result type - mixed(default), recent, popular

    $rpp="";
    if($rpp!='15'){
      $formed_url = $formed_url.'&count='.$count;
    } // results per page - defaulted to 15

    $formed_url = $formed_url.''; // makes sure the entities are included, note @mentions are not included see documentation

    $headers = array(
        "GET /1.1/search/tweets.json".$formed_url." HTTP/1.1",
        "Host: api.twitter.com",
        "User-Agent: jonhurlock Twitter Application-only OAuth App v.1",
        "Authorization: Bearer ".$bearer_token."",
    );

    $ch = curl_init();  // setup a curl
    curl_setopt($ch, CURLOPT_URL,$url.$formed_url);  // set url to send to
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // set custom headers
    ob_start();  // start ouput buffering
    $output = curl_exec ($ch); // execute the curl
    $retrievedhtml = ob_get_contents(); // grab the retreived html
    ob_end_clean(); //End buffering and clean output
    curl_close($ch); // close the curl

    return $retrievedhtml;
};
