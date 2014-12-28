<?php
	include("header_admin.php");
	$sql="SELECT * FROM menu WHERE id_menu='".$_GET['id']."'";
	$hasil=mysqli_query($koneksi,$sql);
	$menu=mysqli_fetch_array($hasil);
?>
	<h2>MENU <?php echo $menu['konten']; ?> </h2>
	<form method="POST" action="proses_edit_menu.php?id=<?php echo $menu['id_menu']; ?>">
		<table>
			<tr>
				<td>NAMA MENU</td>
				<td>:</td>
				<td>
				<input type="text" name="menu" value="" />
				</td>
			</tr>
			<tr>
				<td>ISI KONTEN</td>
				<td>:</td>
				<td>
				<textarea name="isi" value="" rows="20" cols="100"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" name="submit" value="SUBMIT" />
				</td>
				<td>
				<input type="reset" name="reset" value="CLEAR" />
				</td>
		</table>
	</form>
<?php
	include("footer_admin.php");
?>