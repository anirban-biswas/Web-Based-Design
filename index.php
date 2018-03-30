<?php
require 'core.php';
require 'connect.php';
if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
{
	//echo 'You\'re logged in <a href="logout.php">Log out </a>';
	//echo getuserfield($conn, 'First Name');
	include 'main.php';
}
else 
{
	include 'Login.php';
}
?>