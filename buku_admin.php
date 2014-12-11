<?php
	include("header_admin.php");
?>

Books kategori : 
<form method="POST">
<select name="kategori">
	<option value=""> semua buku </option>
	<?php 
		$query = "SELECT status FROM buku group by status";
		$cb = mysqli_query($koneksi,$query);
		while ($cb2 = mysqli_fetch_row($cb)){
	?>
		<?php if($_POST['kategori'] == $cb2[0]) {?>
		<option value="<?php echo $cb2[0]; ?>" selected = 'selected'> <?php echo $cb2[0]; ?> </option>
		<?php } else { ?>
		<option value="<?php echo $cb2[0]; ?>"> <?php echo $cb2[0]; ?> </option>
		<?php } ?>
	<?php } ?>
</select>
<input type="submit" name="cari" value="  CARI  " />
</form>
<br />

<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$sql = "SELECT * FROM buku WHERE 1=1 ";
$sts = $_POST['kategori'];
if($sts!=""){
	$sql = $sql. "AND status = '".$sts."'";
}
	$hasil = mysqli_query($koneksi,$sql);
?>
<br />
	<table width="656" border="2" cellspacing="0" cellpadding="2" style="color:white;">
		<tr>
			<td>Nomor</td>
			<td>Judul Buku</td>
			<td>Pengarang</td>
			<td>Bahasa</td>
			<td>Tahun Terbit</td>
			<td>Jumlah Stock</td>
		</tr>
		<?php
			$i = 0;
			while ($buku = mysqli_fetch_row($hasil)){
			$i++;
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="buku_detail.php?id_buku=<?php echo $buku[0];?>"><?php echo $buku[1] ?> </a>
			</td>
			<td><?php echo $buku[2]; ?></td>
			<td><?php echo $buku[3]; ?></td>
			<td><?php echo $buku[4]; ?></td>
			<td><?php echo $buku[5]; ?></td>
			
				<td>
				<form method="POST" action="edit_buku.php?id_buku=<?php echo $buku[0];?>">
					<input type="submit" name="edit" value=" EDIT " >
				</form>
				</td>
				<td>
				<form method="POST" action="delete_buku.php?id_buku=<?php echo $buku[0];?>">
					<input type="submit" name="delete" value=" DELETE " >
				</form>
				</td>
				<?php } ?>
		</tr>	
		
		
		
	</table>
	<a href="tambah_buku.php">+Tambah Buku</a>
	</div>
	<br />


<?php
	include("footer_admin.php");
?>