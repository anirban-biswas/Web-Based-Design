<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <section>
    <div class="loginbox">
        <div class = "left">
            <h1>Study Group</h1>
            <p>This is a one of a kind platform providing 
            students an opportunity to share their knowledge with their peers. Study Group helps you find peers in your university to do group study. It matches your peers with your need and their need so you can help eachother succeed in your classes.</p>
        </div>
        <div class = "right" >
        <img src="avatar.png" class="avatar" />
            <div class="formbox">
        <h2>Login Here</h2>
		<?php
			if(isset($_POST['username'], $_POST['password']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				if(!empty($username) && !empty($password))
				{
					$query = "SELECT `username` FROM `user` WHERE `username` = '".mysqli_real_escape_string($conn, $username)."' AND `password` = '".mysqli_real_escape_string($conn, $password)."'";
					if ($query_run = mysqli_query($conn, $query))
					{

						$query_num_rows = mysqli_num_rows($query_run);
						if ($query_num_rows == 0)
						{
							echo ' Incorrect Username or Password';
						}
						
						else if ($query_num_rows == 1){
							$row = mysqli_fetch_assoc($query_run);
							$user_name = $row['username'];
							$_SESSION['user_name'] = $user_name;
							header('Location: index.php');
						}
					}
				}
				else{
					echo 'Please enter Username and Password';
				}
			}
		?>
        <form action = "<?php echo $current_file; ?>" method = "POST">
            <h4>Username</h4>
            <input type="text" name="username" placeholder="  Enter Username" />
            <h4>Password</h4>
            <input type="password" name="password" placeholder="  Enter Password" />
            <input type="submit" name="submit" value="Login" />
            <a href="#">Forgot your Password?</a><br />
            <a href="#">Forgot your Username?</a>
            <p>Not a member yet? <a href="reg.php"> Register here!</a></p>
        </form>
                </div>
            </div>
    </div>
        </section>
</body>
</html>