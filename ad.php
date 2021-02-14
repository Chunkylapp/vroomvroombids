<?php
include "connection.php";

session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$make=$_POST['make'];
$model=$_POST['model'];
$year=$_POST['year'];
$mileage=$_POST['mileage'];
$fuel=$_POST['fuel'];
$displacement=$_POST['displacement'];
$power=$_POST['power'];
$transmission=$_POST['transmission'];
$color=$_POST['color'];
$vin=$_POST['vin'];
$description=$_POST['description'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$date=$_POST['date'];
$reserve=$_POST['reserve'];

$ok=1;


if(empty($make)){
      echo("<b>Choose the make of the car.</b><br>");
      $ok=0;
}
if(empty($model)){
      echo("<b>Choose the model of the car.</b><br>");
      $ok=0;
}
if(empty($year)){
      echo("<b>Insert the vehicle's production year.</b><br>");
      $ok=0;
}
if(empty($mileage)){
      echo("<b>Insert the vehicle's current mileage.</b><br>");
      $ok=0;
}
if(empty($fuel)){
      echo("<b>Insert the vehicle's fuel type.</b><br>");
      $ok=0;
}
if(empty($displacement)){
      echo("<b>Insert the vehicle's displacement.</b><br>");
      $ok=0;
}
if(empty($power)){
      echo("<b>Insert the vehicle's power.</b><br>");
      $ok=0;
}
if(empty($transmission)){
      echo("<b>Insert the vehicle's transmission type.</b><br>");
      $ok=0;
}
if(empty($color)){
      echo("<b>Insert the vehicle's color.</b><br>");
      $ok=0;
}
if(empty($vin)){
      echo("<b>Insert the vehicle's VIN.</b><br>");
      $ok=0;
}
if(empty($description)){
      echo("<b>Please write a description of the vehicle.</b><br>");
      $ok=0;
}
if(empty($country)){
      echo("<b>Please enter the vehicle's country.</b><br>");
      $ok=0;
}
if(empty($state)){
      echo("<b>Please enter the vehicle's state.</b><br>");
      $ok=0;
}
if(empty($city)){
      echo("<b>Please enter the vehicle's city.</b><br>");
      $ok=0;
}
if(empty($date)){
      echo("<b>Please enter the date on which you wish the auction to end</b><br>");
      $ok=0;
}
if(empty($_FILES["veh_photos"]["name"])){
      echo('<b>Please enter at least one image of the vehicle.</br></b>');
}

if($ok){
        $bid_price=0;
        $query="SELECT * FROM vehicles WHERE trim(vin)=trim('$vin')";
        $result=mysqli_query($connect,$query);
        if($result){
          if($row=mysqli_fetch_assoc($result)){
              echo("<b>This VIN number is already in our database.<br>Please check if your vehicle is already listed.<br>If not contact the staff via the support button from the home menu.<b>");
            }
              else{
                foreach($_SESSION as $result){

                }
                $errors="";
                $query="SELECT * FROM users WHERE email= '$result'";
                $email=$connect->query($query);
                $row=mysqli_fetch_assoc($email);
                $user_id=$row['id'];
                $query="INSERT INTO vehicles (user_id,make,model,year,mileage,fuel_type,cubic_inches,transmission,horsepower,bid_price,reserve,bid_id,ending_time,color,vin,location_country,location_city,location_state,description) VALUES ('$user_id','$make','$model','$year','$mileage','$fuel','$displacement','$transmission','$power','$bid_price','$reserve','$user_id','$date','$color','$vin','$country','$city','$state','$description')";
                if(!mysqli_query($connect,$query))
                {
                  die(mysqli_error($connect));
                }
                else{
                  $query="SELECT * FROM vehicles WHERE vin='$vin'";
                  $result=mysqli_query($connect,$query);
                  if($result){
                    $rowSQL = "SELECT MAX( id ) AS max FROM vehicles";
                    $ree=mysqli_query($connect,$rowSQL);
                    $row = mysqli_fetch_array($ree);
                    $picture_id=$row['max'];
                    if (isset($_POST['add_vehicle'])) {
                              $uploadFolder = 'ad_pictures/';
                              $i=0;
                              foreach ($_FILES['veh_photos']['tmp_name'] as $key => $image) {
                                    $imageTmpName = $_FILES['veh_photos']['tmp_name'][$key];
                                    $imageName = $_FILES['veh_photos']['name'][$key];
                                    $final_image_name=$picture_id.'_'.$i.'_'.$imageName;
                                    $result = move_uploaded_file($imageTmpName,$uploadFolder.$final_image_name);
                                    if($i==0)
                                      $query = "INSERT INTO vehicle_pics (ad_id,is_first,pic) VALUES ('$picture_id',1,'$final_image_name')";
                                    else
                                      $query = "INSERT INTO vehicle_pics (ad_id,is_first,pic) VALUES ('$picture_id',0,'$final_image_name')";
                                    $run = $connect->query($query) or die("Error in saving image".$connect->error);
                                    $i=$i+1;
                              }
                              if ($result) {
                                echo("<script>alert('The ad has been succesfully added to our database!')</script>");
                                echo("<script>window.location = 'welcome.php';</script>");
                              }
                              else{
                                $query="DELETE FROM vehicles WHERE id = '$picture_id'";
                                if(!mysqli_query($connect,$query))
                                {
                                  die(mysqli_error($connect));
                                }
                                else{
                                echo("<script>alert('There was an error! Go back and try again.If the problem persists contact the owner of the website.')</script>");
                                echo("<script>window.location = 'add_vehicle.php';</script>");
                                }
                              }
                    }
                  }
                  else{
                  //  echo("<script>alert('There was an error! Go back and try again.<br>If the problem persists contact the owner of the website.')</script>");
                    //echo("<script>window.location = 'add_vehicle.php';</script>");
                  }
                }

              }
            }
          }
?>
