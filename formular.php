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

if(strlen($username)<6){
  echo("<b>Numele de utilizator trebuie sa aiba minim 6 caractere.</b><br>");
  $ok=0;
}

if(strlen($parola_1)<8){
  echo("<b>Parola trebuie sa aiba minim 8 caractere.</b><br>");
  $ok=0;
}

if(empty($nume)){
  echo("<b>Introduceti numele.</b><br>");
  $ok=0;
}
if(empty($prenume)){
  echo("<b>Introduceti prenumele.</b><br>");
  $ok=0;
}
if(empty($email)){
  echo("<b>Introduceti emailul.</b><br>");
  $ok=0;
}
if(empty($data_nastere)){
  echo("<b>Introduceti data nasterii.</b><br>");
  $ok=0;
}
if(empty($username)){
  echo("<b>Introduceti numele de utilizator.</b><br>");
  $ok=0;
}
if(empty($parola_1)){
  echo("</b>Introduceti parola.</b><br>");
  $ok=0;
}

if(strcmp($parola_1,$parola_2)!=0){
    echo('<b>Parole diferite</b><br>');
    $ok=0;
}
if(empty($_FILES["pfp"]["name"])){
  echo('<b>Selectati o imagine de profil</br></b>');
  $ok=0;
}
if($ok==1){
  $query="SELECT * FROM users WHERE trim(email)=trim('$email')";
  $result=mysqli_query($connect,$query);
  if($result){
    if($row=mysqli_fetch_assoc($result)){
        echo("<b>Acest email deja exista<b>");
      }
      else{
        $query="SELECT * FROM users WHERE trim(username)=trim('$username')";
        $result=mysqli_query($connect,$query);
        if($result){
          if($row=mysqli_fetch_assoc($result)){
            echo("<b>Acest nume de utilizator deja exista<b>");
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
                $_SESSION['submited']="Datele au fost introduse";
                /*$subject="Vroom Vroom Bids registration";
                $message="Thank you for registering! Your account has been activated and you can start bidding!";
                $headers = 'From: vroomvroom@bids.com' . "\r\n" .'Reply-To: tccz658@gmail.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
                mail($email,$subject,$message,$headers);*/
                echo("<script>alert('Ati fost inregistrat cu succes!')</script>");
                echo("<script>window.location = 'login.php';</script>");
              }
              else{
                echo "<b>A avut loc o eroare</b><br>";
              }
            }
          }
    }
  }
}
}
else{
  echo("<b>Modificati si retrimiteti formularul de inregistrare.</b>");
}
?>
