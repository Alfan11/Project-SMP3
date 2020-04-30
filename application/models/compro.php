<?php

$host 		= "localhost:8080";
$user 		= "root";
$password	= "";
$database	= "db_smp3";

$connect 	= mysql_connect($host,$user,$password);
$select		= mysql_select_db($database,$connect); 

	if ($select) {
		echo "Koneksi berhasil";
	} else {
		echo "Koneksi Gagal";
	} 

}

?>