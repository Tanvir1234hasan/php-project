<?php

require_once("config.php");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Registration</title>
   </head>

   <body>
     <form class="" action="process.php" method="post" enctype="multipart/form-data">
     Name:<input type="text" name="name"><br>
     password:<input type="password" name="password"><br>
     Email:<input type="email" name="email"><br>
     <input type="submit" value="Submit"><br><br><br>
     Image:<input type="file" name="img" value="">
     </form>

     <?php

      if(isset($_GET['value']))
      {
         echo "Username is already existed. Please try with different one";
      }






      ?>
   </body>
 </html>
