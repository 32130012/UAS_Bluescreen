<?php
include("$koneksi.php");
$sql="SELECT * FROM gambar where id_gambar='".$_GET['id_gambar']."'";
		$hasil=mysqli_query($koneksi,$sql);
		$books=mysqli_fetch_row($hasil);
	
?>