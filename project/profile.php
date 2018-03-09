<?php
session_start();
require_once ("config.php");

if (!isset($_SESSION['u_n'])) {
       header("Location: log_in.php");
}

else {
  $name=$_SESSION['un'];
}


$query="select * from info where name='$name'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);

echo $row['name'];
echo $row['email'];
echo $row['photo'];


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <img src="<?php echo $row['photo']; ?>" style="width:500px;height:600px;" >

    <a href="edit.php">Edit</a>
 </html>
