<?php
	include("koneksi.php");
$sql="DELETE FROM gambar WHERE id_gambar = '".$_GET['id_gambar']."'";//hapus gambar berdasarkan input id gambar
mysqli_query($koneksi, $sql);

	
?>