<?php
// Include header file 

include ('include/header.php');

// Include navigation bar file 

include ('include/nav.php'); 
?>


	<div class="container">
	<br>
	<br>
	<center>
	<div class="card"> <h5 class="card-header">Blog Counter </h5> <div class="card-body"> 
      <form action="" method="post" >
      <div class="form-group">
      <label class="sr-only" > Blog URL</label> 
      <div class="input-group mb-2 mr-sm-2"> 
      <input type="text" class="form-control" value="<?php echo $link; ?>" name="link" placeholder="BLOG URL"> </div> </div>
<br>
<div class="form-group">
 <button align="center" name="submit" class="btn btn-primary mb-2">Submit</button> 
 </div>
 </form>
	 </div> </div>
	</center> 

<br> <br>

<?php 
if($_POST)

{

$link = $_POST["link"];

$ustart = stripos($link,"@") + 1;                    //position of the first character of username
$ulen = strripos($link,"/") - $ustart;              // length of username
$tstart = strripos($link,"/") + 1;                      // position of the first character of Permalink

$username = substr($link, $ustart, $ulen );          // take the username from link
$plink = substr($link, $tstart);                                // take the permalink from link

$api = "https://api.steemjs.com/get_content?author=$username&permlink=$plink";                 //connect to steemjs


// Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$api);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

$info = json_decode($result,true);           //decode JSON from API

$body = $info[body];                              // select only body string from $info

$total_words = str_word_count($body);          //count total words of body strings
$total_characters = strlen($body);                   // count total length of body string

?>

<!-- Display Counter -->

 <div class="alert alert-success" role="alert"> <h4 class="alert-heading">Counter</h4> <p>Total Words: <b><?php
echo $total_words; ?> </b>
</p> 
<p> Total characters : <b> <?php echo $total_characters; ?> </b>
</p>
</div>
<?php
}
?>
 <br>
 <br>
 <hr>
</div>
<?php
include ('include/footer.php');
?>
