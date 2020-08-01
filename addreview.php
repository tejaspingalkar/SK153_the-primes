<?php 
include "conn.php";
session_start();
	if(!isset($_POST['submit']))
	{
       /* function compressImage($source, $destination, $quality) {

            
            $image = imagecreatefromjpeg($source);
             imagejpeg($image, $destination, $quality);

    }*/

        $name = mysqli_real_escape_string($conn,($_POST['name']));
        $mail = mysqli_real_escape_string($conn,($_POST['mail']));
        $mob = mysqli_real_escape_string($conn,($_POST['mob']));
        $veggro = mysqli_real_escape_string($conn,($_POST['veggro']));
        $crack = mysqli_real_escape_string($conn,($_POST['crack']));
        $gdito = mysqli_real_escape_string($conn,($_POST['gdito']));
        $review = mysqli_real_escape_string($conn,($_POST['review']));
        $eid = mysqli_real_escape_string($conn,($_POST['eid']));
        //$lat = mysqli_real_escape_string($conn,($_POST['lat']));
        //$lon = mysqli_real_escape_string($conn,($_POST['lon']));
        //$state   = mysqli_real_escape_string($conn,($_POST['state']));
        //$district= mysqli_real_escape_string($conn,($_POST['district']));
        //$taluka  = mysqli_real_escape_string($conn,($_POST['taluka']));
        //$village = mysqli_real_escape_string($conn,($_POST['village']));

        //echo "<br>".$name = htmlspecialchars($name);
        //echo "<br>".$mail = htmlspecialchars($mail);
        //echo "<br>".$mob = htmlspecialchars($mob);
        //echo "<br>".$veggro = htmlspecialchars($veggro);
        //echo "<br>".$crack = htmlspecialchars($crack);
        //echo "<br>".$gdito = htmlspecialchars($gdito);
        //echo "<br>".$review = htmlspecialchars($review);
        //echo "<br>".$eid = htmlspecialchars($eid);
         //echo "<br>".$state = htmlspecialchars($state);
         //echo "<br>".$district = htmlspecialchars($district);
         //echo "<br>".$taluka = htmlspecialchars($taluka);
         //echo "<br>".$village = htmlspecialchars($village);
        
		//$targetFolder = "uploads";
		//$errorMsg = array();
		//$successMsg = array();
        //$mac1=exec('getmac');
        //$mac=substr($mac1, 0, 17); 

        $query = "insert into review VALUES (NULL ,'$eid', 'a','$veggro', '$crack', '$gdito','$review','$name','$mail','$mob',CURRENT_TIMESTAMP)";
        echo mysqli_error($conn);
        //echo $query;
        $result = mysqli_query($conn, $query);
        if ($result) {
            $lastid = mysqli_insert_id($conn);
             $_SESSION['id'] = $lastid;
             $_SESSION['eid'] = $eid;
        //$_SESSION['lat'] =      $lat;
        //$_SESSION['lon'] =      $lon;
        header("Location:uploadimg.php"); 
                    //echo 'window.location="uploadimg.php";</script>';
        echo mysqli_error($conn);
        exit; 
            //echo mysqli_error($conn);
           // echo "<h1>".$lastid."</h1>";
            //print_r($_FILES);
            //echo "<script>alert();</script>";
            //echo "<pre>";
            //echo $_FILES['image_upload-1']['error'];
           /* foreach($_FILES as $file => $fileArray)
                {
                    
                    if(!empty($fileArray['name']) && $fileArray['error'] == 0)
                    {
                        $getFileExtension = pathinfo($fileArray['name'], PATHINFO_EXTENSION);;

                        if(($getFileExtension =='jpg') || ($getFileExtension =='jpeg') || ($getFileExtension =='png') || ($getFileExtension =='gif'))
                        {
                            if ($fileArray["size"] <= 500000000) 
                            {
                                $breakImgName = explode(".",$fileArray['name']);
                                $imageOldNameWithOutExt = $breakImgName[0];
                                $imageOldExt = $breakImgName[1];

                                $newFileName = strtotime("now")."-".str_replace(" ","-",strtolower($imageOldNameWithOutExt)).".".$imageOldExt;

                                
                                $targetPath = $targetFolder."/".$newFileName;

                                if (compressImage($fileArray['tmp_name'],$targetPath,20)) 
                                {
                                    echo "<script>alert();</script>";
                                    $qry = "insert into images VALUES(NULL,'$lastid','$newFileName')";
                                    echo $qry;

                                    $rs  = mysqli_query($conn, $qry);

                                    if($rs)
                                    {
                                        $successMsg[$file] = "Image is uploaded successfully";
                                    }
                                    else
                                    {
                                        $errorMsg[$file] = "Unable to save ".$file." file ";
                                    }
                                }
                                else
                                {
                                    $errorMsg[$file] = "Unable to save ".$file." file ";		
                                }
                            } 
                            else
                            {
                                $errorMsg[$file] = "Image size is too large in ".$file;
                            }

                        }
                        else
                        {
                            $errorMsg[$file] = 'Only image file required in '.$file.' position';
                        }	
                    }
                    mysqli_error($conn);
                }*/
               // mysqli_error($conn);
                //echo $query;

                    //echo '<script>alert("Embankment added successfully");window.location="addembank.php";</script>';
        } else {
            echo mysqli_error($conn);
           // echo $query;
            echo '<script>alert("Oops.. Something went wrong! Please try again...");window.location="addembank.php";</script>';
        }
        
       //$_SESSION['state'] =    $state;
       //$_SESSION['district'] = $district;
       //$_SESSION['taluka'] =   $taluka;
       //$_SESSION['village'] =    $village;
       
    }
   echo mysqli_error($conn);
?>