<?php
include "connection.php";
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$ad_id=$_POST['ad_id'];

echo($ad_id);

$query_veh="DELETE FROM vehicles WHERE id=$ad_id";
$query_del_pics="SELECT * FROM vehicle_pics WHERE ad_id=$ad_id";
$rez=mysqli_query($connect, $query_del_pics);
$i=0;
while($ree=mysqli_fetch_assoc($rez)){
  if(!unlink("ad_pictures/".$ree['pic']))
    echo("There was an error");
  else {
    $i++;
  }
}
echo($i."poze sterse");
$query_pics="DELETE FROM vehicle_pics WHERE ad_id=$ad_id";

if (mysqli_query($connect, $query_veh) && mysqli_query($connect, $query_pics)) {
  echo("<script>alert('The ad has been deleted!')</script>");
  echo("<script>window.location = 'my_ads.php';</script>");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


 ?>
