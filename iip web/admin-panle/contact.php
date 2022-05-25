<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>contact-us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	<?php

	 session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }
             
             include('connection.php');

             $contact_Phone=$_POST['Phone'];
             $contact_Email=$_POST['Email'];
             $contact_Address=$_POST['Address'];
             $contact_Facebook=$_POST['Facebook'];
             $contact_Mobile=$_POST['Mobile'];
             $contact_Website=$_POST['Website'];
             $contact_Map=$_POST['map'];
             $contact_Instagram=$_POST['Instagram'];
                
                 
                  
             if ($contact_Phone!="" && $contact_Email!="" && $contact_Address!="" && $contact_Facebook!="" && $contact_Mobile!="" && $contact_Website!="" && $contact_Map!="" && $contact_Instagram!="") {
                    echo	$ins=" INSERT INTO contact SET contact_Phone='$contact_Phone',contact_Email='$contact_Email',contact_Address='$contact_Address',contact_Facebook='$contact_Facebook',contact_Mobile='$contact_Mobile', contact_Website='$contact_Website',contact_Map='$contact_Map',contact_Instagram='$contact_Instagram'";

                    	mysqli_query($con,$ins);


                    }


            include('menu.php');

       ?>

<div class="dashboard">
	<h1>Contact Us :</h1>

	<div class="contact-text">
		<form method="post">
		<div class="contact-text1">

			<label id="Phone">Phone :</label>
		<input type="number" name="Phone"><br>

			<label id="Email">Email :</label>
			<input type="text" name="Email"><br>
            
            <br>
            <label id="Address">Address :</label><br>
		    <textarea name="Address"></textarea><br>

		     <label id="Facebook">Facebook :</label>
			<input type="text" name="Facebook"><br> 
		
	   

		
		
		</div>
		<div class="contact-text2">

			 <label id="Mobile">Mobile :</label>
		<input type="number" name="Mobile"><br>

			<label id="Website">Website :</label>
			<input type="text" name="Website"><br>
            
            <br>
            <label id="Map Html">Map Html :</label><br>
		    <textarea name="map"></textarea><br>

		     <label id="Instagram">Instagram :</label>
			<input type="text" name="Instagram"><br>
			
		</div>
		<div class="clean"></div>

		<input type="submit" value="update" style="background-color:lightblue; width: 70px;">
		</form>
	</div>

</div>
</body>
</html>