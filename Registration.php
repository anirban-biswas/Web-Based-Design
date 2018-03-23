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
        <div class = "left">
            <div class="formbox">
            <h1>Registration Form</h1>
			<?php
			
				if(isset($_POST['username'], $_POST['lastname'], $_POST['submit'],
						 $_POST['password'], $_POST['rpassword'], $_POST['email'], $_POST['firstname']))
				{
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$rpassword = $_POST['rpassword'];
					$email = $_POST['email'];
					//echo 'cool';
					if(isset ($_POST['school']))
					{$school = $_POST['school'];}
						if(!empty($username) && !empty($firstname) && !empty($lastname) && !empty($password) && !empty($rpassword) && !empty($email))
							echo'cool';
						else
							echo 'please input all required fields';
				}
				else
				{echo 'please input all required fields';}
			?>
        <form action = "Registration.php" method="POST">
			<?php //echo $_POST['username'] ?>
            <h4>First Name<br>
            <input type="text" name="firstname" id = "firstname" value = "<?php echo @$firstname ?>" placeholder="  Enter first name" />
            <br>Last Name<br>
            <input type="text" name="lastname" value = "<?php echo @$lastname ?>" placeholder="  Enter last name" />
            <br>University/College (optional)<br>
            <input type="text" name="school" value = "<?php echo @$school ?>" placeholder="  Enter University/College name" />
            <br>Email Address<br>
            <input type="text" name="email" value = "<?php echo @$email ?>" placeholder="  Enter your email" />
           <!-- <br>Contact Number<br>
            <input type="text" name="number" placeholder="  Enter Contact Number" /></h4> -->
			
      <!--  </form>
            </div>
        </div>
        <div class = "right" >
            <div class="formbox">
        
        <form action = "Registration.php" method ="POST"> -->
            <h4>Create Username<br>
            <input type="text" name="username" value = "<?php  echo @$username ?>" placeholder="  Enter Username" />
            <br>Password<br>
            <input type="password" name="password" placeholder="  Enter Password" />
            <br>Re-Enter Password<br>
            <input type="password" name="rpassword" placeholder="  ReEnter Password" /></h4>
            <input type="submit" name="submit" value="Sign Up" />
            <p>Already a member? <a href="Login.php"> Register here!</a></p>
        </form>
                </div>
            </div>
    </div>
        </section>
</body>
</html>