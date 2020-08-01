<?php session_start();
include "conn.php";

if(!isset($_POST['newpass']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];
$newpass= $_POST['newpass'];
$newpass = md5($newpass);


$query = "UPDATE local_authority SET pwd = '$newpass',status = '1' WHERE mobile = '$mobile' and email = '$email'";

$res= mysqli_query($conn,$query) or die( mysqli_error($conn));
//$row=mysqli_fetch_array($res);
if($res)
{
   // echo $query;
    echo '<script language="javascript">';
    echo 'alert("Password Changed Sucessfully");';
    echo 'window.location.href="local_authority_login.php";';
    echo '</script>';
    //mysqli_error($conn);
    //echo "yes";
}else{
        echo '<script language="javascript">';
        echo 'alert("Something Went Wrong");';
        echo 'window.location.href="local_authority_login.php";';
        echo '</script>';
    //mysqli_error($conn);
    //echo $query;
    //echo "no";
}

?>