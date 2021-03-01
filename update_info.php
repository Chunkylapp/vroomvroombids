<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head></head>

<body>
</body>
<html>
<head>
  <title>VroomVroomBids.com</title>
  <link rel="stylesheet" type="text/css" href="css/update_info.css">
</head>
<body class="body">
  <div class="title_wrapper">
    <div class="login_register">
      <form action="profile.php">
        <button class="Login" type="submit"><b>Back</b></button>
      </form>
    </div>
    <h1 class="title">Vroom Vroom Bids</h1>
    <h2 class="under_title">- The best auction site to sell your motor vehicle</h2>
  </div>
  <div class="form_wrapper">
  <div class="but">
    <button class="buton_left" onclick="window.location.href='email.php'"><b>Change my email</b></button>
    <button class="buton_inner" onclick="window.location.href='name.php'"><b>Change my name</b></button>
    <button class="buton_inner" onclick="window.location.href='pswd.php'"><b>Change my password</b></button>
    <button class="buton_right" onclick="window.location.href='uname.php'"><b>Change my username</b></button>
    <button class="buton_right" onclick="window.location.href='pfp.php'"><b>Change my picture</b></button>
  </div>
    </div>
</html>
