<?php
include "connection.php";

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

$email=$_POST['email'];
$parola=$_POST['parola'];

$ok=1;

$token_login=0;

if(empty($email)){
  echo("<script>alert('Please insert the email!')</script>");
  echo("<script>window.location = 'login.php';</script>");
  $ok=0;
}
if(empty($parola)){
  echo("<script>alert('Please insert the password!')</script>");
  echo("<script>window.location = 'login.php';</script>");
  $ok=0;
}
if($ok==1){
  $query="SELECT * FROM users WHERE trim(email)=trim('$email') AND trim(parola)=trim('$parola')";
  $result=mysqli_query($connect,$query);
  if($result){
    if($row=mysqli_fetch_assoc($result)){
      $query="SELECT id FROM users WHERE trim(email)=trim('$email') AND trim(parola)=trim('$parola')";
      $result=mysqli_query($connect,$query);
      $id=mysqli_fetch_assoc($result);
      $id_user=$id['id'];
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $id_user;
      $_SESSION["email"] = $email;
      echo("<script>alert('You have successfully logged in!')</script>");
      echo("<script>window.location = 'welcome.php';</script>");
    }
    else{
      echo("<script>alert('The data you inserted is wrong, please try again!')</script>");
      echo("<script>window.location = 'login.php';</script>");
    }
  }
}

?>
