<?php
	require 'core.php';
	require 'connect.php';
	
	$parts = parse_url($_SERVER['REQUEST_URI']);
		parse_str($parts['query'], $query);
		$name = $query['user'];
		
		$query = "DELETE FROM `follows` WHERE `follower` = '".mysqli_real_escape_string($conn, $_SESSION['user_name'])."' AND `following` = '".mysqli_real_escape_string($conn, $name)."'";
		if($query_run = mysqli_query($conn, $query))
		{
			header('Location: People.php');
		}
		else
		{
			echo "Error Could not run ";
			echo '<a href="index.php">Return to Main page</a>';
		}
?>