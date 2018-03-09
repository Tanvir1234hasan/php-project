<?php

session_start();
require_once("config.php");

if(!isset($_SESSION['un']))
{
   header("Location:login.php");
}
else {
  $name=$_SESSION['un'];
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Home</title>
   </head>
   <body>
     <b>Welcome <?php  echo "$name"; ?> </b>
     <br>
     <br>
     <br>
     <br>
     <a href="logout.php">LogOut</a>
     <a href="profile.php">going_profile</a>
   </body>
 </html>
