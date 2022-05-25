<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view-course</title>
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
            	$del="DELETE FROM  course where course_id ='$id' ";
            	mysqli_query($con,$del);
            }

       ?>

     <div class="view-country">

     	<h2>View Course:</h2>
     </div>

     <div class="view-text">
         
     	

		<table border="1" width="900px">
			<tr>
				<td><input type="submit" value="delete" name=""></td>
				<td>course_id</td>
				<td>course_Name</td>
				<td>course_Description</td>
				<td>course_Price</td>
				<td>course_Duration</td>
				<td>edit</td>
				<td>delete</td>
           </tr>
           <?php

              $sel="SELECT * from  course ";
              $exe=mysqli_query($con,$sel);
              while($fetch=mysqli_fetch_array($exe)){
              
              	?>
              	<tr>
              	<td><input type="checkbox" name=""></td>
				<td><?php echo $fetch['course_id']?></td>
				<td><?php echo $fetch['course_Name']?></td>
				<td><?php echo $fetch['course_Description']?></td>
				<td><?php echo $fetch['course_Price']?></td>
				<td><?php echo $fetch['course_Duration']?></td>
				<td>edit</td>
				<td><a href="viewcourse.php?nid=<?php echo $fetch['course_id']?>">delete</a></td>
              		
              	</tr>
              	
             <?php }

           ?>
       </table>

	 
		
	
	</div>
	

	</body>
</html>