<?php
$host = "localhost";
$username = "root";
$password = "1234";
$conn = mysqli_connect($host, $username, $password);

if(!$conn) {
	echo "Can not connect host";
}

$dbName = "webdymic";
$condb = mysqli_select_db($conn,$dbName);

if (!$condb) {
	echo "Can not connect database";
}

mysqli_set_charset($conn, 'utf8');
?>