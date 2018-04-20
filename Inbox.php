<!DOCTYPE html> 
<html>

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

	<title>Inbox</title>
</head>

<body> 

<div  class="icon-bar" >
      <a href="index.php"><i class="fa fa-home fa-2x"></i>Home</a>

      <a href="profile.php"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a class="active" href="inbox.php"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a href="groups.php"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.php"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Sign out</a> 
</div>

<div>
  <a href="main.php"><h1 class= "title titlebg">Study Group</h1></a>
</div>


<div class="inbox">
  <div class="messagebox" onclick="openMessage()">
     <img src="avatar.png"/>
     <h3>Name</h3></a>
     <p>This is a template for message box. This is a template for message box.</p>
  </div>
</div>

   <div class="chatbox" id="chat">
      <a href="profile.php"><h3>Name</h3></a>
      <div class="chatboxMessages" id="messages">
          <div id="sendBox">
            <p id="sendMessage"></p>
          </div>
          <div id="receiveBox">
             <p id="messageReceived"></p>
          </div>
   </div>

  <div class="typeMessage">
  <textarea name="message" placeholder="Type message.." id="textarea"></textarea>
  <button type="button" id="sendButton" onclick="sendMessage()">Send</button>
  </div>

</div>

<script type="text/javascript">

  function openMessage(){
    document.getElementById("chat").style.visibility = "visible";
  }

  function sendMessage(){
    var message = document.getElementById("textarea").value;
    if(message.length > 0){
      document.getElementById("sendBox").classList.add("send");
      document.getElementById("sendMessage").innerHTML = message;
    }
  }

</script>

</body>
</html>
