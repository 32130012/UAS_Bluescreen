<?php //filename: index.php
include("koneksi.php");
		
$sql="SELECT * FROM DB_NAME";
$hasil=mysqli_query($koneksi, $sql);
?>
<html>
<head>
	<title>BlueScreen Library</title>
	<link href="index.css" media="all" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="js-image-slider.js"></script>
</head>
<body>
	<div id="bungkus">
	<img src="gambar/banner.jpg"></img>
	<marquee><h2 style="margin-top: -6px;"><font color="white"> Welcome to BlueScreen Library </font></h2></marquee> 
	<hr style="color: #4B7B9F;">
	
	<!--menu bar -->
	<div id='cat-nav'>
		<ul class='fl' id='secnav'>
			<li><a href='check_login.php'>Home</a></li>
			<li><a href='profile.php'>Profile</a></li>
			<li><a href='books.php'>Books</a></li>
			<li><a href='gallery.php'>Gallery</a></li>
			<li><a href='services.php'>Services</a></li>
			<li><a href='about.php'>About Us</a></li>
			<li><a href='#'>More+</a>
			<ul id='sub-custom-nav'>
				<li><a href='index_admin.php'>Login Admin</a></li>
			</ul>
			</li>
		</ul>
		
	<form method="get" action="index.php"> 
		<input type="text" name="zoom_query" style="width:150px; border:0px solid; height:20px; padding:0px 3px; position:relative; float: right; margin-top: 10px;" placeholder="book search"> 
		<img src="gambar/searchbutton.gif" style="margin-top:10px; float: right;">
	</form>
	
	</div>	