<?php
if(isset($_POST["submit"])) {
 include"conn.php";

 if(isset($_POST['latitude']))
 {
   $latitude = mysqli_real_escape_string($conn,($_POST['latitude']));
 }else{
   $latitude = NULL;
 }

 if(isset($_POST['longitude']))
 {
   $longitude = mysqli_real_escape_string($conn,($_POST['longitude']));
 }else{
   $longitude = NULL;
 }

 if(isset($_POST['nameofembank']))
 {
   $nameofembank = mysqli_real_escape_string($conn,($_POST['nameofembank']));
 }else{
   $nameofembank = NULL;
 }

 if(isset($_POST['location']))
 {
   $location = mysqli_real_escape_string($conn,($_POST['location']));
 }else{
   $location = NULL;
 }

 if(isset($_POST['state']))
 {
   $state = mysqli_real_escape_string($conn,($_POST['state']));
 }else{
   $state = NULL;
 }

 if(isset($_POST['village']))
 {
   $village = mysqli_real_escape_string($conn,($_POST['village']));
 }else{
   $village = NULL;
 }

 if(isset($_POST['taluka']))
 {
   $taluka = mysqli_real_escape_string($conn,($_POST['taluka']));
 }else{
   $taluka = NULL;
 }

 if(isset($_POST['district']))
 {
   $district = mysqli_real_escape_string($conn,($_POST['district']));
 }else{
   $district = NULL;
 }
 if(isset($_POST['river']))
 {
   $river = mysqli_real_escape_string($conn,($_POST['river']));
 }else{
   $river = NULL;
 }

 if(isset($_POST['dateofest']))
 {
   $dateofest = mysqli_real_escape_string($conn,($_POST['dateofest']));
 }else{
   $dateofest = NULL;
 }

 if(isset($_POST['area']))
 {
   $area = mysqli_real_escape_string($conn,($_POST['area']));
 }else{
   $area = NULL;
 }

 if(isset($_POST['diameter']))
 {
   $diameter = mysqli_real_escape_string($conn,($_POST['diameter']));
 }else{
   $diameter = NULL;
 }

 if(isset($_POST['thickness']))
 {
   $thickness = mysqli_real_escape_string($conn,($_POST['thickness']));
 }else{
   $thickness = NULL;
 }

 if(isset($_POST['thickness']))
 {
   $thickness = mysqli_real_escape_string($conn,($_POST['thickness']));
 }else{
   $thickness = NULL;
 }

 if(isset($_POST['length']))
 {
   $length = mysqli_real_escape_string($conn,($_POST['length']));
 }else{
   $length = NULL;
 }

 if(isset($_POST['density']))
 {
   $density = mysqli_real_escape_string($conn,($_POST['density']));
 }else{
   $density = NULL;
 }

 if(isset($_POST['youngmod']))
 {
   $youngmod = mysqli_real_escape_string($conn,($_POST['youngmod']));
 }else{
   $youngmod = NULL;
 }

 if(isset($_POST['pilespacing']))
 {
   $pilespacing = mysqli_real_escape_string($conn,($_POST['pilespacing']));
 }else{
   $pilespacing = NULL;
 }

  if(isset($_POST['csaofpc']))
 {
   $csaofpc = mysqli_real_escape_string($conn,($_POST['csaofpc']));
 }else{
   $csaofpc = NULL;
 }

 if(isset($_POST['poissonratio']))
 {
   $poissonratio = mysqli_real_escape_string($conn,($_POST['poissonratio']));
 }else{
   $poissonratio = NULL;
 }

if(isset($_POST['district']))
 {
   $district = mysqli_real_escape_string($conn,($_POST['district']));
 }else{
   $district = NULL;
 }
 
 if(isset($_POST['taluka']))
 {
   $taluka = mysqli_real_escape_string($conn,($_POST['taluka']));
 }else{
   $taluka = NULL;
 }
 $type = mysqli_real_escape_string($conn,($_POST['type']));




$target_dir = "embankuploads/";
$target_file = $target_dir . basename($_FILES["embankphoto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["embankphoto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["embankphoto"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["embankphoto"]["name"]). " has been uploaded.";
      $path = "embankuploads/".$_FILES["embankphoto"]["name"];
      
    } 


$query = "insert into embankment VALUES (NULL , '$nameofembank','$location', '$latitude', 
'$longitude', NULL,'$dateofest',NULL,NULL,'$river','$path','1', '$area', '$diameter', '$thickness', 
'$length', '$density', '$youngmod', '$pilespacing','$csaofpc','$poissonratio','$state','$district','$taluka','$village','$type')";
echo mysqli_error($conn);
$result = mysqli_query($conn, $query);
if ($result) {
    echo mysqli_error($conn);
    //echo $path;
    echo '<script>alert("Embankment added successfully");window.location="addembank1.php";</script>';
} else {
    echo mysqli_error($conn);
    //echo '<script>alert("Oops.. Something went wrong! Please try again...");window.location="addembank.php";</script>';
}
}}

 ?>