<!DOCTYPE html>

<html>
<head>
  <title>EDIT PROFILE</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="C:/Users/shreya thumma/Desktop/STUDY GROUP/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

</head>
<body>
    
    <div  class="icon-bar" >
      <a href="main.html"><i class="fa fa-home fa-2x"></i>Home</a>
      <a class="active" href="profile.html"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.html"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a href="groups.html"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.html"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Sign out</a> 
   </div>

   <a href="main.php"><h1 class="title titlebg position">Study Group</h1></a>
    
    <div>
    <form action="profile.php">
      <img class="profileImage" src="avatar.png"/>
      <div class="ProfileBox">
      <input type="text" name="Name" value="Name" ><br>
      <input type="text" name="College" value="College"><br>
      <input type="text" name="Major" value="Major"><br>
      <button>Save</button>
      </div>
    </form>
    </div>

    <div class="skills">
     <a href="editskills.php"><button>Edit Skills</button></a>
      
      <table>
          <tr>
            <th>Subject</th>
            <th>Strengths</th>
            <th>Weaknesses</th>
          </tr>
          <tr>
            <td>Subject 1</td>
            <td>Strength 1, Strength2, Strength 3, Strength 4, Strength 5</td>
            <td>Weakness 1, Weaknss2, Weakness 3, Weakness 4, Weakness 5</td>
          <tr>
            <td>Subject 2</td>
            <td>Strength 1, Strength2...</td>
            <td>Weakness 1, Weaknss2...</td>
          </tr>
          <tr>
            <td>Subject 3</td>
            <td>Strength 1, Strength2...</td>
            <td>Weakness 1, Weaknss2...</td>
          </tr>
          <tr>
            <td>Subject 4</td>
            <td>Strength 1, Strength2...</td>
            <td>Weakness 1, Weaknss2...</td>
          </tr>
          <tr>
            <td>Subject 5</td>
            <td>Strength 1, Strength2...</td>
            <td>Weakness 1, Weaknss2...</td>
          </tr>
        </table>
        </div>
    </div>
    

</body>
</html>
