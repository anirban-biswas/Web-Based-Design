<?php
	require 'connect.php';
	require 'core.php';
	
	echo 'here';
	$cquery = "SELECT COUNT(*) as total FROM `groups`";
	if($cquery_run = mysqli_query($conn, $cquery))
	{
		$crow = mysqli_fetch_assoc($cquery_run);
		$num = $crow['total'] + 1;
		
		$query = "INSERT INTO `groups` (`id` , `name`) VALUES ('".mysqli_real_escape_string($conn, $num)."' , NULL)";
		
		if($query_run = mysqli_query($conn, $query))
		{
			$uquery = "INSERT INTO `member` (`groups`, `user`) VALUES ('".mysqli_real_escape_string($conn, $num)."', '".mysqli_real_escape_string($conn, $_SESSION['user_name'])."')";
			if($query_run = mysqli_query($conn, $uquery))
			{
				header('Location: Groups.php');
			}
		}
		else
		{
			echo 'ruh-roh';
		}
	}
	else
	{
		echo '¿que?';
	}
?>
