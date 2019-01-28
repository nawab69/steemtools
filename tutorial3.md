### Repository

https://github.com/nawab69/steemtools

### What will you learn-

- You will learn how to use SteemConnect

- You will learn about Steemconnect
- You will learn how to check withdraw routes
- You will learn how to create a php application

### Requirements

- Web Hosting
- Text Editor
- knowledge on php,  JSON & html

### Difficulty

- Intermediate

### Description 

Hello everybody, I am Nawab. A full stack web developer in opensource community. Currently I am working on a project. My project is teaching everybody  about app development. I am not good in English Language. I am living in  UK from five years. Please forgive me if I write any grammatical errors.

In my previous tutorial you have learned how to check withdraw Routes using Php + SteemJs
  
Today I will teach you 2nd part of these tutorial. 

If someone want to power down his steem power to another steemit account, he/she should use this system. This is not visible to steemit.com .  You can use the system by SteemJS API & STEEMCONNECT.

- You can check your current withdraw vesting route by  SteemJS API
- You can change your current withdraw vesting route by STEEMCONNECT API



![](https://d1vof77qrk4l5q.cloudfront.net/img/674faad008fc5944ac0910f87b982ea69626aff4.jpg)


#### Tutorial

First create ``change.php`` file. Use any HTML & CSS template in your page to look better. I use basic bootstrap template.

First, Include the header and the navigation bar template file. 
```
<?php

/* Include header file */

include ('include/header.php');

/* Include navigation bar file */

include ('include/nav.php');
?>
```
If you want to change your withdraw route,  you have to input 4 data. These are-

- From Account 
- To Account
- Percentage
- Auto Vest

So  Create a Form with "post" methood.

``` 
<form action="" method="post" >

</form>

```

Inside the form create 4 form input box.

| Sn No | Input        | Type   | Name    |
|:-----:|--------------|--------|---------|
| 1     | FROM ACCOUNT | text   | user    |
| 2     | TO ACCOUNT   | text   | to      |
| 3     | PERCRNTAGE   | range  | percent |
| 4     | AUTO VEST    | select | auto    |

##### FROM ACCOUNT
This input box  for input own username. Write down this code inside form tag.

```
<div class="form-group">
        <div class="input-group mb-2 mr-sm-2"> 
          <div class="input-group-prepend">
           <div class="input-group-text">@</div> 
           </div>         
      <input type="text" class="form-control" name="user" id="inlineFormInputGroupUsername2" placeholder="Username"> </div> </div>
```

##### TO ACCOUNT

This input box  for input own username. Write down this code after  "FROM ACCOUNT" input text box.

```
<div class="form-group">

      
      <div class="input-group mb-2 mr-sm-2"> 
      <div class="input-group-prepend"> <div class="input-group-text">@</div> </div> 
      <input type="text" class="form-control" name="to" id="inlineFormInputGroupUsername2" placeholder="Withdraw To"> </div> </div>
```

##### PERCENTAGE

It is a range input type. It use for changing percentage of withdraw route.
Write down this code after  "TO ACCOUNT" input box.

```
<label for="customRange3">Percentage </label> <input name="percent" type="range" class="custom-range" min="0" max="10000" step="500" id="customRange3">
```

##### AUTO VEST
It is a select input type. It use for select any option from popup. I use here true & false option. Write down this code after "Percentage" Range input box.

```
<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Auto Vest</label> <select name="auto" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"> <option selected>Choose...</option> <option value="true">True</option> <option value="false">False</option>  </select> 
```
Now the form building has completed. But it won't work. We need to create some php function to run this form.

#####  Submit button



#### Create Php function

```
<?php

if($_POST)

{

$from = $_POST["user"];   // store username from Form using post method

$to = $_POST["to"];     // store withdraw to username from Form using post method

$percent = $_POST["percent"];  // store percentage from Form using post method

$auto = $_POST["auto"]; //   store auto vest boolean from Form using post method
}
?>
```
Write this code after the form close tag. 
I used here "if" condition statement. If anyone post using the form, all the function inside the "{}" will run. I have created 4 variables, they will store input data from form.

Now write the bellow code,

```
$api = "https://steemconnect.com/sign/set_withdraw_vesting_route?from_account=$from&to_account=$to&percent=$percent&auto_vest=$auto";   // steemconnect Api for changing withdraw routes

header("Location: $api");   // redirect to steemconnect

```
Here we create a variable named "$api " and write the api.
For changing Withdraw Route,  STEEMCONNECT API is, ``https://steemconnect.com/sign/set_withdraw_vesting_route``. This API has four parameters.  These are -
- from_account
- to_account
- percent
- auto_vest

I have written their value in variables. 
When a user insert data in form and submit. These data will store in variables. These variables will use as different parameter's value.

Finally redirect users to STEEMCONNECT by this line  `` header("Location: $api"); ``

Now insert footer and save the file.

### How to work

First browse the file from server. This window will open.



![](https://d1vof77qrk4l5q.cloudfront.net/img/674faad008fc5944ac0910f87b982ea69626aff4.jpg)



Insert all data.  For example, I use 

> username = @nawab69  
   withdraw to = @utopian-io
   percentage = max(10000)
   auto vest = false


![](https://d1vof77qrk4l5q.cloudfront.net/img/a2c9a4f6cdb9b96d92ce7c4e2b20d12b12abfc92.jpg)


Then press the submit button.

Site will redirect to steemconnect. Check your input data. If its correct, press the submit button.


![](https://d1vof77qrk4l5q.cloudfront.net/img/1f3332c62ef3aa169ad61cebf8bba944358eb27e.jpg)


Steemconnect ask you  username & password. Fill them and Sign in. The withdraw vesting routes will change.



![](https://d1vof77qrk4l5q.cloudfront.net/img/07780acffef07c59075548bcf882349074f3776f.jpg)



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

<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Auto Vest</label> <select name="auto" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"> <option selected>Choose...</option> <option value="true">True</option> <option value="false">False</option>  </select> 

<br>

<!-- Submit Button -->
```
<div class="form-group">
<button align="center" name="submit" class="btn btn-primary mb-2">Submit</button> 
</div>

```
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

$from = $_POST["user"];   // store username from Form using post method

$to = $_POST["to"];     // store withdraw to username from Form using post method

$percent = $_POST["percent"];  // store percentage from Form using post method

$auto = $_POST["auto"]; //   store auto vest boolian from Form using post method

$api = "https://steemconnect.com/sign/set_withdraw_vesting_route?from_account=$from&to_account=$to&percent=$percent&auto_vest=$auto";   // steemconnect Api for changing withdraw routes

header("Location: $api");   // redirect to steemconnect

}
?>

</div>
<nav class="navbar fixed-bottom navbar-dark bg-dark"> <p align="center" style="color:#fff;"> This tools created by <b>@nawab69 </b></p> </nav>

<?php

include ('include/footer.php');
?>

```

### Curriculum

[[ Php + SteemJs Api ] Steembased Web Application Building Tutorial - Part-1 (steem stats)](https://steemit.com/utopian-io/@nawab69/php-steemjs-api-steembased-web-application-building-tutorial-part-1-steem-stats)

[[Php + SteemJs API] Withdraw Routes Check Application building Tutorial - Part-2](https://steemit.com/utopian-io/@nawab69/steemjs-api-php-build-a-php-application-for-showing-withdraw-routes-part2-2xlbelgp)

### Prove of work done

https://github.com/nawab69/steemtools/blob/master/change.php

http://steemtools.html-5.me/change.php

Posted using [Partiko Android](https://steemit.com/@partiko-android)
