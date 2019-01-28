<?php
/* Include header file */
include ('include/header.php');

/* Include navigation bar file */
include ('include/nav.php');

$usname = $_GET["user"];    // get data from user
$touser = $_GET["to"];      // get data from to
?>

	<div class="container">
	<br>
	<br>
	<div class="card"> 
<h5 class="card-header">Confirm Remove</h5>
 <div class="card-body"> 
<center>
<!-- Form start Here -->
      <form action="" method="post" >
<!-- Username Input box -->
        <div class="form-group">
       		 <div class="input-group mb-2 mr-sm-2"> 
            <div class="input-group-prepend">
              <div class="input-group-text">From</div> 
            </div>         
      <input type="text" class="form-control" value="<?php echo $usname; ?>" name="user"  placeholder="Username" readonly> 
         </div>
        </div>
      
<!-- Withdraw To input box -->

        <div class="form-group">
          <div class="input-group mb-2 mr-sm-2"> 
            <div class="input-group-prepend">
             <div class="input-group-text">To</div>
            </div> 
              <input type="text" class="form-control" name="to"  placeholder="Withdraw To" value="<?php echo $touser; ?>" readonly>
          </div>
       </div>
      
      
<!-- Percent =0  Input box -->
    <input type="text" class="form-control" name="percent" value="0" hidden>
<!-- Auto Vesting Withdraw select box -->
    <input type="text" class="form-control" name="auto" value="false" hidden>
<br>
<!-- Remove Button -->
      <div class="form-group">
        <button align="center" name="submit" class="btn btn-primary mb-2">Remove</button> 
      </div>
  </form>
 <!-- End form -->
	 </div> 
</center>
</div>
<!-- Php function start Here -->
	<?php
if($_POST)
{
$from = $_POST["user"];   // store username from Form using post method
$to = $_POST["to"];     // store withdraw to username from Form using post method
$percent = $_POST["percent"];  // store percentage from Form using post method
$auto = $_POST["auto"]; //   store auto vest boolian from Form using post method
$api = "https://steemconnect.com/sign/set_withdraw_vesting_route?from_account=$from&to_account=$to&percent=$percent&auto_vest=$auto";   // steemconnect Api for changing withdraw routes
header("Location: $api");   // redirect to steemconnect
}
?>
</div>
<nav class="navbar fixed-bottom navbar-dark bg-dark"> <p align="center" style="color:#fff;"> This tools created by <b>@nawab69 </b></p> </nav>

<?php

include ('include/footer.php');
?>

