### Repository

https://github.com/nawab69/steemtools

### What will you learn-

- You will learn how to use Steemjs api in php
- You will learn how to decode json data to php strings and arrays.
- You will learn how to show data from php arrays to a html table.
- You will learn how to create tables and form
- You will learn how to show steem account stats and data in any php based Website.

### Requrements

- Web Hosting
- Text Editor
- knowledge on php,  JSON & html

### Difficulty

- Easy

<hr>

![PicsArt_12-06-10.30.11.png](https://cdn.steemitimages.com/DQmQzSmTCzF1WzQeMJEQyrQfkFUhS4aJ5nb4TChGPhc1Whd/PicsArt_12-06-10.30.11.png)

<hr>


### Tutorial

Hi everyone,

Welcome to my new tutorial.  I am going to share a tutorial about How to show data / stats of any steemit account  by using Php. I choose php instead of nodejs/python because  php is easier language and there are many php developer.


The tutorial has 4 steps;

1) Connect With steemjs Api & Get Data in JSON
2) Decode JSON to Php Arrays and Strings;
3) Keep them in variables;
4) Show data from the variables;

First create a php file in your hosting and open it with text editor.

##### Step -1 : Connect With SteemJS Api

Today we create only Steemit User Account info stats. 

Steemjs Account info api is `` https://api.steemjs.com/get_accounts?names[]=usernames ``

Here "username" should change with the steemit account name( which account's stats we want to show.).

We want to input username from a Form Post method. So we will use a variable exchange with "username".
 So write the code;

```

<?php 
 
if($_POST)
{
$username = $_POST["user"];
$data = file_get_contents('https://api.steemjs.com/get_accounts?names[]='. $username.'');
}

?>

```
We will get Output in JSON and store it to $data.



##### Step-2: Decode JSON to PHP arrays and strings

In step-1 We get data in JSON format. We can only use these data in php website if we convert it to php strings and arrays.

So insert this line before "}": 

```$info = json_decode($data,true);```

This line will decode JSON to Php.

##### Step-3 : Keep Strings in Variable;

After decode json to Php strings we get Array like, "id", "username", "account_balance", "can_vote".............  etc. Now we store this strings value in different variables like this;

`` $variable = $info[0][string] ``

So Write this code inside the ``<?php`` ``?>`` 

```
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

```
I use some data. If you want to display more data in your site use all strings from The JSON.

Step-4 : Show Data from Variables

If you want to display data to your website,  just use this method;

`` <?php echo $variable; ?> ``

For example ; 

If you want to show data of account name and balance use this code;
```
<p> Account name : <?php echo $name; ?>  </p>
<p> Account Balance : <?php echo $balance; ?> </p>
```

#### GET username from html FORM 

Create a html form using "post" method  with a input box use atribute "name" value = "user" 
Write this code before the php code;

```

<form action="" method="post">
      <input name="user" type="text">  
      <button name="submit">Submit</button>
 </form>

```
<hr>

![IMG_20181208_132245_972.JPG](https://cdn.steemitimages.com/DQmVvK85mdYmr9SJ1ERMzV6PWZfZ4E9BT2sNrfn8aNq312Z/IMG_20181208_132245_972.JPG)

<hr>


#### Show account's stats data in Table;

Write this code After the Php tag. I already described how to show data. Now we use this method inside HTML Table;

```
<h2>User Information</h2>
<table border="1px" style="border-color:white;background-color:grey;">
<tr><td><b> Username </b> </td> <td> <?php echo $name; ?></td></tr>
<tr><td><b> Id </b> </td> <td> <?php echo $id; ?></td></tr>
<tr><td><b>Withness Proxy </b> </td> <td> <?php echo $proxy; ?></td></tr>
<tr><td><b>Vote Power </b> </td> <td> <?php echo $vote_power; ?></td></tr>
<tr><td><b>Total Post </b> </td> <td> <?php echo $post_count; ?></td></tr>
<tr><td><b>Total Vote </b> </td> <td> <?php echo $lifetime_vote_count; ?></td></tr>
<tr><td><b>Total Comment </b> </td> <td> <?php echo $comment_count; ?></td></tr>
<tr><td><b>Recovery account </b> </td> <td> <?php echo $recovery_account; ?></td></tr>
<tr><td><b>Last account recovery </b> </td> <td> <?php echo $last_account_recovery; ?></td></tr>
<tr><td><b>can vote </b> </td> <td> <?php echo $can_vote; ?></td></tr>
<tr><td><b>Account Created</b> </td> <td> <?php echo $created; ?></td></tr>
<tr><td><b>pending_claimed_accounts </b> </td> <td> <?php echo $pending_claimed_accounts; ?></td></tr>
</table>

<h2> Financial Information </h2>
<table border="1px" style="border-color:white;background-color:grey;">
<tr><td><b>balance(STEEM)</b> </td> <td> <?php echo $balance; ?></td></tr>
<tr><td><b>Balance (SBD)</b> </td> <td> <?php echo $sbd_balance; ?></td></tr>
<tr><td><b>savings balance(STEEM) </b> </td> <td> <?php echo $savings_balance; ?></td></tr>
<tr><td><b>Savings Balance (SBD) </b> </td> <td> <?php echo $savings_sbd_balance; ?></td></tr>
</table>


<h2>All Data in Json</h2>

<table style="border-color:white;background-color:grey;">
<tr>
<td>
<?php echo $data; ?>
</td> </tr>
</table>

```

![IMG_20181208_132310_936.JPG](https://cdn.steemitimages.com/DQmSiAKoc5mLQaHE6ZjuH719BHy5tYzZ2xYVDAojoqTq5sq/IMG_20181208_132310_936.JPG)

![IMG_20181208_132331_880.JPG](https://cdn.steemitimages.com/DQmRpnw52jbq7yRP1jw1jzrxBA4iuPCpxkphNjKZJThMPmx/IMG_20181208_132331_880.JPG)

Now save this file and browse it. 

After input Username in form The output will be;

![IMG_20181208_132343_285.JPG](https://cdn.steemitimages.com/DQmfHHgrqPtcbn1B33quBxJLjgqU4J6o3ic32AX3N9HbKAi/IMG_20181208_132343_285.JPG)

![IMG_20181208_132353_895.JPG](https://cdn.steemitimages.com/DQmeh6DcSwdWFYX7nJoBhuRGPG9htysyqyekJfeKhhWzq5w/IMG_20181208_132353_895.JPG)

I have created a site .  Check it here  :  http://steemtools.html-5.me/stats.php

### Prove of Works
https://github.com/nawab69/steemtools/blob/master/steemstats/index.php
