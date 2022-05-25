 <?php
 include 'admin-panle/connection.php';
 ?>

 <div class="header">
    	<div class="logo"><a href="index.php"><img src="images/logo.png" width="210" height="160" /></a></div>
        <div class="sitename">Looking for the Best Place for Programming</div>
        <div class="headercontact">
        	<div class="websitename"><a href="http://www.iipacademy.com" target="_blank">www.iipacademy.com</a></div>
            <div class="mailid"><a href="http://www.iipacademy.com" target="_blank">Info@iipacademy.com</a></div>
            <div class="poneno">+91-9269698122</div>
        </div>
    </div>
    <div class="news-section">
        <div class="label">news</div>
        <marquee onmouseover="stop()" onmouseout="start()" >
            <?php 
                 $sel="SELECT * FROM news where news_status=1";
                 $exe=mysqli_query($con,$sel);
                 while($fetch=mysqli_fetch_array($exe)) {
            ?>
             <a href="news-info.php?nid=<?php echo $fetch['news_id'] ?>" > <?php echo $fetch['news_Title'] ?> </a> &nbsp; &nbsp; &nbsp; &nbsp;
        <?php } ?>
        </marquee>
    </div>

    <div class="menubardiv">
    	<div class="menuitemactive"> <a href="index.php">Home</a></div>
        <div class="menuitem"> <a href="aboutus.php">About Us </a></div>
        <div class="menuitem"> <a href="courses.php">Courses</a></div>
        <div class="menuitem"> <a href="gallery.php">Gallery </a></div>
        <div class="menuitem"> <a href="enquiry.php">Enquiry </a></div>
        <div class="menuitem"> <a href="contactus.php">Contact Us </a></div>
    </div>


