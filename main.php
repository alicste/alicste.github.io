<?php
include_once("connect.php");
if(isset($_POST['submit']))
	{
require "variable.php";
require "imageuplode.php";
require "sql.php";
if ($conn->query($insert)){
	header("location:index.php");
	exit;
}
else{
echo "Error: ". $insert ."
". $conn->error;
}
$conn->close();
}
?>