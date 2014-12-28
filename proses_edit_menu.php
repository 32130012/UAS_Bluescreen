<?php
	include("koneksi.php");
	$konten=$_POST['menu'];
	$isi=$_POST['isi'];
	$sql="UPDATE menu set konten='$konten', isi='$isi' WHERE id_menu='".$_GET['id']."'";
	mysqli_query($koneksi,$sql);
	header('Location:edit_menu.php');
?>