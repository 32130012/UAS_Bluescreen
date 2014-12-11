<?php
include("koneksi.php");

$sql="DELETE  FROM buku WHERE id_buku = '".$_GET['id_buku']."'";//hapus user berdasarkan input nama user
$hasil= mysqli_query($koneksi, $sql);
header('Location:buku_admin.php');
?>