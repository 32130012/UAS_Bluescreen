<?php
	include("header_admin.php");
?>

	<?php
		//tampilkan data dari tabel buku
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
		</table>
</b></p>

</div>
<?php
	include("footer_admin.php");
?>