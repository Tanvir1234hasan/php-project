<?php

session_start();
require_once ("config.php");

if (!isset($_SESSION['u_n'])) {
       header("Location: log_in.php");
}

else {
  $name=$_SESSION['u_n'];
}

$query="select * from info where name='$name'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="update.php" method="post">
       <input type="text" name="name" value="<?php echo "$row[name]"?>">
       <br>
            <input type="email" name="email" value="<?php echo "$row[email]"?>">
       <br>
       <input type="submit" name="" value="update">
     </form>



   </body>
 </html>
