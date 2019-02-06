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

$api = "https://api.steemjs.com/get_content?author=$username&permlink=$plink";
          //connect to steemjs api
// Initiate curl
$curl = curl_init();
// Will return the response, if false it print the response
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($curl, CURLOPT_URL,$api);
// Execute
$data=curl_exec($curl);
// Closing
curl_close($curl);

$info = json_decode($data,true);
            //decode JSON

$body = $info[body];
$vote = $info[net_votes];
                              // select only body string

$total_words = str_word_count($body);          //count total words of body strings
$total_characters = strlen($body);                   // count total length of body string


$array = array('name' => $username,'url' => $url,'total_words' => $total_words,'total_char' => $total_characters);
                     // create array
$json = json_encode($array, JSON_PRETTY_PRINT);
             // encode php array to JSON 
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $json;
?>
