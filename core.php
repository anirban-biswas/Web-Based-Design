<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER']))
{
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin() {
	if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
	{
		return true;
	}
	else { return false; }
}

function getuserfield($conn, $field)
{
	$query = "SELECT `$field` FROM `user` WHERE `username` = '$_SESSION[user_name]'";
	if ($query_run = mysqli_query($conn, $query))
	{
		if ( $query_result = mysqli_fetch_assoc($query_run))
		{
			return $query_result[$field];
		}
	}
}
?>