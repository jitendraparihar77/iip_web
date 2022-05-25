<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view-conutry</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: whitesmoke;">
	<?php

	 session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }
             
             include('connection.php');
            include('menu.php');

             $id=$_GET['nid'];
            if($id!=""){
            	$del="DELETE FROM country where country_id ='$id' ";
            	mysqli_query($con,$del);
            }

       ?>

     <div class="view-country">

     	<h2>View Country:</h2>
     </div>

     <div class="view-text">
         <label for="Name">Search By Country Name:</label>
     	<input type="search" name="Name">

		<table border="1" width="700px">
			<tr>
				<td><input type="submit" value="delete" name=""></td>
				<td>country_id</td>
				<td>country_name</td>
				<td>edit</td>
				<td>delete</td>
           </tr>
           <?php

              $sel="SELECT * from country ";
              $exe=mysqli_query($con,$sel);
              while($fetch=mysqli_fetch_array($exe)){
              
              	?>
              	<tr>
              	<td><input type="checkbox" name=""></td>
				<td><?php echo $fetch['country_id']?></td>
				<td><?php echo $fetch['country_name']?></td>
				<td>edit</td>
				<td><a href="viewcontury.php?nid=<?php echo $fetch['country_id']?>">delete</a></td>
              		
              	</tr>
              	
             <?php }

           ?>

           
	  </table>

	  <button class="btn">First</button>
	  <button class="btn">Prev</button>
	  <button class="btn">Next</button>
	  <button class="btn">Last</button>
		
	
	</div>
	

	</body>
</html>