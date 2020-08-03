<?php
include "conn.php";
$fname = mysqli_real_escape_string($conn,($_POST['fname']));

$mname = mysqli_real_escape_string($conn,($_POST['mname']));
$lname = mysqli_real_escape_string($conn,($_POST['lname']));
$dob = mysqli_real_escape_string($conn,($_POST['dob']));
$email = mysqli_real_escape_string($conn,($_POST['email']));
$gender = mysqli_real_escape_string($conn,($_POST['gender']));
$mobile = mysqli_real_escape_string($conn,($_POST['mobile']));
//$password = mysqli_real_escape_string($conn,($_POST['password']));
$scope = mysqli_real_escape_string($conn,($_POST['scope']));
$scopename = mysqli_real_escape_string($conn,($_POST['scopename']));
$state = mysqli_real_escape_string($conn,($_POST['state1']));
$district = mysqli_real_escape_string($conn,($_POST['district1']));
$taluka = mysqli_real_escape_string($conn,($_POST['taluka1']));
$village = mysqli_real_escape_string($conn,($_POST['village1']));

$fname = htmlspecialchars($fname);
$mname = htmlspecialchars($mname);
$lname = htmlspecialchars($lname);
$dob = htmlspecialchars($dob);
$email = htmlspecialchars($email);
$gender = htmlspecialchars($gender);
$mobile = htmlspecialchars($mobile);
$password= htmlspecialchars($password);
$scope= htmlspecialchars($scope);
$scopename= htmlspecialchars($scopename);
$pass = time();
$pass1 = md5($pass);

$query11 = "select * from local_authority where mobile='$mobile' and email='$email'and active='1'";
//echo $q;
//echo '<br>';
$res11 = mysqli_query($conn, $query11);
if (mysqli_num_rows($res11) > 0) {

        echo '<script language="javascript">';
        echo 'alert("Information Already Exist");';
        echo '</script>';
        echo "Information Already Exist";
        header("refresh:2;url=addlocalauth.php");        
        exit();
        

}
   





$query = "insert into local_authority VALUES (NULL , '$fname','$mname','$lname','$dob','$email', '$gender', '$mobile','$pass1','$scope','$scopename','$state','$district','$taluka','$village','0','1')";
echo mysqli_error($conn);
$result = mysqli_query($conn, $query);
if ($result) {
    echo mysqli_error($conn);
   echo '<script>alert("Account Has Been Added Sucessfully");</script>';
   mail($email, 'Temp Password',$pass, 'From: overlordactual007@gmail.com');
   echo '<script>alert("The login Credentials are send to Email Sucessfully");window.location="addlocalauth.php";</script>';
   
} else {
    echo mysqli_error($conn);
    echo '<script>alert("Oops.. Something went wrong! Please try again...");window.location="addlocalauth.php";</script>';
}
?>














