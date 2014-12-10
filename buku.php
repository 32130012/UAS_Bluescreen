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
				<td colspan="2">
					<form method="POST" action="pinjam.php?id_buku=<?php echo $book[0];?>">
						<input type="submit" name="tambah" value="  PINJAM  ">
					</form>  
				</td>
				<td>
					<form method="POST" action="kembali.php?id_buku=<?php echo $book[0];?>">
						<input type="submit" name="kembali" value="  KEMBALI  ">
					</form> 
				</td>
			</tr>
		</table>
</b></p>

</div>
<?php
	include("footer.php");
?>