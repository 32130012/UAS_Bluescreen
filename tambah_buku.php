<?php //filename: form_login_user.php
include("header_admin.php");
?>

	<h2 style="margin-left:30px;"><font color="white">Daftar Anggota BlueScreen Library</font></h2>
	
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
			<label>Nama Pengarang  :</label>
			</td>
			<td>
			<input type="text" name="pengarang" value="" /> <br />
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
			<label>Bahasa :</label>
			</td>
			<td>
			<input type="text" name="bahasa" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Tahun terbit :</label>
			</td>
			<td>
			<input type="text" name="tahun" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Jumlah Stok :</label>
			</td>
			<td>
			<input type="text" name="stok" value="" /> <br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Sinopsis :</label>
			</td>
			<td>
			<textarea rows="4" name="sinopsis" value="" /> </textarea><br />
			</td>
		</tr>
		<tr>
			<td>
			<label>Gambar Cover   :</label>
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

<?php
include("footer_admin.php");
?>
