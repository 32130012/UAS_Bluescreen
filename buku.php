<?php
	include("header.php");
?>
<div class="konten">
	<div id="sliderFrame">
    <div id="slider">
        <img src="gambar/buku1.jpg" />
        <img src="gambar/buku2.jpg" />
		<img src="gambar/buku3.jpg" />
		
    </div>
	</div>
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
				
				<?php
				/*$user = $_SESSION['nama'];
				$query = "SELECT id_user, id_buku, COUNT(id_buku) AS n FROM tr_pinjam_hdr group by id_user WHERE id_user = '$user'";
				$hsl = mysqli_query($koneksi,$query);
				$ttl = mysqli_fetch_assoc($hsl);
				$jml = $ttl['n'];	
				if($jml>0){
				
				}
				else{ */
				?>
				
				<td colspan="2">
					<form method="POST" action="pinjam.php?id_buku=<?php echo $book[0];?>">
						<input type="submit" name="tambah" value="  PINJAM  " <?php if($book[5]==0){ ?> disabled="false" <?php } ?> >
					</form>  
				</td>
				<?php  
				if($_SESSION['status']=="login"){
				$user = $_SESSION['nama']; }
				$squery = "SELECT * FROM user WHERE nama = '".$user."'";
				$hasils = mysqli_query($koneksi,$squery);
				$username = mysqli_fetch_array($hasils);
				$id=$username[0];
				$squeri = "SELECT * FROM tr_pinjam_hdr WHERE id_user='$id'";
				$hsil = mysqli_query($koneksi,$squeri);
				$i=0;
				while($cek = mysqli_fetch_row($hsil)){
					$ad[$i]=$cek[4];
					$i++;
				}
					if(in_array($book[0], $ad)){ 
				?>
				<td>
					<form method="POST" action="kembali.php?id_buku=<?php echo $book[0];?>">
						<input type="submit" name="kembali" value="  KEMBALI  " >
					</form> 
				</td> <?php } ?>
			</tr>
		</table>
</b></p>

</div>
<?php
	include("footer.php");
?>