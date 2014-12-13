<?php
	include("header_admin.php");
?>
<h2>DAFTAR GAMBAR</h2>
<?php
$sql="SELECT *FROM gambar";
$hasil=mysqli_query($koneksi,$sql); ?>
<table border="0" width="965">
	<?php	
		while ($pic = mysqli_fetch_row($hasil)){
	?>
		<tr>
			<td style="padding:10px;"> 
				<div class="zoom">

				<table>
				
					<tr>
					<td><img src=" <?php echo $pic[1]; ?>" style="width: 200px; height: 300px;" /></td>
					<td><a href="delete_gambar.php?id_gambar=<?php echo $pic[0]; ?>" > DELETE PICTURE </a></td>
					</tr>
				</table>	
				</div>
			</td>
		</tr>
	<?php } ?>
<table>
<br />
<form action="tambah_gambar.php" method="POST" enctype="multipart/form-data">
	<label>+TAMBAH GAMBAR</label><input type="file" name="banner" /><br />
	<input type="submit" name="submit" value="  SUBMIT  " />
</form>
</div>
<?php	
	include("footer_admin.php");
?>