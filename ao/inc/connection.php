<?
require_once('config.php');

# Database to host connection for ao (Agadoth Online)
$dbh_ao=mysql_connect($server,$username_mysql,$password_mysql)
or die('Error: mysql_connect:'.mysql_error());

mysql_select_db($database_mysql,$dbh_ao)
or die('Error: mysql_select_db:'.mysql_error())
?>
