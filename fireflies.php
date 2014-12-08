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
	
<div class="zoom">
	<img src="gambar/buku/fireflies.png">
</div>
<div class="isi">
<p><b>
	Synopsis : <br />
	"Aku ingin minta maaf.
karena telah membuatmu khawakir. 
Kamu harus percaya kalau aku telah berusaha 
melakukan apa pun untuk bersamamu, 
tapi aku tidak bisa.
Karena itu berjanjilah, kamu tetap akan menjadi
seperti yang dulu aku kenal.

Tersenyum dan tertawa senantiasa..,
sebab aku tidak pernah meninggalkanmu.
Dulu, sekarang, dan kapan pun juga,
kuminka kamu tidak menyesali
hari-hari yang kita lewati bersama.
Dan inilah gang terakhir kalinya kuucapkan padamu..
Aku mencintaimu dengan sepenuh hati."
	<br />
	<?php
		$sql = "SELECT * FROM buku WHERE judul = 'Fireflies'";
		$hasil = mysqli_query($koneksi,$sql);
		$book = mysqli_fetch_array($hasil); 
		if($book[6]=='1'){
			$genre="Novel";
		}
		else {
			$genre="Komik";
		}
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
		<input type="button" name="kembali" value=" KEMBALIKAN ">
	</form>
</b></p>
</div>

</div>
<?php
	include("footer.php");
?>