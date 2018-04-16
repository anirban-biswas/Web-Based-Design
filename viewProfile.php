    <!DOCTYPE html>
	<?php
		require 'connect.php';
		require 'core.php';
		
		$parts = parse_url($_SERVER['REQUEST_URI']);
		parse_str($parts['query'], $query);
		$name = $query['user'];
	?>

    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href= "style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    </head>
    <body>
        
    <div  class="icon-bar" >
      <a href="index.php"><i class="fa fa-home fa-2x"></i>Home</a>
      <a class="active" href="profile.php"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.php"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a href="groups.php"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.php"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log out</a> 
    </div>
        
    <a href="index.php"><h1 class="title titlebg position">Study Group</h1></a>
    <?php
		$query = "SELECT * FROM `user` WHERE `username` = '".mysqli_real_escape_string($conn, $name)."'";
		if($query_run = mysqli_query($conn, $query))
		{
			$row = mysqli_fetch_assoc($query_run);
		}
		$schoolQuery = "SELECT `name` FROM `school` WHERE `id` = '".mysqli_real_escape_string($conn, $row['school'])."'";
		if($row['school'] != '')
		{
			if($squery_run = mysqli_query($conn, $schoolQuery))
			{
				$Srow = mysqli_fetch_assoc($squery_run);
				$school = $Srow['name'];
			}
			else $school = 'School N/A';
		}
		else $school = 'School N/A';
	?>
    <div class="profile">
      <img src="avatar.png"/>
      <h3><?php echo $row['username']; ?> </h3>
      <p><?php echo $school ?></p>
      <p><?php echo $row['First Name']." ".$row['Last Name'] ?></p>
      <hr>
      <button>Edit profile</button>
    </div>

    <div class="skills">
      <h3>Skills</h3>
      <h4>Strengths</h4>
         <div class="boxed">
            <p>Topic 1</p>
            <p>Topic 2</p>
            <p>Topic 3</p>
         </div>
      <h4>Weaknesses</h4>
         <div class="boxed">
            <p>Topic 1</p>
            <p>Topic 2</p>
         </div>
         <button>Edit Skills</button>
    </div>
        
    </body>
    </html>
