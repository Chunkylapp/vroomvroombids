<?php
include "connection.php";

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
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
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="body">
  <div class="title_wrapper">
    <h1 class="title">Vroom Vroom Bids</h1>
    <h2 class="under_title">- The best auction site to sell your motor vehicle</h2>
  </div>
  <div class="form_wrapper">
    <form method="POST" action="formular_login.php" class="form">
   <b>Email:<input type="email" name="email" class="input"><br>
      Parola:<input type="password" name="parola" class="input"><br>
      <button type="submit" class="button_register"><b>Submit</b></button></b>
    </form>
  </div>
</html>
