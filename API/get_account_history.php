<?php
require('functions.php');  //include steemTools Library function
$account = $_GET["account"];
$start = $_GET["start"];
$limit = $_GET["limit"];
   //get username
$array = array('jsonrpc' => '2.0','method' => 'condenser_api.get_account_history','params' =>["$account","$start","$limit"],'id' =>'1');
    // create array
$post = json_encode($array, JSON_PRETTY_PRINT);    // encode php array to JSON

GetData($api,$post);   // print Json
