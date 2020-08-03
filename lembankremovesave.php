<?php 
if(!isset($_POST['eid'])){
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}?>
<?php
include "conn.php";
?>
<?php

$eid = $_POST['eid'];
$reason = $_POST['reason'];
$reason = mysqli_real_escape_string($conn,($_POST['reason']));
$q="UPDATE embankment SET status = '0' WHERE embankment_id ='$eid'";
$res=mysqli_query($conn,$q);
if($res)
{
    $query = "insert into remove_embankment values('$eid','$reason')";
    $res1=mysqli_query($conn,$query);
    if($res1){
    echo '<script language="javascript">';
    echo 'alert("Embankment Removed Sucessfully");';
    echo 'window.location.href="local_embank.php";';
    echo '</script>';
    }
    else{
     echo '<script language="javascript">';
    echo 'alert("OOPS");';
    echo 'window.location.href="local_embank.php";';
    echo '</script>';
    echo mysqli_error($conn);
    }
}
else{
    echo '<script language="javascript">';
    echo 'alert("Something Went Wrong");';
    echo 'window.location.href="local_authority_index.php";';
    echo '</script>';
}
$row=mysqli_fetch_array($res);
echo $q;
?>