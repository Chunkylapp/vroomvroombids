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


$ok=1;

if(empty($_POST['nume'])){
  echo("milsugi");
  echo("<script>alert('Insert the name')</script>");
   echo("<script>window.location = 'name.php'';</script>");
  $ok=0;
}
if(empty($_POST['prenume'])){
  echo("<script>alert('Insert the surname')</script>");
  echo("<script>window.location = 'name.php';</script>");
  $ok=0;
}
if(empty($_POST['parola_1'])){
  echo("<script>alert('Insert the password')</script>");
   echo("<script>window.location = 'name.php'';</script>");
  $ok=0;
}

$name=$_POST['nume'];
$surname=$_POST['prenume'];
$parola_1=$_POST['parola_1'];

if($ok==1){
            $query="SELECT * FROM users WHERE id=$uid";
            $result=mysqli_query($connect,$query);
            if($result){
              if($row=mysqli_fetch_assoc($result)){
                  if($row['parola']==$parola_1){
                    $que="UPDATE users SET prenume='$name',nume='$surname' WHERE id='$uid'";
                    $rez=$connect->query($que) or die("Error".$connect->error);
                    if($rez){
                     session_destroy();
                     echo("<script>alert('You changed your name!')</script>");
                      echo("<script>window.location = 'login.php';</script>");
                      exit;
                    }
                  }
                  else{
                    echo("<script>alert('The password is wrong')</script>");
                    echo("<script>window.location = 'name.php';</script>");
                  }
                }
                else{
                  echo("<script>alert('There was an error')</script>");
                  echo("<script>window.location = 'name.php';</script>");
              }
            }
}
else{
  echo("<script>alert('There was an error')</script>");
  echo("<script>window.location = 'name.php';</script>");
}
?>
