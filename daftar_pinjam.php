<?php
include("koneksi.php");
$sql= "SELECT tr_pinjam_hdr.id_buku, buku.judul 
FROM tr_pinjam_hdr INNER JOIN buku 
ON tr_pinjam_hdr.id_buku=buku.id_buku";
$hasil = mysqli_query($koneksi,$sql);
header('Location:profile.php');

while($daftar=mysqli_fetch_assoc($hasil)){
	echo $daftar['judul'];
	
}

?>

