<?php
		require 'connect.php';
		require 'core.php';
		
		$parts = parse_url($_SERVER['REQUEST_URI']);
		parse_str($parts['query'], $query);
		$name = $query['user'];
		
		$query = "INSERT INTO `follows` (`follower`, `following`) VALUES ('".mysqli_real_escape_string($conn, $_SESSION['user_name'])."', '".mysqli_real_escape_string($conn, $name)."')";
	if($query_run = mysqli_query($conn, $query))
		header('Location: people.php');
	else
		{
			echo "Error Could not run ";
			echo '<a href="index.php">Return to Main page</a>';
		}
?>