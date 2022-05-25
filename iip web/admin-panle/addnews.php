<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add-News</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	 <?php
	 include('connection.php');

	  session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }

	    $editid=$_GET['editid'];

	    if ($editid=="") {
	    $news_Title=$_POST['Title'];
	    $news_Description=$_POST['Description'];
	    $news_Date=$_POST['Date'];
	    $news_status=$_POST['status'];

	    if($news_Title!="" && $news_Description!="" && $news_Date!=""){

	    	
	    	$ins="INSERT INTO news SET news_Title='$news_Title',news_Description='$news_Description',news_date='$news_Date',news_status='$news_status'";

	    	mysqli_query($con,$ins);
	    	header("location:viewnews.php");

	    }

	    }

	    else{
	    	$sel="SELECT * FROM news where news_id='$editid'";
	    	$exe=mysqli_query($con,$sel);
	    	$fetch=mysqli_fetch_array($exe);

	    	$news_Title=$_POST['Title'];
	    $news_Description=$_POST['Description'];
	    $news_Date=$_POST['Date'];
	    $news_status=$_POST['status'];

	    if($news_Title!="" && $news_Description!="" && $news_Date!=""){

	    	
	    	$ins="UPDATE news SET news_Title='$news_Title',news_Description='$news_Description',news_date='$news_Date',news_status='$news_status' where news_id='$editid' ";

	    	mysqli_query($con,$ins);
	    	header("location:viewnews.php");

	    }
	    }
	    

	 include('menu.php');

    ?>

<div class="dashboard">
	<h1>ADD News :</h1>
	<div class="news-text">
		<form method="post">
		<div class="news-text1">

			<label for="Title">Title :</label>
		<input type="text" name="Title" value="<?php echo $fetch['news_Title'] ?>"><br>

			
            <label for="Description">Description :</label><br>
		    <textarea name="Description"><?php echo $fetch['news_Description'] ?></textarea><br>

		     <label for=" Date">Expiry Date :</label>
			<input type="date" name="Date" value="<?php echo $fetch['news_date'] ?>"><br> 
            <div class="news">
			<input type="radio" value="1" name="status" <?php if($fetch['news_status']==1) { ?> checked <?php } ?>> Active
			<input type="radio" value="0" name="status" <?php if($fetch['news_status']==0) { ?> checked <?php } ?> > Deactive
			</div>

			<input type="submit" value="add" style="background-color:lightblue; width: 70px;">

		</form>
		
	   

		
		
		
	
</div>
	</body>
</html>