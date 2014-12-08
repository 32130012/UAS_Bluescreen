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
	<img src="gambar/buku/12menit.png">
</div>
<div class="isi">
<p><b>
	Synopsis : <br />
	Elaine, sang pemain biola, yakin bahwa musik adalah segala-galanya. Namun, ayahnya menentang, menganggapnya sia-sia. 

Tara, berusaha menguasai nada-nada snare drum meski memiliki keterbatasan pendengaran. Tetapi, luka masa lalunya terus menghantui.Lahang, di tengah deritanya, berusaha memenuhi janji pada sang ayah. Namun, dilema membuatnya ragu melangkah. 

Rene bermimpi membawa mereka, tim marching band yang dilatihnya, menjadi juara.  Meskipun mereka hanya datang dari sebuah kota di pelosok negeri. Meskipun orang lain menganggap itu mustahil. 

Mereka berlatih ribuan jam hanya demi 12 menit penentuan. Mereka bertekad membuktikan pada dunia. Bahwa mimpi harus kau percayai agar terwujud. Dreaming is believing. Dan bersama-sama mereka akan menyerukan, Vincero!

	<br />
	<?php
		$sql = "SELECT * FROM buku WHERE judul = '12menit'";
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