<?php //filename: index.php
include("koneksi.php");
		
$sql="SELECT * FROM DB_NAME";
$hasil=mysqli_query($koneksi, $sql);
?>
<html>
<head>
	<title>BlueScreen Library</title>
</head>
<body>

</body>
</html>
<?php
if(isset($koneksi)) { 
	// 5. Close connection
	mysqli_close($koneksi);
}
?>
