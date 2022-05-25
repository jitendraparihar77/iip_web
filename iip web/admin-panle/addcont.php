<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add-country</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	<?php

	            session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }
             
             include('connection.php');

             $country_name=$_POST['Name'];

             if($country_name!="" ){
		     $ins="INSERT INTO country SET country_name='$country_name' ";

		mysqli_query($con,$ins);
	}
             
            include('menu.php');

       ?>

<div class="dashboard">
	<h1>ADD Country:</h1>
	<div class="add-text">
		<form method="post">
	    <h3>Name:</h3>
		<input type="text" name="Name"><br>
		<input type="submit" value="ADD" style="background-color:lightblue; width: 70px;">
	</form>
	</div>

	</body>
</html>