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
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <title>VroomVroomBids.com</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body class="body">
  <div class="title_wrapper">
    <div class="login_register">
      <form action="logout.php">
        <button class="Login" type="submit"><b>Logout</b></button>
      </form>
      <form action="add_vehicle.php">
        <button class="Register"><b>Add an ad</b></button>
      </form>
      <form action="profile.php">
        <button class="profile"><b>Your Profile</b></button>
      </form>
    </div>
    <h1 class="title">Vroom Vroom Bids</h1>
    <h2 class="under_title">- The best auction site to sell your motor vehicle</h2>
  </div>
  <div class="search_wrapper">
    <div class="search_form">
        <form method="POST" action="search_vehicle.php">
        <input type="text" name="search_string" class="search_text_area" placeholder="Ex. 2017 Chevrolet Corvette">
        <button type="submit" class="search_button_wrapper"><img src="img/search_icon.png" class="search_button"></button>
        </form>
    </div>
  </div>
  <div class="ending_bids">
    <?php

    ?>
  </div>
</body>
</html>
