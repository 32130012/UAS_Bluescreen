<?php
	include("header.php");
	$sql="SELECT * FROM menu";
	$hasil=mysqli_query($koneksi,$sql);
	$field=mysqli_fetch_array($hasil);
		echo $field['isi']; ?>	</div>
	
	<div class="formlogin">
	<font color="white">
	<?php
		if($_SESSION['status']=="login"){
		echo "Selamat datang , " . $_SESSION['nama'] . "!"; //menampilkan nama yang sedang login
		}
	?></font>
	<br />
	<br />
	<form method="POST" action="logout.php">
		<input type="submit" name="logout" value="  LOG OUT  " style="margin-left:120px;"/>
	</form>
	<br />
	</div>
	
	<div class="kalender">
	<?php
	include("kalender.php");
	?>
	</div>
	
<?php
	include("footer.php");
?>