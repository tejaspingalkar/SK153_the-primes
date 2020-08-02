<?php
session_start();
if(!isset($_SESSION['ref']))
{
  echo '<script language="javascript">';
  echo 'alert("Thank You");';
  echo 'window.location.href="../user/index.php";';
  echo '</script>';
}
$ref = $_SESSION['ref'];
echo '<script language="javascript">';
echo 'alert("Unique Refrence Id Genrated");';
echo 'alert("Visible for 10 second");';
echo '</script>';

echo"<h3>Use This Id to track your Complaint</h3>";
echo"<h3>$ref</h3>";
session_destroy();
?>
<script>
 window.setTimeout(function(){

// Move to a new location or you can do something else
window.location.href = "../user/add/index.php";

}, 10000);
</script>