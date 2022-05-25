<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> -->
</head>
<body style="background-color: whitesmoke;">
	<!-- <nav>
		<ul>
			<li><a href="">Dashboard</a></li>
			<li><a href="">Change Password</a></li>
			<li><a href="">Log-Out</a></li>
			<li><a href="">Go To Website</a></li>
		</ul>
	</nav>

	<div class="menu-bar">
		<ul>
			<li><a href="">PAGES</a><i class="fas fa-angle-down"></i>
				<div class="sub-menu">
					<ul>
					<li><a href="">About Us</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
				</div>
			</li>

			<li><a href="">COURSE</a><i class="fas fa-angle-down"></i>
				<div class="sub-menu">
					<ul>
					<li><a href="">ADD</a></li>
					<li><a href="">VIEW</a></li>
				</ul>
				</div>
			</li>

			<li><a href="">GALLERY</a><i class="fas fa-angle-down"></i>
				<div class="sub-menu">
					<ul>
					<li><a href="">Add Image</a></li>
					</ul>
				</div>
			</li>

			<li><a href="">COUNTRY</a><i class="fas fa-angle-down"></i>
                 <div class="sub-menu">
					 <ul>
					<li><a href="">Add Country</a></li>
				   </ul>
				</div>
			</li>

			<li><a href="">NEWS</a><i class="fas fa-angle-down"></i>
				<div class="sub-menu">
					<ul>
					<li><a href="">Add News</a></li>
					</ul>
				</div>
			</li>

			<li><a href="">STATE</a><i class="fas fa-angle-down"></i>
				<div class="sub-menu">
					<ul>
					<li><a href="">Add State</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
 -->

 
  <?php
              session_start();
             if($_SESSION['adminid']==""){
             	header("location:index.php");
             }

            include('menu.php');



       ?>
	

<div class="dashboard">
	<h1>Welcome to IIP Dashobaurd</h1>

	<div class="dashboard-item">
		<div class="d-item"><a href="">Registered Users:</a></div>
		<div class="d-item"><a href="">Total Enquries:</a></div>
		<div class="d-item"><a href="">Total courses:</a></div>
		<div class="d-item"><a href="">Total Active News:</a></div>
	</div>
</div>



	
</body>
</html>