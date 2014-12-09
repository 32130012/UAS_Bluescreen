<?php //filename: form_login_user.php

?>
<!DOCTYPE html>
<html>
<head>
	<title>BlueScreen Library Form</title>
</head>
<body>
	<br />
	<br />
	<h2 style="margin-left:30px;"><font color="white">Tambah Daftar Buku BlueScreen Library</font></h2>
	
	<form method="POST" action="tambah_buku_proses.php" enctype="multipart/form-data">
	<table cellpadding="20" cellspacing="20" style="margin-left: 20px;">
		<tr>
			<td>
			<label>Judul Buku   :</label>
			</td>
			<td>
			<input type="text" name="judul" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Pengarang  :</label>
			</td>
			<td>
			<input type="text" name="pengarang" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Bahasa :</label>
			</td>
			<td>
			<input type="text" name="bahasa" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Tahun Terbit :</label>
			</td>
			<td>
			<input type="text" name="tahun" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Jumlah Stock :</label>
			</td>
			<td>
			<input type="text" name="stok" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Jenis Buku :</label>
			</td>
			<td>
			<input type="text" name="jenis" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Sinopsis :</label>
			</td>
			<td>
			<input type="textarea" name="sinopsis" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Cover Buku   :</label>
			</td>
			<td>
			<input type="file" name="cover" />
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
			<input type="submit" name="submit" value="  SUBMIT  " />
			<input type="reset" name="clear" value="  CLEAR  " />
			</td>
		</tr>
	</table>
	</form>


</body>
</html>
