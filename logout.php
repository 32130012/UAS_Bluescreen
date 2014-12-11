<?php
	session_start();
	include("koneksi.php");
	/*hapus data setelah jika buku sudah dikembalikan*/
	$sql="DELETE FROM tr_pinjam_hdr WHERE tgl_kembali>0";
	mysqli_query($koneksi,$sql);
	if(isset($koneksi)) { 
	// 5. Close connection
	mysqli_close($koneksi);
	}
	session_unset();
	session_destroy();
	header('Location:index.php');
?>