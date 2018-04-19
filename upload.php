<?php
require 'app/start.php'
if(isset($_FILES['file'])){
  $file = $_FILES['file'];

  $name = $file['name'];
  $tmp_name = $file['tmp_name'];

  $extension = explode('.', $name);
  var_dump($extension);
}

 ?>

 <!DOCTYPE html>
 <html leng = "en">
 <head>
   <meta charset="utf-8">
   <title>Upload</title>
 </head>
 <body>
   <form action="" method="post" enctype="multipart/form-data">
     <input type="file" name="file">
     <input type="submit" name="" value="Upload">
   </form>
 </body>
 </html>
