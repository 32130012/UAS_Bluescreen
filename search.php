<?php
	include("koneksi.php");
	$_POST['cari']=strtolower($_POST['cari']);
	if($_POST['cari']=="12menit"){
		header('Location:buku.php'); }
	else if($_POST['cari']=="doraemon petualangan"){
		header('Location:buku.php'); }
	else if($_POST['cari']=="fireflies"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="inazuma eleven"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="dawn aria"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="jasmine (cinta yang menyembuhkan)"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="kuroko's basketball"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="snow in the heart"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="detective conan"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="basara"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="notasi"){
		header('Location:buku.php'); }		
	else if($_POST['cari']=="amore Cinta yang tak Terlupakan"){
		header('Location:buku.php'); }
	else {
		echo "<script type='text/javascript'>";
		echo "alert('Buku Tidak Ditemukan !')";
		echo "</script>";
		echo "<a href='check_login.php'>BACK TO HOME</a>";
	
	}
?>