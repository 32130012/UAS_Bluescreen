<?php
include("koneksi.php");

$sql="DELETE  FROM user WHERE nama = '$_POST[nama]'";//hapus user berdasarkan input nama user
$hasil= mysqli_query($koneksi, $sql);

?>