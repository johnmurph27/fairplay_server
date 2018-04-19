<?php
use Aws\S3\Exception\S3Exception;

require 'app/start.php';

if(isset($_FILES['file'])){
  $file = $_FILES['file'];

  $name = $file['name'];
  $tmp_name = $file['tmp_name'];

  $extension = explode('.', $name);
  var_dump($extension);
  $extension = strtolower(end($extension));

  $key = m5(uniqid());
  $tmp_file_name = "{$key}.{$extension}";
  $tmp_file_path = "files/{$tmp_file_name}";

  move_uploaded_file($tmp_name, $tmp_file_path);

  // try {
  //
  //   $s3->putObject([
  //     'Bucket' => $config['s3']['bucket'],
  //     'Key' => "uploads/{$tmp_name}",
  //     'Body' => fopen
  //   ])
  //
  // } catch(S3Exception $e){
  //   die("ther was an error");
  // }
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
