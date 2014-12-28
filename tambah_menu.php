<?php
	include("header_admin.php");
?>
	<form method="POST" action="tambah_menu_proses.php">
	<table>
		<tr>
			<td> NAMA MENU </td>
			<td> : </td>
			<td> 
				<input type="text" name="menu" value="" />
			</td>
		</tr>
		<tr>
			<td> ISI MENU </td>
			<td> : </td>
			<td> 
				<textarea name="isi" rows="10" cols="100"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">	
				<input type="submit" name="submit" value="SUBMIT" />
			</td>
			<td>
				<input type="reset" name="clear" value="CLEAR" />
			</td>
	</table>
	</form>
				
<?php
	include("footer_admin.php");
?>