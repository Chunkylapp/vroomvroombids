<?php

include "connection.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

foreach($_SESSION as $result){

}

$query="SELECT * FROM users WHERE email= '$result'";
$email=$connect->query($query);
$row=mysqli_fetch_assoc($email);

$uid=$row['id'];

$email=$_POST['email'];
$parola_1=$_POST['parola_1'];

$ok=1;

if(empty($email)){
  echo("<b>Introduceti emailul.</b><br>");
  $ok=0;
}
if(empty($parola_1)){
  echo("</b>Introduceti parola.</b><br>");
  $ok=0;
}
if($ok==1){
  $query="SELECT * FROM users WHERE email='$email'";
  $result=mysqli_query($connect,$query);
  if(!$result){
            $query="SELECT * FROM users WHERE id=$uid";
            $result=mysqli_query($connect,$query);
            if($result){
              if($row=mysqli_fetch_assoc($result)){
                  if($row['parola']==$parola_1){
                    $que="UPDATE users SET email='$email' WHERE id='$uid'";
                    $rez=$connect->query($que) or die("Error in saving image".$connect->error);
                    if($rez){
                      session_destroy();
                      echo("<script>alert('You changed your email. Log back in with your new email!')</script>");
                      echo("<script>window.location = 'login.php';</script>");
                      exit;
                    }
                  }
                }
                else{
                  echo("<script>alert('The password is wrong')</script>");
                  echo("<script>window.location = 'name.php';</script>");
                }
          }
        }
        else{
          echo("<script>alert('This email already exists!')</script>");
          echo("<script>window.location = 'email.php';</script>");
        }
}
else{
  echo("<script>alert('The data you inserted is wrong, please try again!')</script>");
  echo("<script>window.location = 'email.php';</script>");
}
?>
