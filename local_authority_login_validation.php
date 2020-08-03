<?php
session_start();
include "conn.php";
//this is login validate.php
$mobile= mysqli_real_escape_string($conn,($_POST['mobile']));
$pass = mysqli_real_escape_string($conn,($_POST['password']));
$pass = md5($pass);

$query = "select * from local_authority where mobile='$mobile' and pwd='$pass'and active='1'";
//echo $q;
//echo '<br>';
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res) == 1) {
   $data = mysqli_fetch_array($res);
    if($data['status'] == '0')
    {
        echo '<script language="javascript">';
        echo 'alert("First Time Login Redirecting To Change Password");';
        echo '</script>';
        header("Location:setnewcreds.php");
        
    }
    else{
    
    $_SESSION['local_authority'] = $data;
    header("Location:local_authority_index.php");
    }
} else {
       // echo '<script>alert("Username/ password wrong, please try again!");window.location="local_authority_login.php";</script>';
        echo mysqli_error($conn);
        echo $query;
    
}
?>