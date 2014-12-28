<?php
	include("koneksi.php");
	
	$sql="DELETE FROM menu WHERE id_menu='".$_GET['id']."'";
	mysqli_query($koneksi,$sql);
	header('Location:edit_menu.php');
?>