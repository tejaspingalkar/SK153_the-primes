<?php
include "conn.php"
?>
<?php
if(!isset($_POST['aid']))
{
     echo '<script language="javascript">';
     echo 'alert("You are Not Doing It By valid Way");';
     echo 'window.location.href="index.php";';
     echo '</script>';
}

$aid = $_POST['aid'];
$query = "UPDATE local_authority SET active='0' WHERE local_authority_id = '$aid'";
$res = mysqli_query($conn,$query);
if($res)
{
    echo '<script language="javascript">';
     echo 'alert("Authority Removed Sucessfully");';
     echo 'window.location.href="index.php";';
     echo '</script>';
}
else{
    echo '<script language="javascript">';
    echo 'alert("Something Went Wrong");';
    echo 'window.location.href="index.php";';
    echo '</script>';
}
?>