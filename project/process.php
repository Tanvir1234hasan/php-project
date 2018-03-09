<?php

require_once("config.php");

if(isset($_POST['name']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=sha1($_POST['password']);
   if($_FILES['img']['name'])
   {
   $file=$_FILES['img']['name']; ////upload korar jonno photo code start
   $path="images/".$file;
   $tmp=$_FILES['img']['tmp_name'];
   $check=move_uploaded_file($tmp,$path);///upload korar jonno photo code end
   if($check)
   {
      echo "Cheked";
   }
  }
  else {
    echo "upload is impossible";
  }

   $query="INSERT INTO info VALUES('','$name','$email','$password','$path')";
   $send=mysqli_query($connection,$query);




   if($send)
   {
      echo "store"; //header("Location:login.php");
   }
   else {
    echo "not stored"; //  header("Location:registration.php?value=fail");
   }
}
 ?>
