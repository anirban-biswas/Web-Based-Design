    <!DOCTYPE html>
<?php
	require 'core.php';
	require 'connect.php';
?>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
<title>GROUPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    </head>
    <body>
        <section>
            
    <div  class="icon-bar">
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
				
		?>

            <div class= "group" >
                <a href = "createGroup.php" class = "button"><input type="submit" name="Create" value="Create a New Group" /></a>
            </div>
            <div class= "table">
			<?php
			while ($row = mysqli_fetch_assoc($query_run))
				{
					$gquery = "SELECT * FROM `groups` WHERE `id` = '".mysqli_real_escape_string($conn, $row['groups'])."'";
					if($gquery_run = mysqli_query($conn, $gquery))
					{
						$grow = mysqli_fetch_assoc($gquery_run);
					$mquery = "SELECT `user` FROM `member` WHERE `groups` = '".mysqli_real_escape_string($conn, $row['groups'])."'";
					if ($grow['name'] != '')
					{
						$groupName = $grow['name'];
					}
					else
					{
						$groupName = 'Un-Named Group';
					}
					if($mquery_run = mysqli_query($conn, $mquery))
					{ 
				$mem_num= mysqli_num_rows($mquery_run);?>
						
                <table>
                <tr class= "gap">
                    <th colspan = "2" ></th>
                    <tr/><tr class = "links">
                    <th colspan= "2"><?php echo $groupName; ?>
                    </th><tr class = "links"><th colspan= "2"><button type= "button">
                    <a href = "#">Name Group</a></button><button type= "button"><a href = "#">Leave Group</a>
                    </button>
                    </th>
                    <tr/><tr>
					<?php
						if($mem_num == 1)
						{
							echo '<th rowspan= "2">Members</th>';
							echo '<td> NO OTHER MEMBERS </td>';
							echo '<tr>';
						}
						else
						{
					?>
						<th rowspan= "<?php echo $mem_num; ?>">Members</th>
						<?php while($mrow = mysqli_fetch_assoc($mquery_run))
						{
							if($mrow['user'] != $_SESSION['user_name'])
							{
							echo '<td><a href = "viewProfile.php?user='. $mrow['user'] .'">'.$mrow['user'].'</a></td>';
							echo '<tr>';
							}
						}
					}
						?>
                    <td><a href="<?php echo "addPerson.php?group=".$row['groups']?>">Add Member</a></td>
                    </tr>
                </table>
				<?php
						}
						else
						{ echo 'error connecting'; }
					}
				}
			}
		}
	?>
            </div>
			
			
            </section>
    </body>
	
    </html>