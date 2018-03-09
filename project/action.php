<?php
session_start();
require_once("config.php");

if(isset($_POST['name']) || isset($_POST['password']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $password=sha1($password);

    $query="SELECT name,password from info where name='$name' and password='$password'";
    $send=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($send);

    if($name==$row['name'] && $password==$row['password'])
    {
          $_SESSION['un']=$row['name'];
          $_SESSION['ps']=$row['password'];

          header("Location:home.php");

    }
    else {
      echo "not logged in";
    }

}




 ?>
