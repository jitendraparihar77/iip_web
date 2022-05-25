<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Course</title>
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


	$course_name=$_POST['Name'];
	$course_price=$_POST['Price'];
	$course_duration=$_POST['Duration'];
	$course_description=$_POST['Description'];

	if($course_name!="" && $course_price!="" && $course_duration!="" && $course_description!=""){
		$ins="INSERT INTO course SET course_Name='$course_name',course_Price='$course_price',course_Duration='$course_duration',course_Description='$course_description'";

		mysqli_query($con,$ins);
	}


            
            include('menu.php')

       ?>

<div class="dashboard">
	<h1>COURSE:</h1>
	<div class="COURSE-text">
		<form method="post">
	   <label for="name">Name :</label>
		<input type="text" name="Name"><br>

			<label for="Price">Price :</label>
			<input type="text" name="Price"><br>

             <label for="Duration">Duration :</label>
			<input type="text" name="Duration"><br> 
            
            <br>
            <h3>Description:</h3>
		    <textarea name="Description"></textarea><br>

		<input type="submit" value="ADD" style="background-color:lightblue; wforth: 70px;">
		</form>
	</div>
</body>
</html>