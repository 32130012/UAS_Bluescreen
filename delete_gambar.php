<?php
	include("$koneksi.php");
$sql="DELETE  FROM gambar WHERE id_gambar = '".$_GET['id_gambar']."'";//hapus gambar berdasarkan input id gambar
$hasil= mysqli_query($koneksi, $sql);
header('Location:gambar.php');
	
?>