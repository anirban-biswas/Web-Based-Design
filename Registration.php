<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <?php
		$dbhost = '127.0.0.1';
		$dbuser = 'root';
		$dbpass = '';
		$mysqldb = 'studygroup';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ) {
				die('Could not connect: ');
			}
		mysqli_select_db($conn, $mysqldb) or die('Could not connect');
			?>
    <section>
    <div class="SignUpbox">
        <h3 class = "Lastminute" >Registration Form</h3>
        <?php
			
				$Squery = "SELECT `name` FROM `school`";
				if(isset($_POST['username'], $_POST['lastname'], $_POST['submit'],
						 $_POST['password'], $_POST['rpassword'], $_POST['email'], $_POST['firstname']))
				{
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$rpassword = $_POST['rpassword'];
					$email = $_POST['email'];
					if(isset ($_POST['school']))
					{$school = $_POST['school'];}
						if(!empty($username) && !empty($firstname) && !empty($lastname) && !empty($password) && !empty($rpassword) && !empty($email))
						{
							$Uquery = "SELECT `username` FROM `user` WHERE `username` = '".mysqli_real_escape_string($conn, $username)."'";
							$Equery = "SELECT `email` FROM `user` WHERE `email` = '".mysqli_real_escape_string($conn, $email)."'";
							if(mysqli_num_rows(mysqli_query($conn, $Uquery)) == 0)
							{
								if(mysqli_num_rows(mysqli_query($conn, $Equery)) == 0)
								{
									if($school == 'none')
									{
										$query = "INSERT INTO `user` VALUES('".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn, $password)."','".mysqli_real_escape_string($conn, $firstname)."','".mysqli_real_escape_string($conn, $lastname)."','".mysqli_real_escape_string($conn, $email)."',NULL)";
										
										if($query_run = mysqli_query($conn, $query))
										{
											$_SESSION['user_name'] = $username;
											header('Location: reg.php');
										}
										else
											echo 'what';
									}
									else{
										$school_query = "SELECT `id` FROM `school` WHERE `name` = '".mysqli_real_escape_string($conn, $school)."'";
										if($schoolq = $query_run = mysqli_query($conn, $school_query))
										{
											$row = mysqli_fetch_assoc($schoolq);
											$schoolID = $row['id'];
											$query = "INSERT INTO `user` VALUES('".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn, $password)."','".mysqli_real_escape_string($conn, $firstname)."','".mysqli_real_escape_string($conn, $lastname)."','".mysqli_real_escape_string($conn, $email)."','".mysqli_real_escape_string($conn, $schoolID)."')";
										}
										if($query_run = mysqli_query($conn, $query))
										{
											$_SESSION['user_name'] = $username;
											header('Location: reg.php');
										}
										else
											echo 'why '. $query;
									}
								}
								else{
									echo 'email is already being used';
								}
							}
								else{
									echo 'username is already taken';
								}
						}
						else
							echo 'please input all required fields';
				}
			?>
        <form action = "<?php echo $current_file ?>" method="POST">
            <table class= "formbox">
                <h4>
                <tr>
            <th>First Name<br>
            <input type="text" name="firstname" id = "firstname" value = "<?php echo @$firstname ?>" placeholder="  Enter first name" /></th>
            <th>Last Name<br>
                <input type="text" name="lastname" value = "<?php echo @$lastname ?>" placeholder="  Enter last name" /></th></tr>
            <tr><th>Email Address<br>
                <input type="text" name="email" value = "<?php echo @$email ?>" placeholder="  Enter your email" /></th>
                <th>University/College (optional)<br>
            <select name="school">
			<?php
				if ($Squery_run = mysqli_query($conn, $Squery))
				{
					if(mysqli_num_rows($Squery_run) > 0)
					{
						echo '<option value= "none"> none';
						while ( $row = mysqli_fetch_assoc($Squery_run))
						{
							echo '<option value= "'.$row["name"].'"> '.$row["name"].'';
						}
					}
					else
						echo '<option value="notAvailable">Selection currently empty</option>';
					
				}
				else
				{
					echo '<option value="notAvailable">Selection currently empty</option>';
				}
			?>
			</select></th>
            </tr>
            <tr><th>Create Username<br>
                    <input type="text" name="username" value = "<?php  echo @$username ?>" placeholder="  Enter Username" /></th>
                <th></th></tr>
            <tr><th>Password<br>
            <input type="password" name="password" placeholder="  Enter Password" /></th>
            <th>Re-Enter Password<br>
                <input type="password" name="rpassword" placeholder="  ReEnter Password" /></th></tr></h4>
            <tr><th><input type="submit" name="submit" value="Sign Up" />
            <p>Already a member? <a href="index.php"> Sign In here!</a></p></th></tr>
                </table>
        </form>
            </div>
        </section>
</body>
</html>