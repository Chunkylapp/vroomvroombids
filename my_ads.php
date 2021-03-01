<html>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <title>VroomVroomBids.com</title>
  <link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body class="body">
  <div class="title_wrapper">
    <div class="login_register">
      <form action="welcome.php">
      <form action="profile.php">
        <button class="profile"><b>Back</b></button>
      </form>
    </div>
    <h1 class="title">Vroom Vroom Bids</h1>
    <h2 class="under_title">- The best auction site to sell your motor vehicle</h2>
  </div>
<div class="cars">
  <?php
  include "connection.php";

  foreach ($_SESSION as $result)
  {

  }
  $errors="";
  $query="SELECT * FROM users WHERE email= '$result'";
  $email=$connect->query($query);
  $roww=mysqli_fetch_assoc($email);
  $id =$roww['id'];
  $query="SELECT * FROM vehicles WHERE user_id=$id";
  $result=mysqli_query($connect,$query);
  if($result){
    if(mysqli_num_rows($result) > 0){
          while($row=mysqli_fetch_assoc($result)){
                $iddd=$row['id'];
                $que = "SELECT * FROM vehicle_pics WHERE ad_id=$iddd AND is_first=1";
                $e=mysqli_query($connect,$que);
                $r=mysqli_fetch_assoc($e);
                echo("<br>");
                echo("<div class='ad'>");
                echo("<a href='car_ad.php?car_id=$iddd'><img src='ad_pictures/".$r['pic']."' class='pic'></a>");
                echo("<div class='car_info'>");
                echo("<div class='m_m_y'><b>".$row['year'].' ');
                echo(ucfirst($row['make'].' '));
                echo($row['model'].'</b><br></div>');
                echo("<br>");
                echo("<b><form class='bid_form' method='post' action='delete_ad.php'><input type='hidden' value='$iddd' name='ad_id'><button type='submit' class='bid_button' name='btn'>Delete ad</button></form></b>");
                echo("<div class='data_table'><b> Mileage: </b>".$row['mileage']." miles<br>");
                echo("<b> Fuel: </b>".$row['fuel_type']."<br>");
                echo("<b> Transmission: </b>".$row['transmission']."<br>");
                echo("<b> Power: </b>".$row['horsepower']." HP<br>");
                echo("<b> Color: </b>".$row['color']."<br>");
                echo("<b> VIN: </b>".$row['vin']."<br>");
                echo("<b> Reserve: </b>".$row['reserve']." $<br>");
                echo("<b> Description: </b>".$row['description']."<br>");
                echo("<b> Location: ".$row['location_country'].", ");
                echo($row['location_state'].", ");
                echo($row['location_city']."</b><br><br>");
                $now = new DateTime("now");
                $future_date= new DateTime($row['ending_time']);
                if($now<=$future_date){
                echo("<b> Current bid: </b>".$row['bid_price']." $<br>");
                echo("<b>Time remaining : ");
                $interval = date_diff($now, $future_date);
                echo($interval->format('%d days %H hours %i minutes'));
                }
                else{
                  echo("<b>The auction has ended</b><br>");
                  echo("<b> Winning bid: </b>".$row['bid_price']);
                  $winner_id=$row['bid_id'];
                  $quue="SELECT * FROM users WHERE id=$winner_id";
                  $rez=mysqli_query($connect,$quue);
                  if($rez){
                    $rqw=mysqli_fetch_assoc($rez);
                    echo("<b><br>The winner is: ".$rqw['prenume']." ".$rqw['nume']."<br>Email: ".$rqw['email']."</b>");
                  }
                }
                echo("</div>");
                echo("<div class='clearfix'></div>");
                echo("<br>");echo("<br>");
            }
    }
  }
  else{
    echo("<b>You do not have any ads.</b>");
  }
  ?>
</div>
</body>
</html>
