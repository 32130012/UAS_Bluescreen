<?php
include("koneksi.php");
$user = $_SESSION['nama'];

$sql= "SELECT tr_pinjam_hdr.id_user, tr_pinjam_hdr.id_buku, buku.judul 
FROM tr_pinjam_hdr WHERE tr_pinjam_hdr.id_user = '$user' INNER JOIN buku 
ON tr_pinjam_hdr.id_buku=buku.id_buku ";
$hasil = mysqli_query($koneksi,$sql);


while($daftar=mysqli_fetch_assoc($hasil)){
	echo $daftar['judul'];
	
}

?>

