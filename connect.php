<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'studygroup';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

if (! $conn || !mysqli_select_db($conn, $mysql_db))
	die(mysqli_error($conn));
?>