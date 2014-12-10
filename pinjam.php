<?php
	include("koneksi.php");
	SESSION_START();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$id_buku=$_GET['id_buku'];
	if($_SESSION['status']=="login"){
		$user = $_SESSION['nama'];
		$sql = "SELECT id_user FROM user WHERE nama = '".$user."'";
		$hasil = mysqli_query($koneksi,$sql);
		$username = mysqli_fetch_array($hasil);
		$sql="INSERT INTO tr_pinjam_hdr (tgl_pinjam, id_user, id_buku) VALUES(NOW(),'".$username[0]."','".$id_buku."')";
		mysqli_query($koneksi,$sql);
		$sql="SELECT stok FROM buku where id_buku='$id_buku'";
		$hasil=mysqli_query($koneksi,$sql);
		$book=mysqli_fetch_array($hasil);
		$stock=$book['stok'];
		$stock=$stock - 1;
		$sql="UPDATE buku SET stok='$stock' where id_buku='$id_buku'";
		mysqli_query($koneksi,$sql);
	}
	else {
		echo "<script type='text/javascript'>";
		echo "alert('ANDA BELUM LOGIN !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>"; 
		}
?>