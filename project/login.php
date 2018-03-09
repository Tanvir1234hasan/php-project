<?php
session_start();
if(isset($_SESSION['un']))
{
  header:("Location:home.php");
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="action.php" method="post">
    <input type="text" name="name"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
    </form>
  </body>
</html>
