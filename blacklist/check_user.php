<?php

/* Include header file */
include ('../include/header.php');
/* Include navigation bar file */
include ('../include/nav.php');
?>
	<div class="container">
	<br>
	<br>
	<center>
	<div class="card"> <h5 class="card-header">Check Blacklisted Account</h5> <div class="card-body"> 
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
$url = "http://blacklist.usesteem.com/user/$username";
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
$info = json_decode($result,true);   //json decode
$name = $info[user];   //username
$blacklisted = $info[blacklisted];   //blacklisted array
$total= count($blacklisted);   //total object in blacklisted array
// if user is blacklisted in minimum 1 database
if($total != 0)
{

?>
<div class="alert alert-danger" role="alert"> <h4 class="alert-heading">Hi @<?php echo $name; ?> </h4> <p>Your account is blacklisted in
<?php
echo $total;  //print total blacklisted database
echo "  database <hr />
<center><h5>Blacklisted in :</h5></center>
<ul>
" ;
foreach( $blacklisted as $value ) {
 echo "<li><h6> $value </h6> <br /></li>"; 
}
echo "
</ul>
 <b>
 </b>
 </div>";
 // if user is not listed in any blacklist
}
else
{
?>
<div class="alert alert-success" role="alert"> <h4 class="alert-heading">Hi @<?php echo $name; ?> </h4> <p>Your account is not blacklisted </p>
</div>
<?php
}
}
?>


 <br>
 <br>
 <p>
 <hr>
</div>
<?php
include ('..include/footer.php');   // include footer
?>
