<?php //filename: en_login_user.php
	$password= "augusta";
	$format = "$2y$10$";
	$hash = "HaloHaloHaloHaloHalo22";
	$salt = $format.$hash;
	$newpass = crypt($password,$salt);
	echo $newpass;
?>