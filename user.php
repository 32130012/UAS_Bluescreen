<?php
	include("header_admin.php");
 
	$sql="SELECT * FROM user";
	$hasil=mysqli_query($koneksi, $sql);
	while($use=mysqli_fetch_row($hasil)){ ?>
	<h2> DAFTAR MEMBER </h2>
		<table border="1">
			<tr>
				<td> ID User </td>
				<td> Nama User </td>
				<td colspan="2"> Pilih </td>
			</tr>
			<tr>
				<td> <a href="edit_user.php"> <?php echo $use[0]; ?> </a> </td>
				<td> <?php echo $use[1]; ?> </td>
				<td>
				<td>
				<form method="POST" action="proses_hapus_user.php?id_user=<?php echo $use[0];?>" enctype="multipart/form-data">
					<input type="submit" name="delete" value=" DELETE " >
				</form>
				</td>
			</tr>
		</table>
	
	<?php }
	
	include("footer_admin.php");
?>