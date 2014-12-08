<?php
//koneksi database
define( "DB_SERVER", "localhost" );
define( "DB_USER", "root" );
define( "DB_PASS", "" );
define( "DB_NAME", "uas_web" );

$koneksi= mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );

	if(mysqli_connect_errno()){
		die("koneksi gagal: ".
		mysqli_connect_error());
		} else{
		
		}
	

?>