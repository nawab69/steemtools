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
<h5 class="card-header">Change Recovery Account</h5>
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
             <input type="text" class="form-control" name="user" placeholder="Username">
         </div>
       </div>
<!-- Recovery Account Input Box-->
       <div class="form-group">
          <div class="input-group mb-2 mr-sm-2"> 
             <div class="input-group-prepend"> <div class="input-group-text">@</div>
             </div> 
             <input type="text" class="form-control" name="to" placeholder="Recovery Account"> </div> </div>
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
$from = $_POST["user"];   // username
$to = $_POST["to"];     // recovery account
$ext = "[]";  // extension
$api = "https://app.steemconnect.com/sign/change_recovery_account?account_to_recover=$from&new_recovery_account=$to&extensions=$ext";   // steemconnect Api
header("Location: $api");   // redirect to steemconnect
}
?>
</div>
<?php
include ('include/footer.php');
  //include footer
?>

