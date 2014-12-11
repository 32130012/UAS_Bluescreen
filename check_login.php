<?php
//validasi untuk memastikan apakah user sudah login atau belum
	SESSION_START();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if($_SESSION['status']=="login"){
		header('Location:home.php'); }
	else {
		header('Location:index.php'); }
?>