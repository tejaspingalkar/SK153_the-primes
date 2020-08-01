<?php
session_start();
if(!isset($_POST['email']))
{
     echo '<script language="javascript">';
     echo 'alert("You are Not Doing It By valid Way");';
     echo 'window.location.href="local_authority_login.php";';
     echo '</script>';
}
include "conn.php";
//this is login validate.php
$mobile= mysqli_real_escape_string($conn,($_POST['mobile']));
$email = mysqli_real_escape_string($conn,($_POST['email']));


$query = "select * from local_authority where mobile='$mobile' and email='$email'";
//echo $q;
//echo '<br>';
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res) == 1) {
    $creds = time();
    $_SESSION['otp'] = $creds;
    $msg = 'OTP for Password is '.$creds;
    $msg = wordwrap($msg,70);
    $subject = "OTP to reset password";
    $to = $email;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    mail($to, 'sub',$msg, 'From: overlordactual007@gmail.com');
        echo '<script>alert("OTP is send on your Register Email!");window.location="otp.php";</script>';
    } else {
        echo '<script>alert("OOps! Wrong Creds");window.location="local_authority_login.php";</script>';
        echo mysqli_error($conn);
        //echo $query;
    
}
?>