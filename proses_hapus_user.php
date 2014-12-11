<?php
include("koneksi.php");

$sql="DELETE  FROM user WHERE id_user = '".$_GET['id_user']."'";//hapus user berdasarkan input nama user
$hasil= mysqli_query($koneksi, $sql);
header('Location:user.php');
?>