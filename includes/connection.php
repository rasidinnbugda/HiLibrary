<?php

$dbname = "rasidinbugda";
$dbuser = "root";
$dbpassword = "";
$server = "localhost";

define('DB_NAME','hilibrary');
define('DB_USER','root');
define('DB_PASS','');
define('DB_SERVER','localhost');
define('DB_CHARSET','utf8mb4');


try {
	$db = new PDO("mysql:host=".DB_SERVER."; dbname=".DB_NAME."; charset=".DB_CHARSET.";",DB_USER,DB_PASS);
} catch (PDOException $e) {
	echo "<center><b>Veritabanına bağlantı yapılamadı</b></center>"; $e->getMessage();
}

?>