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
	<h2 style="margin-left:30px;"><font color="white">Daftar Anggota BlueScreen Library</font></h2>
	
	<form method="POST" action="form_user_proses.php" enctype="multipart/form-data">
	<table cellpadding="20" cellspacing="20" style="margin-left: 20px;">
		<tr>
			<td>
			<label>username   :</label>
			</td>
			<td>
			<input type="text" name="nama" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>password  :</label>
			</td>
			<td>
			<input type="password" name="password" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>tempat lahir :</label>
			</td>
			<td>
			<input type="text" name="tempat" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>tanggal lahir  :</label>
			</td>
			<td>
			<?php
			echo "<select name='tgl'>";
				for ($tgl=1; $tgl<=31; $tgl++)
					{echo "<option>$tgl</option>";}
			echo "</select>";
			?>&nbsp;<?php
			echo "<select name='bln'>";
				for ($bln=1; $bln<=12; $bln++)
					{echo "<option>$bln</option>";}
			echo "</select>";
			?>&nbsp;<?php
			echo "<select name='thn'>";
				for ($thn=1945; $thn<=2014; $thn++)
					{echo "<option>$thn</option>";}
			echo "</select>";
			echo "dd/mm/yyyy";
			?>
			</td>
		</tr>
		<tr>
			<td>
			<label>Email   :</label>
			</td>
			<td>
			<input type="text" name="email" value="" /> <br />
			</td>
		<tr>
			<td>
			<label>Alamat   :</label>
			</td>
			<td>
			<textarea name="alamat" rows="4" value=""></textarea> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Foto   :</label>
			</td>
			<td>
			<input type="file" name="foto" />
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
