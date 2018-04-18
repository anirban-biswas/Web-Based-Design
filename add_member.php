<?php
require 'core.php';
require 'connect.php';


$parts = parse_url($_SERVER['REQUEST_URI']);
		parse_str($parts['query'], $query);
		$name = $query['user'];
		$group = $query['group'];
		
		
		$query = "INSERT INTO `member`(`groups`, `user`) VALUES ('".mysqli_real_escape_string($conn, $group)."','".mysqli_real_escape_string($conn, $name)."')";
		if($query_run = mysqli_query($conn, $query))
		{
			header('Location: Groups.php');
		}
		else
		{
			echo "Error Could not run ";
			echo '<a href="index.php">Return to Main page</a>';
		}
?>