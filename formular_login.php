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
  echo("<b>Introduceti emailul.</b><br>");
  $ok=0;
}
if(empty($parola)){
  echo("</b>Introduceti parola.</b><br>");
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
      echo("<script>alert('Ati fost logat cu succes!')</script>");
      echo("<script>window.location = 'welcome.php';</script>");
    }
    else{
      echo("<b>Numele si utilizatorul sunt gresite</b>");
    }
  }
}

?>
