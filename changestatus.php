<?php session_start();
include "conn.php";
/*if(!isset($_SESSION['local_authority']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}*/
if(!isset($_POST['desg']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}
$desg = $_POST['desg'];
$id = $_POST['id'];
echo $desg;
echo $id;

if($desg == "local")
{
    $query = "UPDATE registercomplaint SET stats = 'pending' WHERE compl_id = '$id'";
    $res=mysqli_query($conn,$query) or die( mysqli_error($conn));;
    $row=mysqli_fetch_array($res);
    if($res)
    {
        echo '<script language="javascript">';
        echo 'alert("Complaint Sucessfully Sent For Approvation");';
        echo 'window.location.href="local_authority_index.php";';
        echo '</script>';
        //mysqli_error($conn);
        //echo $res;
    }else{
        echo '<script language="javascript">';
        echo 'alert("Something Went Wrong");';
        echo 'window.location.href="local_authority_index.php";';
        echo '</script>';
    }
}
elseif($desg == "admin")
{
    $query = "UPDATE registercomplaint SET stats = 'complete' WHERE compl_id = '$id'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($res);
    if($res)
    {
        echo '<script language="javascript">';
        echo 'alert("Complaint Sucessfully Tagged As Completed");';
        echo 'window.location.href="index.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Something Went Wrong");';
        echo 'window.location.href="index.php";';
        echo '</script>';
    }
}
else{
    echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}
?>