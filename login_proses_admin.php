<?php //filename: form_login.php
session_start();
include("koneksi.php");

		
$sql="SELECT * FROM admin WHERE nama = '$_POST[nama]'";

$hasil= mysqli_query($koneksi, $sql);

if(mysqli_num_rows($hasil) == 0){ 
//jika $hasil tidak ada maka,
	echo "<script type='text/javascript'>";
	echo "alert('Username Tidak Ditemukan !')";
	echo "</script>";
	echo "<a href='index.php'>BACK TO HOME</a>";
}

$baris = mysqli_fetch_assoc($hasil);
$password = $_POST['password'];
$format = "$2y$10$";
$hash = "HaloHaloHaloHaloHalo22";
$salt = $format.$hash;
$newpass = crypt($password,$salt);
if($newpass == $baris['password']){
	$_SESSION['status']="login";
	$_SESSION['nama']="$_POST[nama]";
	echo $_SESSION['nama'];
	header('Location:home_admin.php');
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('PASSWORD SALAH !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>";
	}

?>