<?php 
if(!isset($_POST['tid'])){
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}?>
<?php
include "conn.php";
?>
<?php

$tid = $_POST['tid'];

$q="UPDATE watertheft SET status = 'complete' WHERE theft_id ='$tid'";
$res=mysqli_query($conn,$q);
if($res)
{
   
    echo '<script language="javascript">';
    echo 'alert("Status Changed Sucessfully");';
    echo 'window.location.href="local_authority_index.php";';
    echo '</script>';
}
    else{
     echo '<script language="javascript">';
    echo 'alert("OOPS");';
    echo 'window.location.href="local_authority_index.php";';
    echo '</script>';
    echo mysqli_error($conn);
    }

?>