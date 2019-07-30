<?php 
$temp = $_FILES['photo']['tmp_name'];
$ext = pathinfo($photo, PATHINFO_EXTENSION);
$folder = "images/".$roll.".".$ext;
move_uploaded_file($temp,$folder);
?>