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
	<img src="gambar/buku/snow.png">
</div>
<div class="isi">
<p><b>
	Synopsis : <br />
	Aku tidak banyak berbicang dengan teman-teman sekelas, meskipun kemungkinan aku tidak akan bertemu mereka lagi. Termasuk kamu, Kaori ya, ini hari perpisahan kelas kita Kulihat kamu sibuk berpelukan dengan Nao, Manoko, dan reiko. Kita semua memang harus berpisah, bukan?

Sebenarnya, Kaori, ada satu keinginanku yang tidak mungkin terpenuhi, yakni memberikan kancing kedua seragamku padamu. Aku iri melihat siswa-siswa yang lain memberikan kancing milik mereka kepada gadis yang disukai. Tapi aku tak bisa. Aku takut kamu tolak, Kaori. Aku hanya mencoba menegakkan tubuhku. Meski aku tahu cintaku bertepuk sebelah tangan, tetapi masa depanku masih panjang. Aku harus belajar mati-matian untuk masuk Todai. Ujian masuk Todai tentunya sangat berat.

"Sayonara, Kaori, Daisuki da!" ujarku. Semoga angin yang berembus sudi menyampaikan pesan ini kepadamu. Semoga kamu tidak membenciku.

Haru, Gemetar, membuat hati bergidik sedemikian sendunya. Sebuah kisah romance yang begitu lugas menuturkan tentang kesendirian dan kesepian, meski di dalam hati sungguh sesak oleh jubelan asa dan cinta.
	<br />
	<?php
		$sql = "SELECT * FROM buku WHERE judul = 'Snow In The Heart'";
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