<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change-Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	 <?php
      include('connection.php');
	  session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }

             if (isset($_POST['changepass'])) {
             	$adminid=$_SESSION['adminid'];
             	$oldpass=$_POST['oldpass'];
             	$newpass=$_POST['newpass'];
             	$cnpass=$_POST['cnpass'];

             	$sel="SELECT * FROM admin where admin_password='$oldpass' and admin_id='$adminid' ";
             	$exe=mysqli_query($con,$sel);
             	$tot=mysqli_num_rows($exe);
             	if ($tot==1) {
             		if ($newpass==$cnpass) {
             			$upd="UPDATE admin set admin_password='$newpass' where admin_id='$adminid'";
             			mysqli_query($con,$upd);
             			$msg="password change successfully";
             		}
             		else{
             		$error="new password and confirm password not match!..";
             	}
             }
             	else{
             		$error="invalid old password!..";
             	}

             }



	 	
	  

	    $news_Title=$_POST['Title'];
	    $news_Description=$_POST['Description'];
	    $news_Date=$_POST['Date'];
	    $news_status=$_POST['status'];

	    if($news_Title!="" && $news_Description!="" && $news_Date!=""){

	    	
	    	$ins="INSERT INTO news SET news_Title='$news_Title',news_Description='$news_Description',news_date='$news_Date',news_status='$news_status'";

	    	mysqli_query($con,$ins);

	    }
	    

	 include('menu.php');

    ?>

<div class="dashboard">
	<h1>Change-Password :</h1>
	<div class="news-text">
		<div style="color:red; "><?php echo $error; ?></div>
		<div style="color:green; "><?php echo $msg; ?></div>
		<form method="post">
		<div class="news-text1">

			<label for="Title">Old password :</label>
		<input type="password" name="oldpass"><br>

		<label for="Title">new password :</label>
		<input type="password" name="newpass"><br>

		<label for="Title">confirm password :</label>
		<input type="password" name="cnpass"><br>

			<input type="submit" value="Change-Password"
			name="changepass" style="background-color:lightblue; width: 150px;">

		</form>
		
	   

		
		
		
	
</div>
	</body>
</html>