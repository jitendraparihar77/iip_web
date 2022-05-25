<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About-US</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	<?php

	          session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }
             
             include('connection.php');
             
            

            $about_Description=$_POST['Description'];

            if ($about_Description!=""){
            	$ins="INSERT INTO about SET about_Description='$about_Description'";
            	mysqli_query($con,$ins);
            }

            include('menu.php');

       ?>

<div class="dashboard">
	<h1>About-Us:</h1>
	<div class="about-text">
		<form method="post">
		<h3>Description:</h3>
		<textarea name="Description"></textarea><br>
		<input type="submit" value="update" style="background-color:lightblue; width: 70px;">
	</form>
	</div>
</div>

</body>
</html>