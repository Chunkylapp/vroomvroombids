<?php

include "connection.php";

$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$email=$_POST['email'];
$data_nastere=$_POST['data_nastere'];
$username=$_POST['n_utilizator'];
$parola_1=$_POST['parola_1'];
$parola_2=$_POST['parola_2'];

$ok=1;

$alert="";

if(strlen($username)<6){
  echo("<script>alert('The username must be at least 6 characters long')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}

if(strlen($parola_1)<8){
  echo("<script>alert('The password must be at least 8 characters long')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}

if(empty($nume)){
  echo("<script>alert('Please insert your surname')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}
if(empty($prenume)){
  echo("<script>alert('Please insert your name')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}
if(empty($email)){
  echo("<script>alert('Please insert your email')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}
if(empty($data_nastere)){
  echo("<script>alert('Please insert your date of birth')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}
if(empty($username)){
  echo("<script>alert('Please insert your username')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}
if(empty($parola_1)){
  echo("<script>alert('Please insert your password')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}

if(strcmp($parola_1,$parola_2)!=0){
  echo("<script>alert('The passwrods you enter don't match')</script>");
  echo("<script>window.location = 'register.php';</script>");
    $ok=0;
}
if(empty($_FILES["pfp"]["name"])){
  echo("<script>alert('Please insert a profile picture')</script>");
  echo("<script>window.location = 'register.php';</script>");
  $ok=0;
}
if($ok==1){
  $query="SELECT * FROM users WHERE trim(email)=trim('$email')";
  $result=mysqli_query($connect,$query);
  if($result){
    if($row=mysqli_fetch_assoc($result)){
      echo("<script>alert('The email is already registered!')</script>");
      echo("<script>window.location = 'register.php';</script>");
      }
      else{
        $query="SELECT * FROM users WHERE trim(username)=trim('$username')";
        $result=mysqli_query($connect,$query);
        if($result){
          if($row=mysqli_fetch_assoc($result)){
            echo("<script>alert('The username is already taken!')</script>");
            echo("<script>window.location = 'register.php';</script>");
          }
          else{
            $temp = explode(".", $_FILES["pfp"]["name"]);
            $newfilename = $username . '.' . end($temp);
            $target="profile_pics/".$newfilename;
            $image=$_FILES['pfp']['name'];
            $querry="INSERT INTO users (nume,prenume,email,data_nastere,username,parola,profile_pic) VALUES ('$nume','$prenume','$email','$data_nastere','$username','$parola_1','$newfilename')";
            if(!mysqli_query($connect,$querry)) die(mysqli_error());
            else{
              if(move_uploaded_file($_FILES['pfp']['tmp_name'],$target)){
                $_SESSION['submited']="Data submitted";
                /*$subject="Vroom Vroom Bids registration";
                $message="Thank you for registering! Your account has been activated and you can start bidding!";
                $headers = 'From: vroomvroom@bids.com' . "\r\n" .'Reply-To: tccz658@gmail.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
                mail($email,$subject,$message,$headers);*/
                echo("<script>alert('You have successfully registered!')</script>");
                echo("<script>window.location = 'login.php';</script>");
              }
              else{
                echo "<b>There was an erorr</b><br>";
              }
            }
          }
    }
  }
}
}
else{
  echo("<script>alert('Something went wrong')</script>");
  echo("<script>window.location = 'register.php';</script>");
}
?>
