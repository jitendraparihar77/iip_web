<?php 

error_reporting(0);
include 'connection.php';

session_start();


if (isset($_POST['login'])) {
	
	$uname=$_POST['uname'];
	$password=$_POST['password'];
    $sel="SELECT * FROM admin where admin_name='$uname' and admin_password='$password'";

	$exe=mysqli_query($con,$sel);
    $tot=mysqli_num_rows($exe);
	if($tot==1){

		    $rem=$_POST['rem'];

		    if ($rem==1) {
		    	setcookie("Username",$uname,time()+60);
		    	setcookie("password",$password,time()+60);
		    }

            $fetch=mysqli_fetch_array($exe);
		   $_SESSION['adminid']=$fetch['admin_id'];
           header("location:dashboard.php");
	}
	else{
		$errorMessage="invalid username password";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(images/6.jpg)no-repeat; background-size: cover;">
	<div class="login">
		<h1>LogIn</h1>
		<div class="login-input"><br>
			<div><?php echo $errorMessage; ?></div>
			<form method="post">
			<input type="text" placeholder="Enter email" name="uname" value="<?php echo $_COOKIE['Username']?>"><br>
			<input type="password" placeholder="Enter password" name="password" value="<?php echo $_COOKIE['password']?>"><br>
			Remember Me<input type="checkbox"  name="rem" value="1"><br>
			<input type="submit" name="login">
			</form>
		</div>
		
	</div>

</body>
</html>