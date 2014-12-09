<?php
	include("koneksi.php");
	$id_buku=$_POST['cari'];
	if(isset($id_buku)){
		$sql="SELECT * FROM buku WHERE judul LIKE '%$_POST[cari]%'";
		$hasil=mysqli_query($koneksi,$sql);
		if(mysqli_num_rows($hasil)>0){
			header('Location:buku.php');
		} else {		
			echo "<script type='text/javascript'>";
			echo "alert('Buku Tidak Ditemukan !')";
			echo "</script>";
			echo "<a href='check_login.php'>BACK TO HOME</a>";
		}
	}
?>