<!DOCTYPE php PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xphp1/DTD/xphp1-transitional.dtd">
<php xmlns="http://www.w3.org/1999/xphp">
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<title>IIP Academy</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="maindiv">
   <!--  <div class="header">
    	<div class="logo"><a href="index.php"><img src="images/logo.png" width="210" height="160" /></a></div>
        <div class="sitename">Looking for the Best Place for Programming</div>
        <div class="headercontact">
        	<div class="websitename">www.iipacademy.com</div>
            <div class="mailid">Info@iipacademy.com</div>
            <div class="poneno">+91-9269698122</div>
        </div>
    </div>
    <div class="menubardiv">
    	<div class="menuitem"> <a href="index.php">Home</a></div>
        <div class="menuitemactive"> <a href="aboutus.php">About Us </a></div>
        <div class="menuitem"> <a href="courses.php">Courses</a></div>
        <div class="menuitem"> <a href="gallery.php">Gallery </a></div>
        <div class="menuitem"> <a href="enquiry.php">Enquiry </a></div>
        <div class="menuitem"> <a href="contactus.php">Contact Us </a></div>
    </div> -->

    <?php 

    include('header.php');



    $nid=$_GET['nid'];
    $sel1="SELECT * FROM news where news_id='$nid'";
    $exe1=mysqli_query($con,$sel1);
    $fetchnewsdata=mysqli_fetch_array($exe1);


     ?>
     
    <div class="maincontent">
    	<div class="leftdiv">
        	<div class="leftmenuitem"><a href="index.php">Home</a></div>
            <div class="leftmenuitem"><a href="aboutus.php">About Us</a></div>
            <div class="leftmenuitem"><a href="courses.php">Courses</a></div>
            <div class="leftmenuitem"><a href="gallery.php">Gallery</a></div>
            <div class="leftmenuitem"><a href="enquiry.php">Enquiry</a></div>
            <div class="leftmenuitem"><a href="contactus.php">Contact Us </a></div>
        </div>
        <div class="rightdiv" style="background:#FFF; padding:0px 20px;">
           	<h1><?php echo $fetchnewsdata['news_Title'] ?></h1>
        	<div class="mainwebsitecontent">
				<?php echo $fetchnewsdata['news_Description'] ?>
            </div>
            
        </div>
    </div>
    <div style="clear:both; height:20px"></div>
    <div class="footer_left"></div>
    <div class="footer_middle">
    	<div class="footerinner">
        	<div class="footermenu"><a href="index.php">Home</a></div>
            <div class="footermenu"><a href="aboutus.php">About Us</a></div>
            <div class="footermenu"><a href="courses.php">Courses</a></div>
            <div class="footermenu"><a href="gallery.php">Gallery</a></div>
            <div class="footermenu"><a href="enquiry.php">Enquiry</a></div>
            <div class="footermenu" style="border:none;"><a href="contactus.php">Contact Us</a></div>
        </div>
    </div>
	<div class="footer_right"></div>
    <div style="clear:both; height:20px"></div>
</div>
</body>
</php>
