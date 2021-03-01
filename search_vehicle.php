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
        <button class="Login" type="submit"><b>Home</b></button>
      </form>
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
  <div class="white_line">
  </div>
<div class="cars">
<?php
include "connection.php";


$text=$_POST['search_string'];
  if(!empty($text)){
        $make='';
        $model='';
        $year='';
        $spaces=substr_count($text, ' ');
        ///HERE STARTS THE 2 SPACES BLOCK
        if($spaces==2){
            list($year,$make,$model)=explode(" ",$text);
            //
            $query="SELECT * FROM vehicles WHERE make='$make' AND model='$model' AND year='$year'";
            $result=mysqli_query($connect,$query);
            //
            if(!$result || mysqli_num_rows($result)==0){
              //
              $query="SELECT * FROM vehicles WHERE make='$make' AND model='$model'";
              $result=mysqli_query($connect,$query);
              //
                if(!$result || mysqli_num_rows($result)==0){
                  //
                  $query="SELECT * FROM vehicles WHERE make='$model' AND model='$make'";
                  $result=mysqli_query($connect,$query);
                  //
                  if(!$result || mysqli_num_rows($result)==0){
                    //
                    echo('<b>Sadly the vehicle you are searching for is not in our database.</b>');
                    //
                  }
                }
              }
        }
        ///HERE ENDS THE 2 SPACES BLOCK
        ///
        ///HERE BEGINS THE 1 SPACES BLOCK
        if($spaces==1){
          list($year,$make)=explode(" ",$text);
          if(strpbrk($year, '1234567890')){
              list($year,$make)=explode(" ",$text);
              $query="SELECT * FROM vehicles WHERE make='$make' AND year='$year'";
              $result=mysqli_query($connect,$query);
              if(!$result || mysqli_num_rows($result)==0){
                $query="SELECT * FROM vehicles WHERE model='$make' AND year='$year'";
                $result=mysqli_query($connect,$query);
                if(!$result || mysqli_num_rows($result)==0){
                  //
                  echo('<b>Sadly the vehicle you are searching for is not in our database.</b>');
                  //
                }
              }
          }
          else{
            list($make,$model)=explode(" ",$text);
            $query="SELECT * FROM vehicles WHERE make='$make' AND model='$model'";
            $result=mysqli_query($connect,$query);
            if(!$result){
              $query="SELECT * FROM vehicles WHERE make='$model' AND model='$make'";
              $result=mysqli_query($connect,$query);
              if(!$result || mysqli_num_rows($result)==0){
                //
                echo('<b>Sadly the vehicle you are searching for is not in our database.</b>');
                //
              }
            }
          }
        }
        ///HERE ENDS THE 1 SPACES BLOCK
        ///
        ///HERE STARTS THE 0 SPACES BLOCK
        if($spaces==0){
          $make=$text;
          $query="SELECT * FROM vehicles WHERE model='$make'";
          $result=mysqli_query($connect,$query);
          if(!$result || mysqli_num_rows($result)==0){
            $query="SELECT * FROM vehicles WHERE make='$make'";
            $result=mysqli_query($connect,$query);
            if(!$result || mysqli_num_rows($result)==0){
              //
              echo('<b>Sadly the vehicle you are searching for is not in our database.</b>');
              //
            }
          }
        }
        if($result){
          if(mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_assoc($result)){
                  $time1 = new DateTime("now");
                  $future_date= new DateTime($row['ending_time']);
                  if($time1<$future_date){
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
                        echo("<b><form class='bid_form' method='post' action='bid.php'><input type='hidden' value='$iddd' name='ad_id'><input type='text' name='bid' placeholder='Ex. 1000' class='bid_text' size=5> $  <button type='submit' class='bid_button' name='btn'>Bid</button></form></b>");
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
                      echo("<b> Current bid: </b>".$row['bid_price']." $<br>");
                      echo("<b>Time remaining : ");
                      $now = new DateTime("now");
                      $future_date= new DateTime($row['ending_time']);
                      $interval = date_diff($now, $future_date);
                      echo($interval->format('%d days %H hours %i minutes'));
                      echo("</div>");
                      echo("<div class='clearfix'></div>");
                      echo("<br>");echo("<br>");
                  }
                }
          }
        }
  else{
        echo("<b>Please insert the make and model you are looking for</b>");
  }
}
?>
</div>
</body>
</html>
