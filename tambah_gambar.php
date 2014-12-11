<?php
	include("koneksi.php");
	
		$file_name = $_FILES['banner']['name'];
		$file_size = $_FILES['banner']['size'];
		$file_tmp = $_FILES['banner']['tmp_name'];
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
				echo "<a href='home_admin.php'>BACK TO HOME</a>";
			}
		} else {
			echo "<script type='text/javascript'>";
			echo "alert('jenis file yang diperbolehkan hanya gambar.')";
			echo "</script>";
			echo "<a href='home_admin.php'>BACK TO HOME</a>";
		}
		$sql ="INSERT INTO gambar(banner) VALUES ('$tujuan')";
			mysqli_query($koneksi,$sql);
			header('Location:gambar.php');
?>