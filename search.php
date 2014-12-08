<?php
	include("koneksi.php");
	$_POST['cari']=strtolower($_POST['cari']);
	if($_POST['cari']=="12menit"){
		header('Location:menit.php'); }
	else if($_POST['cari']=="doraemon petualangan" || $_POST['cari']=="doraemon" || $_POST['cari']=="petualangan" ){
		header('Location:doraemon.php'); }
	else if($_POST['cari']=="fireflies"){
		header('Location:fireflies.php'); }		
	else if($_POST['cari']=="inazuma eleven" || $_POST['cari']=="inazuma"){
		header('Location:inazuma.php'); }		
	else if($_POST['cari']=="dawn aria" || $_POST['cari']=="dawn" || $_POST['cari']=="aria"){
		header('Location:dawn_aria.php'); }		
	else if($_POST['cari']=="jasmine (cinta yang menyembuhkan)" || $_POST['cari']=="jasmine"){
		header('Location:jasmine.php'); }		
	else if($_POST['cari']=="kuroko's basketball" || $_POST['cari']=="kuroko" || $_POST['cari']=="kuroko's" || $_POST['cari']=="basketball"){
		header('Location:kuroko.php'); }		
	else if($_POST['cari']=="snow in the heart" || $_POST['cari']=="snow" || $_POST['cari']=="heart"){
		header('Location:snow.php'); }		
	else if($_POST['cari']=="detective conan" || $_POST['cari']=="detective" || $_POST['cari']=="conan"){
		header('Location:conan.php'); }		
	else if($_POST['cari']=="basara"){
		header('Location:basara.php'); }		
	else if($_POST['cari']=="notasi"){
		header('Location:notasi.php'); }		
	else if($_POST['cari']=="amore Cinta yang tak Terlupakan" || $_POST['cari']=="amore"){
		header('Location:amore.php'); }
	else {
		echo "<script type='text/javascript'>";
		echo "alert('Buku Tidak Ditemukan !')";
		echo "</script>";
		echo "<a href='check_login.php'>BACK TO HOME</a>";
	}
?>