<?php
session_start();
include "conn.php";
if(!isset($_SESSION['bid']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="user/add/index.php";';
  echo '</script>';
  echo mysqli_error($conn);
}

//print_r($_SESSION);
$bid = $_SESSION['bid'];



//If directory doesnot exists create it.
$output_dir = "wbuploads/";
$cnt = 0;

if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
   
    
    	if(!is_array($_FILES["myfile"]['name'])) //single file
    	{
			$fileName = $_FILES["myfile"]["name"];
			move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$bid.$_FILES["myfile"]["name"]);
			move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
				 //echo "<br> Error: ".$_FILES["myfile"]["error"];
				 $store = "wbuploads/".$bid.$fileName;
				 $exif = exif_read_data($store);
				 if(isset($exif['GPS_IFD_Pointer']))
				 {
					$store = "wbuploads/".$bid.$fileName;
				 $qry = "insert into wimages VALUES(NULL,'$store','$bid')";
				 $rs  = mysqli_query($conn, $qry);
				$ret[$fileName]= $output_dir.$fileName;
				ECHO 'SUCCESS';
			
		}else{ECHO 'TURN ON "GEOLOCATION" OF YOUR CAMERA"';
    	}}
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
 
}

?>