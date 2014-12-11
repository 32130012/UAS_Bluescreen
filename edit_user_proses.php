<?php
include("koneksi.php");
session_start();
//siapkan variabel untuk proses edit
$user = $_SESSION['nama'];
$password=$_POST['password'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tgl'];
$bulan=$_POST['bln'];
$tahun=$_POST['thn'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$format = "$2y$10$";
$hash = "HaloHaloHaloHaloHalo22";
$salt = $format.$hash;
$newpass = crypt($password,$salt);
$files_name= $_FILES['foto']['name'];
$files_tmp=	$_FILES['foto']['tmp_name'];
$sumber=$files_tmp;
$tujuan = "foto/" . $files_name;

if(in_array($file_ext, $ext_boleh)){
		//ext file di perbolehkan
			if($file_size <= 2*1024*1024){
		//file bisa diupload
		//sumber file
				$sumber = $file_tmp;
				$tujuan = "foto/" . $file_name;
				move_uploaded_file($sumber, $tujuan);
			} else {
				echo "<script type='text/javascript'>";
				echo "alert('ukuran gambar terlalu besar. MAX 2MB !')";
				echo "</script>";
				echo "<a href='index.php'>BACK TO HOME</a>";
			}
		} else {
			echo "<script type='text/javascript'>";
			echo "alert('jenis file yang diperbolehkan hanya gambar.')";
			echo "</script>";
			echo "<a href='index.php'>BACK TO HOME</a>";
		}
		if($password == "" || $tempat == "" || $tanggal == "" || $bulan == "" || $tahun == "" || $email == "" || $alamat == ""){
			echo "<script type='text/javascript'>";
			echo "alert('DATA TIDAK BOLEH ADA YANG KOSONG !')";
			echo "</script>";
			echo "<a href='index.php'>BACK TO HOME</a>";
		}
		else {
		$sql=("UPDATE user set password='$newpass', tempat='$tempat', tanggal='$tanggal', bulan='$bulan', tahun='$tahun', 
		alamat='$alamat', email='$email', file='$tujuan' WHERE nama='$user' ");
		$hasil= mysqli_query($koneksi, $sql);
		move_uploaded_file($sumber,$tujuan); 
		header('Location:profile.php');}

?>