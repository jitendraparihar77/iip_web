<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view-news</title>
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

            $allids=$_POST['del'];
            foreach ($allids as $id) {
            	$del="DELETE FROM news where news_id ='$id' ";
            	mysqli_query($con,$del);
            }
        
         $start=0;
         $limit=2;

         $next=$_GET['page']+1;
         $pre=$_GET['page']-1;

         $start=$_GET['page']*$limit;
       ?>

     <div class="view-country">

     	<h2>View News:</h2>
     </div>

     <div class="view-text">
         
     	
      <form method="post">
		<table border="1" width="900px">
			<tr>
				<td><input type="submit" value="delete" name=""></td>
				<td>news_id</td>
				<td>news_Title</td>
				<td>news_Description</td>
				<td>news_date</td>
				<td>edit</td>
				<td>delete</td>
				<td>status</td>
           </tr>
           <?php

              $sel="SELECT * from news limit $start,$limit ";
              $exe=mysqli_query($con,$sel);
              while($fetch=mysqli_fetch_array($exe)){
              
              	?>
              	<tr>
              	<td><input type="checkbox" value="<?php echo $fetch['news_id']?>" name="del[]"></td>
				<td><?php echo $fetch['news_id']?></td>
				<td><?php echo $fetch['news_Title']?></td>
				<td><?php echo $fetch['news_Description']?></td>
				<td><?php echo $fetch['news_date']?></td>
				<td><a href="addnews.php?editid=<?php echo $fetch['news_id']?>">edit</a></td>
				<td><a href="viewnews.php?nid=<?php echo $fetch['news_id']?>">delete</a></td>

				<td><?php  if($fetch['news_status']==1)
				{echo "Active";}
				else{echo "Deactive";}
			   ?></td>

              		
              	</tr>
              	
             <?php }

           ?>
       </table>
       </form>

       <a href="viewnews.php?page=0"><input type="button" value="First" name=""></a>
        <a href="viewnews.php?page=<?php echo $pre; ?>"><input type="button" value="Prev" name=""></a>

           <?php
                $selc="SELECT * FROM news";
                $exec=mysqli_query($con,$selc);
                $tot=ceil(mysqli_num_rows($exec)/$limit);

                for ($i=1; $i<=$tot; $i++) { 
                	?> 
                	<a href="viewnews.php?page=<?php echo $i-1; ?>"><input type="button" value="<?php echo $i; ?>" name=""></a>

                	<?php 
                }
           ?>

         <a href="viewnews.php?page=<?php echo $next; ?>"><input type="button" value="Next" name=""></a>
         <a href="viewnews.php?page=<?php echo $tot-1; ?>"><input type="button" value="Last" name=""></a>
		
	
	</div>
	

	</body>
</html>