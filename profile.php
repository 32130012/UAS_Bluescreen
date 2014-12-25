<?php
	include("header.php");
?>

<div class="konten">
	<div id="sliderFrame">
    <div id="slider">
        <img src="gambar/buku1.jpg" />
        <img src="gambar/buku2.jpg" />
		<img src="gambar/buku3.jpg" />
		
    </div>
	</div>
	
	
<font color="white"> PROFILE SAYA :<font> <br /><p>
<?php
	if($_SESSION['status']=="login"){
		$user = $_SESSION['nama'];
		$sql = "SELECT * FROM user WHERE nama = '".$user."'";
		$hasil = mysqli_query($koneksi,$sql);
		$username = mysqli_fetch_array($hasil); 
		?> <br />
		
		<img src= "<?php	echo $username[9]; ?>" style="width:150px; height:200px" />
		<br />
		<div class="isi">
		<table cellpadding="10" cellspacing="7" style="margin-top:100px;">
		<tr>
			<td> 
		<?php		
		echo "ID Member ";
		?> 	</td> 
			<td> 
		<?php		
			echo " = ";
		?> 	</td>
			<td> 
		<?php		
			echo $username[0];
		?> 	</td> 
		</tr> 	
		<tr>
			<td> 
		<?php		
		echo "Nama Member ";
		?> 	</td> 
			<td> 
		<?php		
			echo " = ";
		?> 	</td>
			<td> 
		<?php		
			echo $username[1];
		?> 	</td> 
		</tr> 
		<tr>
			<td> 
		<?php		
		echo "Tempat Lahir ";
		?> 	</td> 
			<td> 
		<?php		
			echo " = ";
		?> 	</td>
			<td> 
		<?php		
			echo $username[3];
		?> 	</td> 
		</tr>
		<tr>
			<td> 
		<?php		
		echo "Tanggal Lahir ";
		?> 	</td> 
			<td> 
		<?php		
			echo " = ";
		?> 	</td>
			<td> 
		<?php		
			echo $username[4] . "/" . $username[5] . "/" . $username[6];
		?> 	</td> 
		</tr>
		<tr>
			<td> 
		<?php		
		echo "Alamat ";
		?> 	</td> 
			<td> 
		<?php		
			echo " = ";
		?> 	</td>
			<td> 
		<?php		
			echo $username[7];
		?> 	</td> 
		</tr>
		<tr>
			<td> 
		<?php		
		echo "E-mail ";
		?> 	</td> 
			<td> 
		<?php		
			echo " = ";
		?> 	</td>
			<td> 
		<?php		
			echo $username[8];
		?> 	</td> 
		</tr>
		<tr>
			<td colspan="2">
		<form method="POST" action="edit_user.php">
			<input type="submit" name="edit" value="  Edit Profil  " />	
		</form>
			</td>
		</tr>
		</table>
		
		<br />
		<?php
		}
	else {
		echo "USER TIDAK LOGIN"; }
?></p>
	<br /> <br />
	<font color="black"><strong>Daftar Buku yang Dipinjam:</strong> </font>
	<hr style="color: #4B7B9F;">
	
	<?php

$sql= "SELECT tr_pinjam_hdr.id_buku, tr_pinjam_hdr.tgl_pinjam, tr_pinjam_hdr.selisih, buku.judul 
FROM tr_pinjam_hdr  INNER JOIN buku 
ON tr_pinjam_hdr.id_buku=buku.id_buku WHERE id_user='$username[0]'";
$hasil = mysqli_query($koneksi,$sql);
	while($daftar=mysqli_fetch_assoc($hasil)){ 
	?> 
		<table width="656" border="2" cellspacing="0" cellpadding="0" style="color:white; margin-left:-80px;">
			<tr>
				<td>ID Buku</td>
				<td>Judul Buku</td>
				<td>Tanggal Pinjam</td>
				<td>Denda</td>
			</tr>
			<tr>
				<td> <?php echo $daftar['id_buku']; ?> </td>
				<td> <?php echo $daftar['judul']; ?> </td>
				<td> <?php echo $daftar['tgl_pinjam']; ?>	</td>
				<td> <?php echo $daftar['selisih']; ?> </td>
			</tr>
		</table>
	<?php }	
	echo "note: Batas Lama Peminjaman adalah 7 hari"; ?>
	
	</hr>	
</div>	
</div>
	
<?php
	include("footer.php");
?>