<?php
$host="localhost";
$user="root";
$pass="sav3gaza.";
$db="db_akademik";

$entries=10;
$waktu=date("Y-m-d H:i:s");
	
$koneksi=mysqli_connect($host,$user,$pass,$db);


if($koneksi){
	echo "Berhasil koneksi";
}else{
	echo "Gagal koneksi";
}
?>
