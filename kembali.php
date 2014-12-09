<?php
	include("koneksi.php");
	SESSION_START();

	if($_SESSION['status']=="login"){
		$user = $_SESSION['nama'];
		$sql = "SELECT * FROM user WHERE nama = '".$user."'";
		$hasil = mysqli_query($koneksi,$sql);
		$username = mysqli_fetch_array($hasil); 
		$npinjam = $username[0];
		$sql = "SELECT * FROM tr_pinjam_hdr WHERE id_user = '".$npinjam."'";
		$hasil = mysqli_query($koneksi,$sql);
		$kembali = mysqli_fetch_array($hasil);
		if($kembali>0){
			$sql="INSERT INTO tr_pinjam_hdr (tgl_kembali) VALUES (NOW())";
			mysqli_query($koneksi,$sql);
		/*$sql="INSERT INTO tr_pinjam_dtl(id_hdr,id_buku) VALUES(id_hdr,*/
		} else {
		echo "<script type='text/javascript'>";
		echo "alert('ANDA BELUM LOGIN !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>";
		}
	}
	else {
		echo "<script type='text/javascript'>";
		echo "alert('ANDA BELUM LOGIN !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>"; }
?>