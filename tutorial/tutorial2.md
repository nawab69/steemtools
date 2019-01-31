
### Repository

https://github.com/nawab69/steemtools

### What will you learn-

- You will learn how to use Steemjs api in php
- You will learn about API
- You will learn how to check withdraw routes
- You will learn how to create a php application

### Requrements

- Web Hosting
- Text Editor
- knowledge on php,  JSON & html

### Difficulty

- Intermediate

### Tutorial

Hello everybody, I am Nawab. A full stack web developer in opensource community. Currently I am working on a project. My project is teaching everybody  about app development. I am not good in English Language. My mother language is Bengali. I am living in  UK from five years. Please forgive me if I write any grammatical errors.

Today I will teach you a very important tutorial. Most of the steemit users don't know that steemit has a system which is called withdraw routes.

If someone want to power down his steem power to another steemit account, he/she should use this system. This is not visible to steemit.com .  You can use the system by STEEMJS API & STEEMCONNECT.

In this tutorial you will learn how to show Withdraw Routes.

First create ``check.php`` file. Use any HTML & CSS template in your page to look better. I use basic bootstrap template.

First, Include the header and the navigation bar template file. 
```
<?php

/* Include header file */

include ('include/header.php');

/* Include navigation bar file */

include ('include/nav.php');
?>
```
Now write down this code.

```
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
```
I use bootstrap form template. This from will post  Username in "user" strings.

Now we need to keep this strings to a variable.

```
<?php 
if($_POST)
{
$username = $_POST["user"];
}
```
When a user write his username and press the submit button, the username will store in ``$username``.

Withdraw Routes API is ``https://api.steemjs.com/get_withdraw_routes`` and it has two parameters.  One is ``account`` and the other is ``withdrawRouteType``.

Write down this code

```
$data = file_get_contents('https://api.steemjs.com/get_withdraw_routes?account='.$username.'&withdrawRouteType=true');
```
When You use any API, we get data in JSON. Then you need to decode the json.

```
$info = json_decode($data,true);
```
You get  "name" and "to_account"  values. Keep these values in variables by this code

```
$name = $info[0][name];
$to = $info[0][to_account];
?>
```
Now print the ``$to`` variable.
<?php echo $to ; ?>

Here is the full codes of my tutorial
```
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
$data = file_get_contents('https://api.steemjs.com/get_withdraw_routes?account='.$username.'&withdrawRouteType=true');
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
<br><br><p><hr></div>
<nav class="navbar fixed-bottom navbar-dark bg-dark"> <p align="center" style="color:#fff;"> This tools created by <b>@nawab69 </b></p> </nav>
<?php
include ('include/footer.php');
?>
```

### Curriculum
[[ Php + SteemJs Api ] Steembased Web Application Building Tutorial - Part-1 (steem stats)](https://steemit.com/utopian-io/@nawab69/php-steemjs-api-steembased-web-application-building-tutorial-part-1-steem-stats)

### Next Tutorial
- Change withdraw routes using steemconnect in php website

### Prove of work done

https://github.com/nawab69/steemtools/blob/master/check.php

https://steemtools.html-5.me/check.php

