<?php
	include("header.php");
	SESSION_START();
?>

<br />

	<div id="sliderFrame">
    <div id="slider">
        <img src="gambar/buku1.jpg" />
        <img src="gambar/buku2.jpg" />
		<img src="gambar/buku3.jpg" />
		
    </div>
	</div>
	<?php
		$sql = "SELECT * FROM buku";
		$hasil = mysqli_query($koneksi,$sql);
		$pic = mysqli_fetch_array($hasil); 
		?>
		
<h2><font color="white">&nbsp &nbsp BlueScreen Gallery</h2>
<table border="0" width="965" style="margin-left:400px;">
	<?php	
		while ($pic = mysqli_fetch_row($hasil)){
	?>
		<tr>
			<td style="padding:10px;"> 
				<div class="zoom">
				
				<table>
				
					<tr>
					<td><img src=" <?php echo $pic[8]; ?>" title=" <?php echo $pic[1]; ?> " style="width: 200px; height: 300px;" /></td>
					</tr>
				</table>	
				</div>
			</td>
		</tr>
	<?php } ?>
<table>
<?php
	include("footer.php");
?>