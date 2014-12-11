<?php
include("koneksi.php");
SESSION_START();
				$user = $_SESSION['nama'];
				$sql = "SELECT * FROM user WHERE nama = '".$user."'";
				$hasil = mysqli_query($koneksi,$sql);
				$username = mysqli_fetch_array($hasil); 
				$sql="SELECT * from tr_pinjam_hdr WHERE id_user='$username[0]'";
				$hasil=mysqli_query($koneksi,$sql);
				$data=mysqli_fetch_assoc($hasil);
				echo $data['tgl_kembali'];
				$tbh=$data['tgl_kembali'];
				?> <br/> <?php
				echo $tbh;
			?>