<?php
include("koneksi.php");
$user = $_SESSION['nama'];
//inner join untuk menghubungkan id_user dengan id peminjaman buku
$sql= "SELECT tr_pinjam_hdr.id_user, tr_pinjam_hdr.id_buku, buku.judul 
FROM tr_pinjam_hdr WHERE tr_pinjam_hdr.id_user = '$user' INNER JOIN buku 
ON tr_pinjam_hdr.id_buku=buku.id_buku ";
$hasil = mysqli_query($koneksi,$sql);


while($daftar=mysqli_fetch_assoc($hasil)){
	echo $daftar['judul'];
	
}

?>

