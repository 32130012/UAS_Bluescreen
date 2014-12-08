<?php
	SESSION_START();
	
	if($_SESSION['status']=="login"){
		header('Location:home.php'); }
	else {
		header('Location:index.php'); }
?>