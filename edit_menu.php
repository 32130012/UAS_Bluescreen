<?php //
include("header_admin.php");
?>
<h2>EDIT MENU</h2>
<?php
	$sql="SELECT *FROM menu"; //select semua nama pada tab menu yang ada di database
	$hasil=mysqli_query($koneksi,$sql); 
	$i=1; ?>
	<table border="1">
	<tr>
		<td>NOMOR</td>
		<td>NAMA MENU</td>
		<td>PILIH</td>
	</tr> 
	<?php
	while($konten=mysqli_fetch_row($hasil)){ ?>			
			<tr>
				<td>
				<?php echo $i;?>
				</td>
				<td>
				<?php if($konten[0]==2 || $konten[0]==3 || $konten[0] ==4){
				echo $konten[1]; } else { ?>
				<a href="form_edit_menu.php?id=<?php echo $konten[0]; ?> "> <?php echo $konten[1]; ?> </a> 
				<?php } ?>
				</td>
				<td>
				<?php if($konten[0]==2 || $konten[0]==3 || $konten[0] ==4){
				echo ""; } else { ?>
				<a href="hapus_menu.php?id=<?php echo $konten[0]; ?> "> HAPUS MENU </a>
				<?php } ?>
				</td>
			</tr>			
<?php	$i +=1;} ?>
</table>
<a href="tambah_menu.php">+TAMBAH MENU</a>
</div>
<?php
include("footer_admin.php");
?>