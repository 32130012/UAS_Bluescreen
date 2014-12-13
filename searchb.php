<?php //fungsi button search untuk admin
	include("header_admin.php");
	$id_buku=$_POST['cari'];
	if(isset($id_buku)){
	//fungsi like untuk membuat pencarian berdasarkan huruf semakin akurat
		$sql="SELECT * FROM buku WHERE judul LIKE '%$_POST[cari]%'";
		$hasil=mysqli_query($koneksi,$sql);
		if(mysqli_num_rows($hasil)>0){
				?><br />
		<div class="konten">	
			<h2 style="color: white;">Hasil Pencarian Buku</h2></br></br>
		<table width="656" border="2" cellspacing="0" cellpadding="2" style="color:white;">
			<tr>
				<td>ID Buku</td>
				<td>Judul Buku</td>
				<td>Pengarang</td>
				<td>Bahasa</td>
				<td>Tahun Terbit</td>
				<td>Jumlah Stock</td>
			</tr>
			<?php
				$i = 0;
				while ($buku = mysqli_fetch_row($hasil)){
				$i += 1;
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
			</tr>
			<?php } ?>
			
		</table>
		</div>
		<br />
		<?php } else {		
			echo "<script type='text/javascript'>";
			echo "alert('Buku Tidak Ditemukan !')";
			echo "</script>";
		}
	}
?>
</div>
<?php
include("footer_admin.php");
?>