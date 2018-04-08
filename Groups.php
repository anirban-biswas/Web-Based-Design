    <!DOCTYPE html>

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
      <a href="main.php"><i class="fa fa-home fa-2x"></i>Home</a>
      <a href="profile.php"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.php"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a class="active" href="groups.php"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.php"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log out</a> 
</div>
            <div class= "group">
                <input type="submit" name="Create" value="Create a Group" />
            </div>
            <div class= "table">
                <table>
                <tr>
                    <th colspan= "2">Group Name</th>
                    <tr/><tr>
                    <th rowspan= "3">Members</th>
                    <td>Name of Member1</td>
                    <tr>
                    <td>Name of Member2</td>
                    <tr>
                    <td><a href="people.php">Add another Member</a></td>
                    </tr>
                </table>
            </div>
            </section>
    </body>
    </html>