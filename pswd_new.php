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


$parola_3=$_POST['parola_3'];;
$parola_2=$_POST['parola_2'];
$parola_1=$_POST['parola_1'];

$ok=1;

if(empty($parola_1)){
  echo("milsugi");
  echo("<script>alert('Insert the password')</script>");
   echo("<script>window.location = 'pswd.php'';</script>");
  $ok=0;
}
if(empty($parola_2)){
  echo("<script>alert('Insert the new password')</script>");
  echo("<script>window.location = 'pswd.php';</script>");
  $ok=0;
}
if(empty($parola_3)){
  echo("<script>alert('Insert the new password again')</script>");
   echo("<script>window.location = 'pswd.php'';</script>");
  $ok=0;
}

if(strcmp($parola_3,$parola_2)!=0){
  echo("<script>alert('The password are different')</script>");
   echo("<script>window.location = 'pswd.php'';</script>");
  $ok=0;
}

if(strcmp($parola_1,$parola_2)==0){
  echo("<script>alert('The new password is the same as the old one')</script>");
   echo("<script>window.location = 'pswd.php'';</script>");
  $ok=0;
}

if($ok==1){
            $query="SELECT * FROM users WHERE id=$uid";
            $result=mysqli_query($connect,$query);
            if($result){
              if($row=mysqli_fetch_assoc($result)){
                  if($row['parola']==$parola_1){
                    $que="UPDATE users SET parola='$parola_2' WHERE id='$uid'";
                    $rez=$connect->query($que) or die("Error".$connect->error);
                    if($rez){
                     session_destroy();
                     echo("<script>alert('You changed your password!')</script>");
                      echo("<script>window.location = 'login.php';</script>");
                      exit;
                    }
                  }
                  else{
                    echo("<script>alert('The password is wrong')</script>");
                    echo("<script>window.location = 'pswd.php';</script>");
                  }
                }
                else{
                  echo("<script>alert('There was an error')</script>");
                  echo("<script>window.location = 'pswd.php';</script>");
              }
            }
}
else{
  echo("<script>alert('There was an error')</script>");
  echo("<script>window.location = 'pswd.php';</script>");
}
?>
