<?php
	include("header.php");

	$sql="SELECT * FROM menu"; //mengambil isi konten daridatabase
	$hasil=mysqli_query($koneksi,$sql);
	$field=mysqli_fetch_array($hasil); 
		echo $field['isi']; ?>
	</div>
	<div class="formlogin">
	<?php
	include("login_user.php");
	
	?>
	</div>
	<div class="kalender">
	<?php
	include("kalender.php");
	?>
	</div>

	
<?php	
	include("footer.php");
?>