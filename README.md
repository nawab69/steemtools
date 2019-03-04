<div align="center">
  
![](https://img.shields.io/github/release/nawab69/steemtools.svg?style=flat-square)
![](https://img.shields.io/github/license/nawab69/steemtools.svg?style=popout-square)
![](https://img.shields.io/github/last-commit/nawab69/steemtools.svg?style=flat-square)

<br>

![steemtools logotype2](https://user-images.githubusercontent.com/44573643/53733567-91535c80-3eab-11e9-833d-9281203cf178.png)


http://steemtools.cf

</div>

## Installations 

- First Download the zip file
- Then copy it to your php server(php v7.0+ required)
- Extract the zip file.
- Now create a .htaccess file in your server and paste the below code;

```
#remove php file extension-e.g. https://example.com/file.php will become https://example.com/file
RewriteEngine on 
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteRule ^(.*)$ $1.php [NC,L]
```
- save the file
- Now open ``yoursite/index`` to open the homepage.

## Features
- Unique steemtools API
- STEEMIT Blog/post words & Characters counter
- Withdraw Route check
- Withdraw Route Change
- Withdraw Route Remove

## Technology
- PHP 7.0 
- HTML 5
- Bootstrap
- JSON
- JavaScript
- SteemConnect
- SteemJS

## Contribute

As it is an open source project,  anyone can contribute this project. 
Simply upload your file / fork,  then inbox me. You can also contribute in our development process by utopian-io . 

## Roadmap

- Create many kind of steemit tools.
- Frontend Design.
- Create steemtools API Library.
- Make steemit easier.
- Release some php tools & plugin of steemit.
