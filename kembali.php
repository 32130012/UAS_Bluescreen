<?php
	include("koneksi.php");
	SESSION_START();

	if($_SESSION['status']=="login"){
		$user = $_SESSION['nama'];
		$sql = "SELECT * FROM user WHERE nama = '".$user."'";
		$hasil = mysqli_query($koneksi,$sql);
		$username = mysqli_fetch_array($hasil); 
		$npinjam = $username[0];
		$sql = "SELECT * FROM tr_pinjam_hdr WHERE id_user = '".$npinjam."'";
		$hasil = mysqli_query($koneksi,$sql);
		$kembali = mysqli_fetch_array($hasil);
		$kode=$kembali['id_buku'];
		$id_buku=$_GET['id_buku'];
		if($kembali>0){
			if($kode==$id_buku){
				$sql="UPDATE tr_pinjam_hdr SET tgl_kembali=now() WHERE id_buku = '$id_buku'"; /*input tanggal kembali*/
				mysqli_query($koneksi,$sql);
				
				$sql="SELECT stok FROM buku where id_buku='$id_buku'";/*balikin jumlah stok*/
				$hasil=mysqli_query($koneksi,$sql);
				$book=mysqli_fetch_array($hasil);
				$stock=$book['stok'];
				$stock=$stock +1;
				$sql="UPDATE buku SET stok='$stock' where id_buku='$id_buku'";
				mysqli_query($koneksi,$sql);
				
				$sql="SELECT * FROM tr_pinjam_hdr WHERE id_buku = '$id_buku'";/*menghitung jumlah denda*/
				$hasil=mysqli_query($koneksi,$sql);
				$tgl=mysqli_fetch_array($hasil);
				$pinjam=$tgl['tgl_pinjam'];
				$balik=$tgl['tgl_kembali'];
				$sql="SELECT datediff('$balik', '$pinjam') as selisih";
				$hasil=mysqli_query($koneksi,$sql);
				$tgl=mysqli_fetch_array($hasil);
				echo $tgl['selisih'];
				if($tgl['selisih']>7){
					$denda=$tgl['selisih'] * 1000;
					echo $denda;
				} else {
					$denda=0;
					echo $denda;
				}
			}
			else {
				echo "<script type='text/javascript'>";
				echo "alert('ANDA BELUM MEMINJAM BUKU INI !')";
				echo "</script>";
				echo "<a href='index.php'>BACK TO HOME</a>";
			}
		} else {
		echo "<script type='text/javascript'>";
		echo "alert('ANDA BELUM LOGIN !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>";
		}
	}
	else {
		echo "<script type='text/javascript'>";
		echo "alert('ANDA BELUM LOGIN !')";
		echo "</script>";
		echo "<a href='index.php'>BACK TO HOME</a>"; }
?>