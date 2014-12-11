<?php
include("koneksi.php");

	
$judul = $_POST['judul'];
$pengarang=$_POST['pengarang'];
$bahasa=$_POST['bahasa'];
$tahun=$_POST['tahun'];
$stok=$_POST['stok'];
$status=$_POST['status'];
$sinopsis=$_POST['sinopsis'];

$files_name= $_FILES['cover']['name'];
$files_tmp=	$_FILES['cover']['tmp_name'];
$sumber=$files_tmp;
$tujuan = "gambar_buku/" . $files_name;

			$sql=("UPDATE buku set pengarang='$pengarang', bahasa='$bahasa', tahun='$tahun', stok='$stok', 
			status='$status', sinopsis='$sinopsis', gambar='$tujuan' WHERE judul='$judul' ");
			$hasil= mysqli_query($koneksi, $sql);
			move_uploaded_file($sumber,$tujuan); 
			header('Location:buku_admin.php');
			
			
?>