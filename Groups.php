    <!DOCTYPE html>
<?php
	require 'core.php';
	require 'connect.php';
?>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href= "style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
	
		<title>STUDY GROUP</title>
    </head>
    <body>
        <section>
            
        <div  class="icon-bar" >
      <a href="index.php"><i class="fa fa-home fa-2x"></i>Home</a>
      <a href="profile.php"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.php"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a class="active" href="groups.php"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.php"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log out</a> 
</div>

	<?php
		$query = "SELECT * FROM `member` WHERE `user` = '".mysqli_real_escape_string($conn, $_SESSION['user_name'])."'";
		if($query_run = mysqli_query($conn, $query))
		{
			if(mysqli_num_rows($query_run) == 0)
			{
				echo 'join a group, nerd';
			}
			else{
				while ($row = mysqli_fetch_assoc($query_run))
				{
					$gquery = "SELECT * FROM `groups` WHERE `id` = '".mysqli_real_escape_string($conn, $row['groups'])."'";
					if($gquery_run = mysqli_query($conn, $gquery))
					{
						$grow = mysqli_fetch_assoc($gquery_run);
					$mquery = "SELECT `user` FROM `member` WHERE `groups` = '".mysqli_real_escape_string($conn, $row['groups'])."'";
					if ($grow['name'] != 'NULL')
					{
						$groupName = $grow['name'];
					}
					else
					{
						$groupName = 'temp';
					}
					if($mquery_run = mysqli_query($conn, $mquery))
					{
						
		?>

            <div class= "group">
                <input type="submit" name="Create" value="Create a Group" />
            </div>
            <div class= "table">
                <table>
                <tr>
                    <th colspan= "2">"<?php echo $groupName ?>"</th>
                    <tr/><tr>
                    <th rowspan= "3">Members</th>
					<?php while($mrow = mysqli_fetch_assoc($mquery_run))
					{
						if($row['user'] != $_SESSION['user_name'])
						{
						echo "<td>". $row['user'] ."</td>";
						echo "<tr>";
						}
					}
					?>
                    <td><a href="people.php">Add another Member</a></td>
                    </tr>
                </table>
            </div>
            </section>
    </body>
	<?php
						}
						else
						{ echo 'error connecting'; }
					}
				}
			}
		}
	?>
    </html>