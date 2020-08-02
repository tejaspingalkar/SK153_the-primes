<?php
//connection file include
include "conn.php";
//this is login validate.php
$mobile= mysqli_real_escape_string($conn,($_POST['mobile']));
$pass = mysqli_real_escape_string($conn,($_POST['password']));
$pass = md5($pass);

$query = "select * from admin where mobile_no ='$mobile' and password='$pass'";
//echo $q;
//echo '<br>';
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res) == 1) {
    session_start();
    $data = mysqli_fetch_array($res);
    $_SESSION['admin'] = $data;
    header("Location:index.php");
} else {
        echo '<script>alert("Username/ password wrong, please try again!");window.location="alogin.php";</script>';
        //echo mysqli_error($conn);
        //echo $query;
    
}
?>
