<?php
use Aws\S3\Exception\S3Exception;

require 'app/start.php';

if(isset($_FILES['file'])){
  $file = $_FILES['file'];
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];

  $extension = explode('.', $name);
  $extension = strtolower(end($extension));

  $key = md5(uniqid());
  $tmp_file_name = "{$key}.{$extension}";
  $tmp_file_path = "/files/{$tmp_file_name}";
  print $tmp_file_name;
  echo "<br></br>";
  print($tmp_file_path);
  echo "<br></br>";
  if(move_uploaded_file($tmp_file_name, $tmp_file_path)){
	echo "file transfered";
  }else{
  	echo "not tranfered";
  }

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
else{
  echo "Not Set";
}
 ?>

 <!DOCTYPE html>
 <html leng = "en">
 <head>
   <meta charset="utf-8">
   <title>Upload</title>
 </head>
 <body>
   <form action="upload.php" method="post" enctype="multipart/form-data">
     <input type="file" name="file">
     <input type="submit" name="" value="Upload">
   </form>
 </body>
 </html>
