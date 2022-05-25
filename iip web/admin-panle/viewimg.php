<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View-Image</title>
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
            	$del="DELETE FROM  addimg where addimg_id ='$id' ";
            	mysqli_query($con,$del);
            }

       ?>

     <div class="view-country">

     	<h2>View Image:</h2>
     </div>

     <div class="view-text">
         
     	

		<table border="1" width="900px">
			<tr>
				<td><input type="submit" value="delete" name=""></td>
				<td>addimg_id</td>
				<td>addimg_title</td>
				<td>addimg_file</td>
				<td>edit</td>
				<td>delete</td>
				<td>status</td>
           </tr>
           <?php

              $sel="SELECT * from  addimg ";
              $exe=mysqli_query($con,$sel);
              while($fetch=mysqli_fetch_array($exe)){
              
              	?>
              	<tr>
              	<td><input type="checkbox" name=""></td>
				<td><?php echo $fetch['addimg_id']?></td>
				<td><?php echo $fetch['addimg_title']?></td>
				<td><?php echo $fetch['addimg_file']?></td>
				<td>edit</td>
				<td><a href="viewimg.php?nid=<?php echo $fetch['addimg_id']?>">delete</a></td>
				<td><?php echo $fetch['addimg_status']?></td>
              		
              	</tr>
              	
             <?php }

           ?>
       </table>

	 
		
	
	</div>
	

	</body>
</html>