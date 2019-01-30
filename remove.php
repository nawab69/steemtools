<?php
include ('include/header.php');  // Include header
include ('include/nav.php');     // Include Navigation bar
?>
	<div class="container">
	<br>
	<br>
<center>
     <div class="card">
      <h5 class="card-header">Remove Withdraw Routes</h5>
       <div class="card-body"> 
         <form action="" method="post" >
           <div class="form-group">
             <label class="sr-only">Username</label> 
                <div class="input-group mb-2 mr-sm-2"> 
                   <div class="input-group-prepend">
                     <div class="input-group-text">@</div>
                   </div> 
                     <input type="text" class="form-control" name="user" placeholder="Enter your username">
               </div> 
           </div>
               <br>
                 <div class="form-group">
                   <button align="center" name="submit" class="btn btn-primary mb-2">Next</button> 
                 </div>
           </form>
   <!-- Php function start here -->
<?php 
if($_POST)
{
  $username = $_POST["user"];
	
 // $data = file_get_contents('https://api.steemjs.com/get_withdraw_routes?account='.$username.'&withdrawRouteType=true');         // steemjs Api
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
	$info = json_decode($data,true);            // decode from json to php strings                   
  $to = $info[0][to_account];                 // keep 'to_account' string's value at variable
    header("Location: confirmremove.php?user=$username&to=$to");   // redirect to confirmremove.php 
}
?>
     </div>
   </div>
	</center>
</div>
<nav class="navbar fixed-bottom navbar-dark bg-dark"> <p align="center" style="color:#fff;"> This tools created by <b>@nawab69 </b></p> </nav>
<?php
include ('include/footer.php');
?>

