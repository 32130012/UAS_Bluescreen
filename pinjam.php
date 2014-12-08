<?php
	include("koneksi.php");
	SESSION_START();
	
	if($_SESSION['status']=="login"){
		$user = $_SESSION['nama'];
		$sql = "SELECT * FROM user WHERE nama = '".$user."'";
		$hasil = mysqli_query($koneksi,$sql);
		$username = mysqli_fetch_array($hasil);
		$sql="INSERT INTO tr_pinjam_hdr(tgl_pinjam, id_user) VALUES(NOW(),'".$username[0]."')";
		mysqli_query($koneksi,$sql);
		/*$sql="INSERT INTO tr_pinjam_dtl(id_hdr,id_buku) VALUES(id_hdr,*/
	}
	else {
		echo "<script type='text/javascript'>";
		echo "alert('ANDA BELUM LOGIN !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>"; }
?>