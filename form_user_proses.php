<?php
		include("koneksi.php");
		$nama = $_POST['nama'];
		$password = $_POST['password'];		
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tgl'];
		$bulan = $_POST['bln'];
		$tahun = $_POST['thn'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];	
		$format = "$2y$10$";
		$hash = "HaloHaloHaloHaloHalo22";
		$salt = $format.$hash;
		$newpass = crypt($password,$salt);
		
		$file_name = $_FILES['foto']['name'];
		$file_size = $_FILES['foto']['size'];
		$file_tmp = $_FILES['foto']['tmp_name'];
		$file_ext = strtolower(end(explode(".",$file_name)));
		$ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");

		if(in_array($file_ext, $ext_boleh)){
		//ext file di perbolehkan
			if($file_size <= 2*1024*1024){
		//file bisa diupload
		//sumber file
				$sumber = $file_tmp;
				$tujuan = "foto/" . $file_name;
				move_uploaded_file($sumber, $tujuan);
			} else {
				echo "<script type='text/javascript'>";
				echo "alert('ukuran gambar terlalu besar. MAX 2MB !')";
				echo "</script>";
				echo "<a href='index.php'>BACK TO HOME</a>";
			}
		} else {
			echo "<script type='text/javascript'>";
			echo "alert('jenis file yang diperbolehkan hanya gambar.')";
			echo "</script>";
			echo "<a href='index.php'>BACK TO HOME</a>";
		}
		if($nama == "" || $password == "" || $tempat == "" || $tanggal == "" || $bulan == "" || $tahun == "" || $email == "" || $alamat == ""){
			echo "<script type='text/javascript'>";
			echo "alert('DATA TIDAK BOLEH ADA YANG KOSONG !')";
			echo "</script>";
			echo "<a href='index.php'>BACK TO HOME</a>";
		}
		else{
		$sql = "SELECT nama FROM user WHERE nama = '".$nama."'";
		$ada=mysqli_query($koneksi,$sql);
		if(mysqli_num_rows($ada) == 0){
			$sql ="INSERT INTO user (nama, password, tempat, tanggal, bulan, tahun, alamat, email, file) VALUES('$nama', '$newpass', '$tempat', '$tanggal', '$bulan', '$tahun', '$alamat', '$email', '$tujuan')";
			mysqli_query($koneksi,$sql);
			header('Location:index.php');
		}
		else {
			echo "<script type='text/javascript'>";
			echo "alert('USERNAME SUDAH TERDAFTAR !')";
			echo "</script>";
			echo "<a href='index.php'>BACK TO HOME</a>";
		}
		}
?>