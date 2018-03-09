<?php
session_start();

if(isset($_SESSION['u_n'])){

  header("Location: home.php");
}

 ?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="process.php" method="post">
   <input type="text" name="user_name" value="">
   <input type="password" name="user_password" value="">
   <input type="submit" name="submit" value="log in">

    </form>


    <?php

    if(isset($_GET['value'])){

echo " WRONG USERNAME OR PASSWORD";
    }
     ?>


  </body>
</html>
