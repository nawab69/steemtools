<?php
$url = $_GET["url"];
                       // get url from url parameter
$ustart = stripos($url,"@") + 1;
            //position of the first character of username             
$ulen = strripos($url,"/") - $ustart;
       // length of username
          
$tstart = strripos($url,"/") + 1;
              // position of the first character of permlink

$username = substr($url, $ustart, $ulen );
       // take username from url
$plink = substr($url, $tstart);
                    //    take permlink from url
$api = "https://tower.emrebeyler.me/api/v1/post_cache/$username/$plink/";                 //connect to tower api


// Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$api);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

$info = json_decode($result,true);           //decode JSON from API

$body = $info[body];                              // select only body string from $info
$votes = $info[total_votes];
$total_words = str_word_count($body);          //count total words of body strings
$total_characters = strlen($body);                   // count total length of body string

$array = array('name' => $username,'url' => $url,'total_words' => $total_words,'total_char' => $total_characters,'net_votes' => $votes);
                     // create array

echo
json_encode($array, JSON_PRETTY_PRINT);
             // encode php array to JSON and print it 

// enable cross domain //

header("Access-Control-Allow-Origin: *"); header('Content-Type: application/json');


?>
