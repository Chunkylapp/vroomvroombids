<?php
include "connection.php";

$text=$_POST['search_string'];
  if(!empty($text)){
        $make='';
        $model='';
        $year='';
        list($make,$model)=explode(" ",$text);

        $query="SELECT * FROM vehicles WHERE make=$make";
        $result=mysqli_query($connect,$query);
        if($result){
          echo('milsugi');
        }

  }
  else{
        echo("<b>Please insert the make and model you are looking for</b>");
  }
?>
