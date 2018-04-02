<!DOCTYPE html> 
<html>

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href= "style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

	<title>STUDY GROUP</title>
</head>

<body> 
<div  class="icon-bar" >
      <a class="active" href="main.html"><i class="fa fa-home fa-2x"></i>Home</a>
      <a href="profile.html"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.html"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a href="groups.html"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.html"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="settings.html"><i class="fa fa-cog fa-2x"></i>Settings</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log out</a> 
</div>
	
	<a href="main.php"><h1 class=" title titlebg">Study Group</h1></a>
	
<div class="dropdown">
  <button onclick="dropDown()" class="dropbtn">Select a topic</button>
  <div id="dropDown" class="dropdown-content">
    <a href="#">Topic 1</a>
    <a href="#">Topic 2</a>
    <a href="#">Topic 3</a>
  </div>
</div>

<script>
function dropDown() {
    document.getElementById("dropDown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdown = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdown.length; i++) {
      var openDropdown = dropdown[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
