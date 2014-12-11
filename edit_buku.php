<?php
include("header_admin.php");


?>
<!DOCTYPE html>

	<h2 style="margin-left:30px;"><font color="white">EDIT BUKU</font></h2>
	<?php 
		$sql="SELECT * FROM buku where id_buku='".$_GET['id_buku']."'";
		$hasil=mysqli_query($koneksi,$sql);
		$books=mysqli_fetch_row($hasil);
	?>
	
	<form method="POST" action="proses_edit_buku.php?id_buku=<?php echo $books[0]; ?>" enctype="multipart/form-data">
	<table cellpadding="10" cellspacing="10" style="margin-left: 20px;">
		<tr>
			<td>
			<label> Judul </label>
			</td>
			<td> : </td>
			<td> <?php echo $books[1]; ?></td>
		<tr>
			<td>
			<label>Pengarang </label>
			</td>
			<td> : </td>
			<td>
			<input type="text" name="pengarang" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Bahasa </label>
			</td>
			<td> : </td>
			<td>
			<input type="text" name="bahasa" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Tahun </label>
			</td>
			<td> : </td>
			<td>
			<input type="text" name="tahun" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Stok  </label>
			</td>
			<td> : </td>
			<td>
			<input type="text" name="stok" value="" /> <br />
			</td>
		<tr>
			<td>
			<label>Jenis  </label>
			</td>
			<td> : </td>
			<td>
			<input type="text" name="status" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>sinopsis  </label>
			</td>
			<td> : </td>
			<td>
			<input type="text" name="sinopsis" /></br>
			</td>
		<tr>	
			<td>
			<label>Gambar  </label>
			</td>
			<td> : </td>
			<td>
			<input type="file" name="cover" />
			</td>
		</tr></br>
		<tr>
			<td>
			</td>
			<td>
			<input type="submit" name="submit" value="  UPDATE  " />
			<input type="reset" name="clear" value="  CLEAR  " />
			</td>
		</tr>
	</table>
	</form>
</div>
<?php
include("footer_admin.php");
?>