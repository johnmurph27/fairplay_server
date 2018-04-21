<?php
$uploads_dir = '/files';
  if(isset($_FILES['file'])){
    $key = $_FILES["file"]["error"];
    print_r($key);
    echo "<br></br>";
    if ($key == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["file"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["file"]["name"]);
	print_r($name);
	echo "<br></br>";
        print(move_uploaded_file($tmp_name, "$uploads_dir/$name"));
    
      }
  }
  
?>
 <!DOCTYPE html>
 <html leng = "en">
 <head>
   <meta charset="utf-8">
   <title>Upload</title>
 </head>
 <body>
   <form action="test.php" method="post" enctype="multipart/form-data">
     <input type="file" name="file">
     <input type="submit" name="" value="Upload">
   </form>
 </body>
 </html>
