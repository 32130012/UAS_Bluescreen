<?php
	include("header.php");
	$id_buku=$_POST['cari'];
	if(isset($id_buku)){
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
					<a href="buku.php?id_buku=<?php echo $buku[0];?>"><?php echo $buku[1] ?> </a>
				</td>
				<td><?php echo $buku[2]; ?></td>
				<td><?php echo $buku[3]; ?></td>
				<td><?php echo $buku[4]; ?></td>
				<td><?php echo $buku[5]; ?></td>
				<td>
					<form method="POST" action="pinjam.php?id_buku=<?php echo $buku[0];?>">
						<input type="submit" name="tambah" value=" PINJAM " >
					</form>
			</tr>
			<?php } ?>
			
		</table>
		</div>
		<br />
	</div>
		<?php } else {		
			echo "<script type='text/javascript'>";
			echo "alert('Buku Tidak Ditemukan !')";
			echo "</script>";
			echo "<a href='check_login.php'>BACK TO HOME</a>";
		}
	}

include("footer.php");
?>