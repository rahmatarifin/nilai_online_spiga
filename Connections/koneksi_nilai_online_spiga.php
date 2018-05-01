<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_koneksi_nilai_online_spiga = "localhost";
$database_koneksi_nilai_online_spiga = "db_akademik";
$username_koneksi_nilai_online_spiga = "root";
$password_koneksi_nilai_online_spiga = "";
$koneksi_nilai_online_spiga = mysql_pconnect($hostname_koneksi_nilai_online_spiga, $username_koneksi_nilai_online_spiga, $password_koneksi_nilai_online_spiga) or trigger_error(mysql_error(),E_USER_ERROR); 
?>