<?php
	include("header.php");
	
	$sql="SELECT isi FROM menu WHERE id_menu='".$_GET['id_menu']."'";
	$hasil=mysqli_query($koneksi,$sql);
	$field=mysqli_fetch_array($hasil);
	if($_GET['id_menu']==1){ 
		include("check_login.php");
		echo $field['isi']; ?>
			</div>
		
		<div class="formlogin">
		<font color="white">
		<?php
			if($_SESSION['status']=="login"){
			echo "Selamat datang , " . $_SESSION['nama'] . "!";
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
<?php } else if($_GET['id_menu']==2){
		header('Location:profile.php');
	} else if($_GET['id_menu']==3){
		header('Location:books.php');
	}
		else if($_GET['id_menu']==4){
		header('Location:gallery.php');
	}
		else{
		echo $field['isi'];
	}
	echo "</div>";
	include("footer.php");
?>