<?php
		include("koneksi.php");
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$bahasa = $_POST['bahasa'];
		$tahun = $_POST['tahun'];
		$stok = $_POST['stok'];
		$jenis = $_POST['jenis'];
		$sinopsis = $_POST['sinopsis'];	
		
		$file_name = $_FILES['cover']['name'];
		$file_size = $_FILES['cover']['size'];
		$file_tmp = $_FILES['cover']['tmp_name'];
		$file_ext = strtolower(end(explode(".",$file_name)));
		$ext_boleh = array("jpg", "jpeg", "png", "bmp");
		
		/*if($jenis*/
		if(in_array($file_ext, $ext_boleh)){
		//ext file di perbolehkan
			if($file_size <= 2*1024*1024){
		//file bisa diupload
		//sumber file
				$sumber = $file_tmp;
				$tujuan = "gambar/buku" . $file_name;
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
		if($judul == ""){
			echo "<script type='text/javascript'>";
			echo "alert('JUDUL BUKU TIDAK BOLEH KOSONG !')";
			echo "</script>";
			echo "<a href='index.php'>BACK TO HOME</a>";
		}
		else{
		$sql = "SELECT judul FROM buku WHERE judul = '".$judul."'";
		$ada=mysqli_query($koneksi,$sql);
		if(mysqli_num_rows($ada) == 0){
			$sql ="INSERT INTO buku (judul, pengarang, bahasa, tahun, stok, status, sinopsis, gambar) VALUES('$nama', '$newpass', '$tempat', '$tanggal', '$bulan', '$tahun', '$alamat', '$email', '$tujuan')";
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