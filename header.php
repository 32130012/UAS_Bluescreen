<?php //filename: index.php
include("koneksi.php");
session_start();
$sql="SELECT * FROM menu";
$hasil=mysqli_query($koneksi, $sql);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
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
		</ul>
		
	<form method="POST" action="search.php"> 
		<input type="text" name="cari" style="width:150px; border:0px solid; height:20px; padding:0px 3px; position:relative; float: right; margin-top: 10px;" placeholder="book search"> 
		<img src="gambar/searchbutton.gif" style="margin-top:10px; float: right;">
	</form>
	
	</div>	
	
	<div class="konten">
	<div id="sliderFrame">
    <div id="slider">
        <?php 
			$sql="SELECT * FROM gambar";
			$hasil=mysqli_query($koneksi,$sql);
			$gbr=mysqli_fetch_row($hasil);
			while($gbr=mysqli_fetch_row($hasil)){ ?>
			<img src=" <?php echo $gbr[1]; ?> " />
			<?php }
		?>
		
    </div>
	</div>