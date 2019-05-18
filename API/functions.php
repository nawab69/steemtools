
<?php

// API //

$api="https://api.steemit.com";

// Curl Method //

function GetData($api,$pdata){

$ch = curl_init($api);
     // steemit api
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $pdata);
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

}

