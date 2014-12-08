<?php //filename: form_login_user.php
session_start();
include("koneksi.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>BlueScreen Library Form</title>
</head>
<body>
	<h2>Daftar Anggota BlueScreen Library</h2>
	<form method="POST" action="form_user_proses.php">
		<label>username</label>
		<input type="text" name="nama" value="" /> <br />
		<label>password</label>
		<input type="password" name="password" value="" /> <br />
		<label>tanggal lahir</label>
		<input type="text" name="ttl" value="" /> <br /><!--ganti javascript-->
		<label>Email</label>
		<input type="text" name="email" value="" /> <br />
		<label>alamat</label>
		<textarea name="alamat" rows="4"></textarea> <br />
		<input type="submit" name="submit" value="submit" />
		<input type="reset" name="clear" value="clear" />
	</form>
	

</body>
</html>
