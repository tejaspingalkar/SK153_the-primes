<?php session_start();
include "conn.php";
/*if(!isset($_SESSION['local_authority']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}*/
if(!isset($_POST['bid']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}

$bid = $_POST['bid'];




    $query = "UPDATE waterbodies SET status = 'map' WHERE bid = '$bid'";
    $res=mysqli_query($conn,$query) or die( mysqli_error($conn));;
    if($res)
    {
        echo '<script language="javascript">';
       echo 'alert("Status Changed Sucessfully");';
       echo 'window.location.href="viewrecords.php";';
        echo '</script>';
        //mysqli_error($conn);
        //echo $res;
    }else{
        echo '<script language="javascript">';
        echo 'alert("Something Went Wrong");';
        echo 'window.location.href="viewrecords.php";';
        echo '</script>';
   
}
?>