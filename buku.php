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
	//	if(isset($_GET('id_buku'))){
	//		$id_buku=$_GET['id_buku'];
	//	}
		$sql="SELECT * FROM buku where id_buku='".$_GET['id_buku']."'";
		$hasil=mysqli_query($koneksi,$sql);
		$book=mysqli_fetch_row($hasil);
		?>	<div class="zoom">
	<img src=" <?php echo $book[8]; ?> ">
</div>
<div class="isi">
<p><b>
	<br />
		<table cellpadding="5" cellspacing="3">
			<tr>
				<td valign="top"> Sinopsis </td>
				<td valign="top"> : </td>
				<td valign="top"> <p><?php echo $book[7]; ?></p> </td>
			</tr>
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
				<td colspan="2">
					<form method="POST" action="pinjam.php">
						<input type="submit" name="pinjam" value="  PINJAM  ">
					</form>  
				</td>
				<td>
					<form method="POST" action="kembali.php">
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