<?php
include "connection.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

foreach($_SESSION as $result){

}
$errors="";
$query="SELECT * FROM users WHERE email= '$result'";
$email=$connect->query($query);
$row=mysqli_fetch_assoc($email);

$bid=$_POST['bid'];
$ad_id=$_POST['ad_id'];
$person_id=$row['id'];
$time1 = new DateTime("now");
$qu="SELECT * FROM vehicles WHERE id=$ad_id";
$r=mysqli_query($connect,$qu);
$a=mysqli_fetch_assoc($r);
$future_date= new DateTime($a['ending_time']);
if($time1<$future_date){
    if($bid>$a['bid_price']){
      $que="UPDATE vehicles SET bid_price=$bid, bid_id=$person_id WHERE id=$ad_id";
      $res=mysqli_query($connect,$que);
      if($res){
        echo("<script>alert('Your bid has been succesfully placed!')</script>");
        echo("<script>window.location = 'welcome.php';</script>");
      }
      else{
        echo("<script>alert('There was an error!')</script>");
        echo("<script>window.location = 'welcome.php';</script>");
      }
    }
    else{
      echo("<script>alert('Please insert a value higher than the last bid!')</script>");
      echo("<script>window.location = 'welcome.php';</script>");
    }
}
else{
  echo("<script>alert('The auction has ended!')</script>");
  echo("<script>window.location = 'welcome.php';</script>");
}

 ?>
