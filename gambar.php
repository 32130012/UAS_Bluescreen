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
					<td><form action="edit_gambar.php?id_gambar=<?php echo $pic[1]; ?>">
						<input type="submit" name="delete" value="DELETE PICTURE" /></br>
						</form>
						<form action="delete_gambar.php?id_gambar=<?php echo $pic[1]; ?>" enctype="multipart/form-data">
						<label>CHANGE PICTURE</label></br>
						<input type="file" name="change" value="CHANGE PICTURE" /></br>
						<input type="submit" value="  SUBMIT  " />
						</form>
					</td>
					</tr>
				</table>	
				</div>
			</td>
		</tr>
	<?php } ?>
<table>
<br />
<form action="tambah_gambar.php" enctype="multipart/form-data">
	<label>+TAMBAH GAMBAR</label><input type="file" name="banner" /><br />
	<input type="submit" name="submit" value="  SUBMIT  " />
</form>
</div>
<?php	
	include("footer_admin.php");
?>