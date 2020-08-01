<?php 
include "conn.php";
session_start();
	if(!isset($_POST['data']))
	{
      echo '<script language="javascript">';
      echo 'alert("You are Not Doing It By valid Way");';
      echo 'window.location.href="user/index.php";';
      echo '</script>';
   }else{
        $lat = mysqli_real_escape_string($conn,($_POST['lat']));
        $lon = mysqli_real_escape_string($conn,($_POST['lon']));
        //$name = mysqli_real_escape_string($conn,($_POST['name']));
       // $mail = mysqli_real_escape_string($conn,($_POST['mail']));
       // $mob = mysqli_real_escape_string($conn,($_POST['mob']));
        $state = mysqli_real_escape_string($conn,($_POST['state']));
        $district = mysqli_real_escape_string($conn,($_POST['district']));
        $taluka = mysqli_real_escape_string($conn,($_POST['taluka']));
        $village = mysqli_real_escape_string($conn,($_POST['village']));
        $postal = mysqli_real_escape_string($conn,($_POST['postal']));
        
        $address = mysqli_real_escape_string($conn,($_POST['addline']));
        $description = mysqli_real_escape_string($conn,($_POST['description']));

        


       echo $lat = htmlspecialchars($lat);
       echo $lon = htmlspecialchars($lon);
      // echo $name = htmlspecialchars($name);
     //  echo $mail = htmlspecialchars($mail);
      // echo $mob = htmlspecialchars($mob);
       echo $state = htmlspecialchars($state);
       echo $district = htmlspecialchars($district);
       echo $village = htmlspecialchars($village);
       echo $postal = htmlspecialchars($postal);
       
       echo $address = htmlspecialchars($address);
       echo $description = htmlspecialchars($description);


       $query = "insert into watertheft VALUES (NULL, '$state','$district','$taluka','$village','$postal','$lat','$lon', '$address','$description','active',CURRENT_TIMESTAMP,'sand')";
       echo mysqli_error($conn);
       $result = mysqli_query($conn, $query);
       if ($result) {
          // echo mysqli_error($conn);
          // echo "yes";
       $lastid = mysqli_insert_id($conn);
                //  echo "$lastid";


       //echo '<script>alert("Record  added successfully");</script>';
          } else {
            //  echo mysqli_error($conn);
             // echo "yes";
                         //echo "$lastid";

             echo '<script>alert("Oops.. Something went wrong! Please try again...");</script>';
          }
          $ref = (rand(10000,99999).$lastid);
          $_SESSION['ref'] = $ref;
       $_SESSION['tid'] = $lastid;
       //$_SESSION['eid'] = $eid;
       //$_SESSION['city'] = $city;
		header("Location:theft/uploadtimg.php");
      exit; 
	}
?>