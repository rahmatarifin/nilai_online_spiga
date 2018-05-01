<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Connections = "localhost";
$database_Connections = "db_akademik";
$username_Connections = "root";
$password_Connections = "";
$Connections = mysql_pconnect($hostname_Connections, $username_Connections, $password_Connections) or trigger_error(mysql_error(),E_USER_ERROR); 
?>