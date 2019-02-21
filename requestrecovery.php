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
<h5 class="card-header">Request Account Recovery</h5>
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
      <input type="text" class="form-control" name="username" placeholder="username"> </div> </div>
<!-- Recovery Account Input Box-->
 <div class="form-group">
      <div class="input-group mb-2 mr-sm-2"> 
      <div class="input-group-prepend"> <div class="input-group-text">@</div> </div> 
      <input type="text" class="form-control" name="recovery" placeholder="Recovery Account username"> </div> </div>


<!-- New Owner Authority Input Box-->
 <div class="form-group">
      <div class="input-group mb-2 mr-sm-2"> 
      <div class="input-group-prepend"> <div class="input-group-text">@</div> </div> 
      <input type="text" class="form-control" name="new" placeholder="New owner authority's username"> </div> </div>

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
$recovery = $_POST["recovery"];   // recovery account username
$username = $_POST["username"];     // account to recover username
$new = $_POST["new"];     // new owner authority
$ext = "[]";  // extension
$api = "https://app.steemconnect.com/sign/request_account_recovery?recovery_account=$recovery&account_to_recover=$username&new_owner_authority=$new&extensions=$ext";   // steemconnect Api
header("Location: $api");   // redirect to steemconnect
}
?>
</div>
<?php
include ('include/footer.php');
  //include footer
?>

