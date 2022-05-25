<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add-State</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	<?php

	 session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }

             include('connection.php');

               $state_name=$_POST['Name'];

             if($state_name!="" ){
		     $ins="INSERT INTO state SET state_name='$state_name' ";

		mysqli_query($con,$ins);
	}
             
            include('menu.php');

       ?>

<div class="dashboard">
	<h1>ADD State :</h1>
	<div class="state-text">
		<form method="post">
	   
	    <label for="Name">Name:</label>
		<input type="text" name="Name"><br>

		 <label for="Country">Country:</label>
		<select id="Country">
			<option value="Country">select a Country</option>
		</select><br>
		

		<input type="submit" value="ADD" style="background-color:lightblue; width: 70px;">
	</form>
	</div>

	</body>
</html>