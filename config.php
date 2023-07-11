<?php

$dbHost = "localhost";
$dbName = "maklumatpekerja";
$dbUsername = "root";
$dbPassword = "";

$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$db) {
	echo "Connection failed!";
}
?>