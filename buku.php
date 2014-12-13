<?php //filename: untuk tampilan detail buku
	include("header.php");
?>
<div class="konten">
	<?php
	
		$sql="SELECT * FROM buku where id_buku='".$_GET['id_buku']."'";
		$hasil=mysqli_query($koneksi,$sql);
		$book=mysqli_fetch_row($hasil);
		?>	
		<div class="zoom">
		<img src=" <?php echo $book[8]; ?> " style="width: 200px; height: 300px;"/>
		</div>
</div>		
<div class="isi">
<p><b>

	<br />
		<table cellpadding="10" cellspacing="7">
			<tr>
				<td valign="top"> Sinopsis </td>
				<td valign="top"> : </td>
				<td valign="top"> <p><?php echo $book[7]; ?></p> </td>
			</tr>
			<tr>
				<td> ID Buku </td>
				<td> : </td>
				<td> <?php echo $book[0]; ?> </td>
			<tr>
				<td> Judul Buku </td>
				<td> : </td>
				<td> <?php echo $book[1]; ?> </td>
			</tr>
			<tr>
				<td> Pengarang </td>
				<td> : </td>
				<td> <?php echo $book[2]; ?> </td>
			</tr>
			<tr>
				<td> Bahasa </td>
				<td> : </td>
				<td> <?php echo $book[3]; ?> </td>
			</tr>
			<tr>
				<td> Tahun Terbit </td>
				<td> : </td>
				<td> <?php echo $book[4]; ?> </td>
			</tr>
			<tr>
				<td> Jumlah Stok </td>
				<td> : </td>
				<td> <?php echo $book[5]; ?> </td>
			</tr>
			<tr>
				
				<td colspan="2">
					<form method="POST" action="pinjam.php?id_buku=<?php echo $book[0];?>">
						<input type="submit" name="tambah" value="  PINJAM  " <?php if($book[5]==0){ ?> disabled="true" <?php } ?> />
					</form>  
				</td>
				<?php  
				if($_SESSION['status']=="login"){ //jika user login
				$user = $_SESSION['nama']; }
				$squery = "SELECT * FROM user WHERE nama = '".$user."'";
				$hasils = mysqli_query($koneksi,$squery);
				$username = mysqli_fetch_array($hasils);
				$id=$username[0];
				$squeri = "SELECT tgl_kembali FROM tr_pinjam_hdr WHERE id_buku='$book[0]' GROUP BY id_user"; //mencegah agar stok tidak bertambah terus
				$hsil = mysqli_query($koneksi,$squeri);
				while($cek = mysqli_fetch_row($hsil)){	?>
				<td>
					<form method="POST" action="kembali.php?id_buku=<?php echo $book[0];?>">
						<input type="submit" name="kembali" value="  KEMBALI  " <?php if($cek[0]==""){ } else { ?> disabled="true" <?php } ?> />
					</form> 
				</td> <?php } ?>
			</tr>
		</table>
</b></p>
</div>
</div>
<?php
	include("footer.php");
?>