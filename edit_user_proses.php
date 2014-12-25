<?php
include("koneksi.php");
session_start();

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
$sql=("UPDATE user set password='$newpass', tempat='$tempat', tanggal='$tanggal', bulan='$bulan', tahun='$tahun', 
alamat='$alamat', email='$email', file='$tujuan' WHERE nama='$user' ");
$hasil= mysqli_query($koneksi, $sql);
move_uploaded_file($sumber,$tujuan);
header('Location:profile.php');
?>