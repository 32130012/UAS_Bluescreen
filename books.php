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

Books kategori : 
<form method="POST">
<select name="kategori">
	<option value="semua"> semua buku </option>
	<option value="komik"> komik </option>
	<option value="novel"> novel </option>
</select>
<input type="submit" name="cari" value="  CARI  " />
</form>
<br />

<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if($_POST['kategori']=="") {
	$sql = "SELECT * FROM buku";
	}
else if($_POST['kategori']=="komik"){
	$sql = "SELECT * FROM buku WHERE status = '2'";
}
else if($_POST['kategori']=="novel"){
	$sql = "SELECT * FROM buku WHERE status = '1'";
}
else {
	$sql = "SELECT * FROM buku";
}
	$hasil = mysqli_query($koneksi,$sql);
	
?>
<br />
	<table width="656" border="2" cellspacing="0" cellpadding="2" style="color:white;">
		<tr>
			<td>ID Buku</td>
			<td>Judul Buku</td>
			<td>Pengarang</td>
			<td>Bahasa</td>
			<td>Tahun Terbit</td>
			<td>Jumlah Stock</td>
		</tr>
		<?php	
			while ($buku = mysqli_fetch_row($hasil)){
		?>
		<tr>
			<td><?php echo $buku[0]; ?></td>
			<td>
				<?php
				if($buku[1]=="12menit"){
				?><a href="menit.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Doraemon Petualangan"){
				?><a href="doraemon.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Fireflies"){
				?><a href="fireflies.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Inazuma Eleven"){
				?><a href="inazuma.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Dawn Aria"){
				?><a href="dawn_aria.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Jasmine (Cinta yang Menyembuhkan)"){
				?><a href="jasmine.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Kuroko's Basketball"){
				?><a href="kuroko.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Snow In The Heart"){
				?><a href="snow.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Detective Conan"){
				?><a href="conan.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Basara"){
				?><a href="basara.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Notasi"){
				?><a href="notasi.php"><?php echo $buku[1]; ?></a>
				<?php }
				else if($buku[1]=="Amore Cinta yang tak Terlupakan"){
				?><a href="amore.php"><?php echo $buku[1]; ?></a>
				<?php } ?>
			</td>
			<td><?php echo $buku[2]; ?></td>
			<td><?php echo $buku[3]; ?></td>
			<td><?php echo $buku[4]; ?></td>
			<td><?php echo $buku[5]; ?></td>
			<td>
				<form method="POST" action="pinjam.php">
					<input type="submit" name="tambah" value="  ADD  ">
				</form>
		</tr>
		<?php } ?>
		
	</table>
	</div>
<!--tampilkan data buku dari database
	tambahin kolom status di tabel buku, boolean jika 0 = komik
-->	<br />


<?php
	include("footer.php");
?>