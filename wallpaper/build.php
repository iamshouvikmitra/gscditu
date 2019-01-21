<?php
  // header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg('image.jpg');
//$jpg_image=imagecreatetruecolor(100,100);

  // Allocate A Color For The Text
 $white = imagecolorallocate($jpg_image, 255, 255, 255);


  // Set Path to Font File
  $font_path = 'font.TTF';

  // Set Text to Be Printed On Image
  if(empty($_GET['name']))
  $text = 'gscdit';
  else
  $text = $_GET['name'];

  // Print Text On Image
  $x=1760;
  imagettftext($jpg_image, 70, 0, $x, 1800, $white, $font_path, $text);
  imagettftext($jpg_image, 60, 0, 1680, 2000, $white, $font_path, 'http://gscditu.com');

  // Send Image to Browser
  imagejpeg($jpg_image,'name.jpg');

  // Clear Memory
  imagedestroy($jpg_image);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Your wallpaper is ready to download ...</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body style="background-color: #060314; color:white">
  <center>
    <h2 class="lead"><a href="./name.jpg"class="btn btn-sm btn-danger" download>Click to Download HD Image</a></h2>
    <img src="./name.jpg" style="width:100%" alt="" srcset="">
  </center>

</body>
</html>