<?php
	include("koneksi.php");
	
		$file_name = $_FILES['banner']['name'];
		$file_size = $_FILES['banner']['size'];
		$file_tmp = $_FILES['banner']['tmp_name'];
		$file_ext = strtolower(end(explode(".",$file_name)));
		$ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");
		if(in_array($file_ext, $ext_boleh)){
		$sumber = $file_tmp;
		$tujuan = "gambar/" . $file_name;
		move_uploaded_file($sumber, $tujuan);
		
		$sql="INSERT INTO gambar (banner) VALUES ('$tujuan')";
		mysqli_query($koneksi,$sql);
		}
?>