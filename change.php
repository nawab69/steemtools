<?php

/* Include header file */

include ('include/header.php');

/* Include navigation bar file */

include ('include/nav.php');

?>

	<div class="container">
	<br>
	<br>
	
	
	<div class="card"> 
	
<h5 class="card-header">Add / change Withdraw Vesting Route</h5>

 <div class="card-body"> 
<center>

<!-- Form start Here -->

      <form action="" method="post" >
      
<!-- Username Input box -->

      <div class="form-group">
        <div class="input-group mb-2 mr-sm-2"> 
          <div class="input-group-prepend">
           <div class="input-group-text">@</div> 
           </div>         
      <input type="text" class="form-control" name="user" id="inlineFormInputGroupUsername2" placeholder="Username"> </div> </div>
      
<!-- Withdraw To input box -->

 <div class="form-group">

      
      <div class="input-group mb-2 mr-sm-2"> 
      <div class="input-group-prepend"> <div class="input-group-text">@</div> </div> 
      <input type="text" class="form-control" name="to" id="inlineFormInputGroupUsername2" placeholder="Withdraw To"> </div> </div>
      
      
<!-- Parcentage Range Input box -->

<label for="customRange3">Percentage </label> <input name="percent" type="range" class="custom-range" min="0" max="10000" step="500" id="customRange3">

<!-- Auto Vesting Withdraw select box -->

 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Auto Vest</label> <select name="auto" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"> <option selected>Choose...</option> <option value="true">True</option> <option value="false">False</option>  </select> 

<br>

<!-- Submit Button -->

<div class="form-group">
 <button align="center" name="submit" class="btn btn-primary mb-2">Submit</button> 
 </div>
 </form>
 
 <!-- End form -->
  

 
	
	
	
	
	
	 </div> </center></div>
	 

<!-- Php function start Here -->

	<?php


if($_POST)

{

$from = $_POST["user"];   // store username from Form using post methood

$to = $_POST["to"];     // store withdraw to username from Form using post methood

$percent = $_POST["percent"];  // store percentage from Form using post methood

$auto = $_POST["auto"]; //   store auto vest boolian from Form using post methood

$api = "https://steemconnect.com/sign/set_withdraw_vesting_route?from_account=$from&to_account=$to&percent=$percent&auto_vest=$auto";   // steemconnect Api for changing withdraw routes

header("Location: $api");   // redirect to steemconnect

}
?>

	
</div>
<nav class="navbar fixed-bottom navbar-dark bg-dark"> <p align="center" style="color:#fff;"> This tools created by <b>@nawab69 </b></p> </nav>

<?php

include ('include/footer.php');
?>

