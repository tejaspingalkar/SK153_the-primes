<?php
session_start();
include "conn.php";
if(!isset($_SESSION['id']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="user/add/index.php";';
  echo '</script>';
  echo mysqli_error($conn);
}
else{
	header("yo.php");
}
//print_r($_SESSION);
/*$state = $_SESSION['state'];
$district = $_SESSION['district'];
$taluka = $_SESSION['taluka'];
$village = $_POST['village'];

$lat = $_SESSION['lat'];
$lon = $_SESSION['lon'];
*/
$lastid = $_SESSION['id'];
$eid = $_SESSION['eid'];

//If directory doesnot exists create it.
$output_dir = "uploads/";
$cnt = 0;

if(isset($_FILES["myfile"]))
{
	$ret = array();

		$error =$_FILES["myfile"]["error"];
    	if(!is_array($_FILES["myfile"]['name'])) //single file
    	{
				//echo '<script type="text/javascript">alert("'.$id.'");</script>';
				//echo '<script type="text/javascript">alert("");</script>';
					$fileName = $_FILES["myfile"]["name"];
					move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$lastid.$_FILES["myfile"]["name"]);
					 //echo "<br> Error: ".$_FILES["myfile"]["error"];
					 $store = "uploads/".$lastid.$fileName;
					 //$exif = exif_read_data($store);
					 //echo "uploads/".$fileName;
					 	$store = "uploads/".$lastid.$fileName;
					 	$qry = "insert into images VALUES(NULL,'$lastid','$eid','$store','a')";
					 	$rs  = mysqli_query($conn, $qry);
						$ret[$fileName]= $output_dir.$fileName;
						ECHO 'SUCCESS';
					
//					$ret[$fileName]= "Geolocation Is Not ON";
				}
			
	 	}
    	else
    	{
    	    	$fileCount = count($_FILES["myfile"]['name']);
    		  for($i=0; $i < $fileCount; $i++)
    		  {
    		  	$fileName = $_FILES["myfile"]["name"][$i];
	       	 	 $ret[$fileName]= $output_dir.$fileName;
    		    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName );
    		  }
			  echo '<script type="text/javascript">alert("'.$id.'");</script>';

    	}
	
    //echo json_encode($ret);
 


?>