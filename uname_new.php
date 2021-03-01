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

$un=$_POST['n_utilizator'];
$parola_1=$_POST['parola_1'];

$ok=1;

if(empty($un)){
  echo("<script>alert('Insert the username')</script>");
   echo("<script>window.location = 'uname.php';</script>");
  $ok=0;
}
if(empty($parola_1)){
  echo("<script>alert('Insert the password')</script>");
   echo("<script>window.location = 'uname.php';</script>");
  $ok=0;
}
if($ok==1){
  $query="SELECT * FROM users WHERE username='$un'";
  $result=$connect->query($query) or die("Error".$connect->error);
  $y=mysqli_fetch_assoc($result);
  if(!$y){
            $query="SELECT * FROM users WHERE id=$uid";
            $result=mysqli_query($connect,$query);
            if($result){
              if($row=mysqli_fetch_assoc($result)){
                  if($row['parola']==$parola_1){
                    $que="UPDATE users SET username='$un' WHERE id='$uid'";
                    $rez=$connect->query($que) or die("Error".$connect->error);
                    if($rez){
                     session_destroy();
                     echo("<script>alert('You changed your username!')</script>");
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
        else{
          echo("<script>alert('There was an error')</script>");
          echo("<script>window.location = 'uname.php';</script>");
        }
}
else{
  echo("<script>alert('This username already exists!')</script>");
  echo("<script>window.location = 'uname.php';</script>");
}
}
else{
  echo("<script>alert('The data you inserted is wrong, please try again!')</script>");
  echo("<script>window.location = 'uname.php';</script>");
}
?>
