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
<div class="card"> <h5 class="card-header">Check Current Recovery Account</h5> <div class="card-body"> 
      <form action="" method="post" >
      <div class="form-group">
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
$url = "https://api.steemjs.com/get_accounts?names[]=$username";  //steemjs API
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
$info = json_decode($result,true);  //decode json
$name = $info[0][name];  //store username value
$to = $info[0][recovery_account];  //store recovery account value
?>
<div class="alert alert-success" role="alert"> <h4 class="alert-heading">Hi <?php echo $name; ?> </h4> <p>Your current recovery account is <b>@<?php
echo $to; ?> </b>
</p> <hr> <p class="mb-0">You can change your Recovery account from <a href="changerecovery">here</a> </p> </div>
<?php

}
?>
<br>
<br>
<p>
<hr>
</div>
<?php
include ('include/footer.php');
?>
