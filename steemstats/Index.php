<?php

$title = "Steemtools v1.0 ";



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
 <title> <?php echo $title; ?> </title>

</head>

<body>

<h2 align="center"> <?php echo $title; ?> </h2>

<center>
<p>

Enter Your username to get Data






<form action="" method="post">


    <input name="user" type="text">         ////username input box
    
 <button name="submit">Submit</button>
 
 </form>
 
 
 <br>
 <br>
 <p>
 <hr>

 
<?php 
 
if($_POST)
{



$username = $_POST["user"];          // Get username from Form & keep it to variables



$data = file_get_contents('https://api.steemjs.com/get_accounts?names[]='. $username.'');           // steemjs api 

$info = json_decode($data,true);               //decode json data


<!-- Create some variables to keep arrays to variables-->
$name = $info[0][name];
$id = $info[0][id];
$proxy = $info[0][proxy];
$last_owner_update = $info[0][last_owner_update];
$last_account_update = $info[0][last_account_update];
$created = $info[0][created];


$mined = $info[0][mined];
$recovery_account = $info[0][recovery_account];
$last_account_recovery = $info[0][last_account_recovery];
$reset_account = $info[0][reset_account];
$comment_count = $info[0][comment_count];
$lifetime_vote_count = $info[0][lifetime_vote_count];

$post_count = $info[0][post_count];
$can_vote = $info[0][can_vote];
$voting_power = $info[0][voting_power];
$vote_power = $voting_power/100;
$balance = $info[0][balance];
$savings_balance = $info[0][savings_balance];
$sbd_balance = $info[0][sbd_balance];


$savings_sbd_balance = $info[0][savings_sbd_balance];
$pending_claimed_accounts = $info[0][pending_claimed_accounts];
$witness_votes = $info[0][witness_votes];

}


?>
<!-- Create table for show info -->
<h2>User Information</h2>
<table border="1px" style="border-color:white;background-color:grey;">

<tr>
<td>

<b> Username </b> </td> <td> <?php echo $name; ?>
</td>
</tr>

<tr>
<td>

<b> Id </b> </td> <td> <?php echo $id; ?>
</td>
</tr>


<tr>
<td>

<b>Withness Proxy </b> </td> <td> <?php echo $proxy; ?>
</td>
</tr>


<tr>
<td>

<b>Vote Power </b> </td> <td> <?php echo $vote_power; ?>
</td>
</tr>


<tr>
<td>

<b>Total Post </b> </td> <td> <?php echo $post_count; ?>
</td>
</tr>


<tr>
<td>

<b>Total Vote </b> </td> <td> <?php echo $lifetime_vote_count; ?>
</td>
</tr>


<tr>
<td>

<b>Total Comment </b> </td> <td> <?php echo $comment_count; ?>
</td>
</tr>


<tr>
<td>

<b>Recovery account </b> </td> <td> <?php echo $recovery_account; ?>
</td>
</tr>


<tr>
<td>

<b>Last account recovery </b> </td> <td> <?php echo $last_account_recovery; ?>
</td>
</tr>


<tr>
<td>

<b>can vote </b> </td> <td> <?php echo $can_vote; ?>
</td>
</tr>


<tr>
<td>

<b>Account Created</b> </td> <td> <?php echo $created; ?>
</td>
</tr>


<tr>
<td>

<b>pending_claimed_accounts </b> </td> <td> <?php echo $pending_claimed_accounts; ?>
</td>
</tr>

</table>

<h2> Financial Information </h2>
<table border="1px" style="border-color:white;background-color:grey;">
<tr>
<td>

<b>balance(STEEM)</b> </td> <td> <?php echo $balance; ?>
</td>
</tr>


<tr>
<td>

<b>Balance (SBD)</b> </td> <td> <?php echo $sbd_balance; ?>
</td>
</tr>


<tr>
<td>

<b>savings balance(STEEM) </b> </td> <td> <?php echo $savings_balance; ?>
</td>
</tr>


<tr>
<td>

<b>Savings Balance (SBD) </b> </td> <td> <?php echo $savings_sbd_balance; ?>
</td>
</tr>

</table>


<h2>All Data in Json</h2>

<table style="border-color:white;background-color:grey;">
<tr>
<td>
<?php echo $data; ?>
</td> </tr>
</table>
</p>
</center>

<br>
<br>
<br>
<br>

<center>
<footer>
<div style="position:flex;background-color:grey;height:auto;width:max;">
<p> Created By @nawab69 </p>
</div>
<footer>
</center>
</body>

</html>
