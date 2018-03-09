<?php

session_start();
require_once ("config.php");

if (!isset($_SESSION['u_n'])) {
       header("Location: log_in.php");
}

else {
  $name=$_SESSION['u_n'];
}

$update_name=$_POST['name'];
$update_email=$_POST['email'];

$query="UPDATE info SET name='$update_name', email='$update_email' WHERE name='$name' ";
$send=mysqli_query($connection,$query);

if ($send) {
  $_SESSION['u_n']=$update_name;
  echo "updated";
}
else {
  echo "not update";
}



?>
