<?php
session_start();
unset($_SESSION['un']);
if(!isset($_SESSION['un']))
{
  header("Location:login.php");
}
 ?>
