<?php
	SESSION_START();
	
	if($_SESSION['status']=="login"){
		header('Location:home_admin.php'); }
	else {
		header('Location:index.php'); }
?>