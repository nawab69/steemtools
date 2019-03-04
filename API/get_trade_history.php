<?php
$start = $_GET["start"];
$end = $_GET["end"];
$array = array('jsonrpc' => '2.0','method' => 'condenser_api.get_trade_history','params' =>["$start","$end"],'id' =>'1');
    // create array
$post = json_encode($array, JSON_PRETTY_PRINT);    // encode php array to JSON

// Curl Method //

$ch = curl_init('https://api.steemit.com');
     // steemit api
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  //post data
curl_setopt($ch, CURLOPT_HTTPHEADER, false);
 // http header request
$data = curl_exec($ch);
     //get data from steemit API
curl_close($ch);
  
   //close curl

$arr = json_decode($data,true);
      //decode data 
$info = $arr[result];      //select result array from JSON 
$json = json_encode($info);    // encode the result array to json

echo $result;
 // print the JSON

// enable cross domain //

header("Access-Control-Allow-Origin: *"); header('Content-Type: application/json');

?>