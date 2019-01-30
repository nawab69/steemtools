<?php

/* Include header file */

include ('include/header.php');

/* Include navigation bar file */

include ('include/nav.php');
?>
	<div class="container">
	<br>
	<br>
	<center>
	<div class="card"> <h5 class="card-header">Check Withdraw Route</h5> <div class="card-body"> 
      <form action="" method="post" >
      <div class="form-group">
      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label> 
      <div class="input-group mb-2 mr-sm-2"> 
      <div class="input-group-prepend"> <div class="input-group-text">@</div> </div> 
      <input type="text" class="form-control" name="user" id="inlineFormInputGroupUsername2" placeholder="Username"> </div> </div>
<br>
<div class="form-group">
 <button align="center" name="submit" class="btn btn-primary mb-2">Submit</button> 
 </div>
 </form>
	 </div> </div>	
	</center>    
<?php 
if($_POST)
{
$username = $_POST["user"];
// $data = file_get_contents('https://api.steemjs.com/get_withdraw_routes?account='.$username.'&withdrawRouteType=true');
$api = "https://api.steemjs.com/get_withdraw_routes?account=$username&withdrawRouteType=true";
//  Initiate curl
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
$name = $info[0][name];
$to = $info[0][to_account];
$too = "";
?>
<?php
if($to == $too)
{ 
?>
<div class="alert alert-danger" role="alert"> <h4 class="alert-danger">No Withdraw Routes Found!</h4> <p> </b>
</p> <hr> <p class="mb-0">You can Add or change your withdraw Routes by our tools</p> </div>
<?php
}
else
{
?>
<div class="alert alert-success" role="alert"> <h4 class="alert-heading">Withdraw Routes Found!</h4> <p>Your Withdraw Routes is <b>@<?php
echo $to; ?> </b>
</p> <hr> <p class="mb-0">You can change your withdraw Routes by our tools</p> </div>
<?php
}
}
?>
 <br>
 <br>
 <p>
 <hr>
</div>
<nav class="navbar fixed-bottom navbar-dark bg-dark"> <p align="center" style="color:#fff;"> This tools created by <b>@nawab69 </b></p> </nav>
<?php
include ('include/footer.php');
?>
