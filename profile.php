<html>
<head></head>

<body>
</body>
<html>
<head>
  <title>VroomVroomBids.com</title>
  <link rel="stylesheet" type="text/css" href="css/profile.css">
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
      <form action="update_info.php">
        <button class="mod_email"><b>Update your information</b></button>
      </form>
    </div>
    <h1 class="title">Vroom Vroom Bids</h1>
    <h2 class="under_title">- The best auction site to sell your motor vehicle</h2>
  </div>

  <div class="form_wrapper">
    <?php
      include "connection.php";

      session_start();
      // get current logged in user

      foreach($_SESSION as $result){

      }
      $errors="";
      $query="SELECT * FROM users WHERE email= '$result'";
      $email=$connect->query($query);
      $row=mysqli_fetch_assoc($email);
      echo("<div class='profil'>");
        echo("<div class='img_div'>");
          echo"<img class='pfp'src='profile_pics/" .$row['profile_pic']."'>";
        echo"</div>";
          echo ("<div class='salut'><b>Salut, ".$row['prenume']."!</b></div>");
          echo("<br>");
          
          echo("<br>");
      echo"</div>";
      ?>
  </div>
</html>