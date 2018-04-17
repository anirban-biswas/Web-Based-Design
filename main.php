<!DOCTYPE html> 
<html>


<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

	<title>STUDY GROUP</title>
</head>


<body>
    <section>
<div  class="icon-bar" >
      <a class="active" href="index.php"><i class="fa fa-home fa-2x"></i>Home</a>
      <a href="profile.php"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.php"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a href="groups.php"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.php"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log out</a> 
</div>
  <?php
		$takeQuery = "SELECT `subject` FROM `taking` WHERE `user` = '".mysqli_real_escape_string($conn, $_SESSION['user_name'])."'";
		if($tquery_run = mysqli_query($conn, $takeQuery))
		{
			$count = 0;
					
  ?>

  
  <div class="dropdown">
  <button onclick="dropDown()" class="dropbtn">Select a topic</button>
  <div id="dropDown" class="dropdown-content">
  <?php
  while($trow = mysqli_fetch_assoc($tquery_run))
			{
				$count++;
				$subQuery = "SELECT `name` FROM `subject` WHERE `id` = '".mysqli_real_escape_string($conn, $trow['subject'])."'";
				if ($subQuery_run = mysqli_query($conn, $subQuery))
				{
					$subrow = mysqli_fetch_assoc($subQuery_run);
					?>
    <button onclick="btnResult()"><?php echo $subrow['name']; ?></button>
	<?php 
				}
			}
		}
			?>
  </div>
</div>

<div class="resultbox" id="result">
        <img src="avatar.png"/>
        <a href="profile.php"><h3>Name</h3></a>
        <p>College</p>
        <p>Major</p>
        <div class="strengths">
          <h4>Strengths</h4>
          <p>Topic 1</p>
          <p>Topic 2</p>
        </div>
        <div class="weaknesses">
          <h4>Weaknesses</h4>
          <p>Topic 1</p>
          <p>Topic 2</p>
        </div>
        
</div>
<?php
	//	}
?>

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

function btnResult() {
  document.getElementById("result").style.visibility = "visible";
}

</script>
</section>
</body>
</html>
