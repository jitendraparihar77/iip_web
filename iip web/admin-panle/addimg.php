<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>addimg</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	<?php

	 session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }

	// error_reporting(0);

	// $hostname="localhost";
	// $username="root";
	// $password="";
	// $dbname="iip-web";

	// $con=mysqli_connect($hostname,$username,$password,$dbname) or die("connection or db error");
	 include('connection.php');

	$addimg_title=$_POST['Name'];
	$addimg_file=$_FILES['image'];
	$addimg_status=$_POST['status'];
	$name=$addimg_file['name'];
	$tmpname=$addimg_file['tmp_name'];
	$path="../galleryupload/".$name;


	if($addimg_title!=""){

		move_uploaded_file($tmpname,$path);

	  $ins="INSERT INTO addimg SET addimg_title='$addimg_title',addimg_file='$name',addimg_status='$addimg_status'";

		mysqli_query($con,$ins);

	}
     
       include('menu.php');

    ?>

   <div class="dashboard">
	<h1>Add Gallery Image:</h1>
	<div class="img-text">
		<form method="post" enctype="multipart/form-data">
	   <label for="Name">Image Title :</label>
		<input type="text" name="Name"><br>

			<label for="Choose File">chose an image :</label>
			<input type="file" name="image"><br>

			 <div class="news">
			<input type="radio" value="1" name="status"> Active
			<input type="radio" value="0" name="status"> Deactive
			</div>
            

             

		<input type="submit" value="ADD" style="background-color:lightblue; width: 70px;">
	</form>
	</div>

	</body>
</html>