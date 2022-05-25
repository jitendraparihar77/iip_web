
<?php
error_reporting(0);

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="iip-web";

	$con=mysqli_connect($hostname,$username,$password,$dbname) or die("connection or db error");

?>