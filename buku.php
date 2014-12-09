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
		if(isset($_GET('id_buku'))){
			$id_buku=$_GET['id_buku'];
		}
		$sql="SELECT * FROM buku where id_buku='$id_buku'";
		$hasil=mysqli_query($koneksi,$sql);
		while($page=mysqli_fetch_object($hasil)){
		?>	<div class="zoom">
	<img src=" <?php echo $book[8]; ?> ">
</div>
<div class="isi">
<p><b>
	<?php echo "Synopsis : " ?>
	<br />
		<?php echo $book[7];
		?> <br /> <?php
		echo "ID Buku &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp= " . $book[0];
		?> <br /> <?php
		echo "Genre &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp= " . $genre;
		?> <br /> <?php
		echo "Judul Buku &nbsp &nbsp = " . $book[1];
		?> <br /> <?php
		echo "Pengarang &nbsp &nbsp &nbsp = " . $book[2];
		?> <br /> <?php
		echo "Bahasa &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = " . $book[3];
		?> <br /> <?php
		echo "Tahun Terbit &nbsp = " . $book[4];
		?> <br /> <?php
		echo "Stok &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = " . $book[5];
		?> <br /> 
	<form method="POST" action="pinjam.php">
		<input type="submit" name="pinjam" value="  PINJAM  ">
	</form>
	<form method="POST" action="kembali.php">
		<input type="submit" name="kembali" value="  KEMBALI  ">
	</form>
</b></p>
	<?php	}
	?>

</div>
<?php
	include("footer.php");
?>