<?php
require('functions.php');  //include steemTools Library function
$array = array('jsonrpc' => '2.0','method' => 'condenser_api.get_account_count','params' =>[],'id' =>'1');
    // create array
$post = json_encode($array, JSON_PRETTY_PRINT);    // encode php array to JSON
GetData($api,$post);    // Get Data function
