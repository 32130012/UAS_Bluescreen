<?php
	include("header.php");
	SESSION_START();
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
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if($_SESSION['status']=="login"){
		$user = $_SESSION['nama'];
		$sql = "SELECT * FROM user WHERE nama = '".$user."'";
		$hasil = mysqli_query($koneksi,$sql);
		$username = mysqli_fetch_array($hasil); 
		?> <br />
		<img src= "<?php	echo $username[9]; ?>" style="width:150px; height:200px" />
		<br /> <?php
		echo "ID Member &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp= " . $username[0];
		?> <br /> <?php
		echo "Nama User &nbsp &nbsp = " . $username[1];
		?> <br /> <?php
		echo "Tempat Lahir 	= " . $username[3];
		?> <br /> <?php
		echo "Tanggal Lahir = " . $username[4] . "/" . $username[5] . "/" . $username[6];
		?> <br /> <?php
		echo "Alamat &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = " . $username[7];
		?> <br /> <?php
		echo "E-mail &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = " . $username[8];
		?> <br /> 
		<br />
		<form method="POST" action="edit_profil.php">
			<input type="submit" name="edit" value="Edit Profil" />	
		</form>
		<br />
		<?php
		}
	else {
		echo "USER TIDAK LOGIN"; }
?></p>
	<br /> <br />
	<hr style="color: #4B7B9F;">
	**daftar peminjaman buku**
	
</div>
	
<?php
	include("footer.php");
?>