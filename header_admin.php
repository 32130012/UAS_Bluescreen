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
	<?php
		$sql="SELECT * FROM menu";
		$hasil=mysqli_query($koneksi,$sql);
		$menu=mysqli_fetch_row($hasil);
	?>
	<div id='cat-nav'>
		<ul class='fl' id='secnav'>
			<?php
			$sql="SELECT *FROM menu";
			$hasil=mysqli_query($koneksi,$sql);
			$menu=mysqli_fetch_row($hasil) ?>
			<li><a href='home_admin.php'><?php echo $menu[1]; ?></a></li>
			<li><a href='#'>Manage</a>
				<ul id='sub-custom-nav'>
					<li><a href='user.php'>Users</a></li>
					<li><a href='buku_admin.php'>Buku</a></li>
					<li><a href='menu.php'>Menu</a></li>
				</ul>
			</li>
		</ul>
		
	<form method="get" action="index.php"> 
		<input type="text" name="zoom_query" style="width:150px; border:0px solid; height:20px; padding:0px 3px; position:relative; float: right; margin-top: 10px;" placeholder="book search"> 
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
			<img src=" <?php echo $gbr[1]; ?> " style="width:1000px; height:200px;" />
			<?php }
		?>
		
    </div>
	</div>