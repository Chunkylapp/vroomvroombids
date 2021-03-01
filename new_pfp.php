<?php
include "connection.php";
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if(empty($_FILES["pfp"]["name"])){
  echo("<script>alert('Please insert a profile picture')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}

foreach($_SESSION as $result){

}

$query="SELECT * FROM users WHERE email= '$result'";
$email=$connect->query($query);
$row=mysqli_fetch_assoc($email);

$old_pfp_name=$row['profile_pic'];
$uid=$row['id'];
$username=$row['username'];

if(!unlink("profile_pics/".$old_pfp_name)){
  echo("<script>alert('There was an error!')</script>");
  ///echo("<script>window.location = 'pfp.php';</script>");
}

$temp = explode(".", $_FILES["pfp"]["name"]);
$new_pfp_name = $username . '.' . end($temp);
$target="profile_pics/".$new_pfp_name;
$image=$_FILES['pfp']['name'];

$query_pics="UPDATE users SET profile_pic='$new_pfp_name' WHERE id=$uid";

if(!mysqli_query($connect,$query_pics)) die(mysqli_error());
else{
    if(move_uploaded_file($_FILES['pfp']['tmp_name'],$target)){
      $_SESSION['submited']="Data submitted";
      session_destroy();
      echo("<script>alert('The profile picture was changed!')</script>");
      echo("<script>window.location = 'login.php';</script>");
    }
    else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
}

 ?>
