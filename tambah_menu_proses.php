<?php
	include("koneksi.php");
	$konten = $_POST['menu'];
	$isi = $_POST['isi'];
	$sql="INSERT INTO menu (konten, isi) VALUES ('$konten', '$isi')";//masukan data ke menu yang ingin dibuat
	mysqli_query($koneksi,$sql);
	header('Location:edit_menu.php');
?>
