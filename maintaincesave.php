<?php 
include "conn.php";
session_start();
	if(isset($_POST['submit']))
	{
       /* function compressImage($source, $destination, $quality) {

            
            $image = imagecreatefromjpeg($source);
             imagejpeg($image, $destination, $quality);

    }*/

        $name = mysqli_real_escape_string($conn,($_POST['name']));
        $maintaincedate = mysqli_real_escape_string($conn,($_POST['maintaincedate']));
        $companyname= mysqli_real_escape_string($conn,($_POST['companyname']));
        $tenderdetails = mysqli_real_escape_string($conn,($_POST['tenderdetails']));
        $nextmaintaincedate= mysqli_real_escape_string($conn,($_POST['nextmaintaincedate']));
        
        

         $name = htmlspecialchars($name);
         $maintaincedate = htmlspecialchars($maintaincedate);
         $companyname = htmlspecialchars($companyname);
         $tenderdetails = htmlspecialchars($tenderdetails);
         $nextmaintaincedate = htmlspecialchars($nextmaintaincedate);
         
         

        
		

        $query = "insert into maintaince VALUES (NULL ,'$name','$maintaincedate',
        '$companyname','$tenderdetails','$nextmaintaincedate')";
        echo mysqli_error($conn);
        $result = mysqli_query($conn, $query);
        if ($result) {
          echo '<script>alert("Your Work Successfully Upoload...");window.location="login.php";</script>';
      } else {
      
          echo mysqli_error($conn);
      }
            
	
	}
?>