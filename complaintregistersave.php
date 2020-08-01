<?php 
include "conn.php";
session_start();
	if(isset($_POST['submit']))
	{
       /* function compressImage($source, $destination, $quality) {

            
            $image = imagecreatefromjpeg($source);
             imagejpeg($image, $destination, $quality);

    }*/

        $name = mysqli_real_escape_string($conn,($_POST['name']));
        $email = mysqli_real_escape_string($conn,($_POST['email']));
        $mobile_no = mysqli_real_escape_string($conn,($_POST['mobile_no']));
        $embankment_name = mysqli_real_escape_string($conn,($_POST['embankment_name']));
        $problem = mysqli_real_escape_string($conn,($_POST['problem']));
        $problem_desc= mysqli_real_escape_string($conn,($_POST['problem_desc']));
        $eid= mysqli_real_escape_string($conn,($_POST['eid']));
        $city= mysqli_real_escape_string($conn,($_POST['city']));

        

         $name = htmlspecialchars($name);
         $email = htmlspecialchars($email);
         $mobile_no = htmlspecialchars($mobile_no);
         $embankment_name = htmlspecialchars($embankment_name);
         $problem = htmlspecialchars($problem);
         $problem_desc = htmlspecialchars($problem_desc);
         $eid = htmlspecialchars($eid);

         $mac1=exec('getmac');
        $mac=substr($mac1, 0, 17); 

        
		

        $query = "insert into registercomplaint VALUES (NULL , '$eid','$city','$embankment_name', '$name','$email',
        '$mobile_no','$problem','$problem_desc',CURRENT_TIMESTAMP,'active','$mac','0','0')";
        echo mysqli_error($conn);
        $result = mysqli_query($conn, $query);
        if ($result) {
            $lastid = mysqli_insert_id($conn);
            //echo mysqli_error($conn);
           // echo "<h1>".$lastid."</h1>";
            //print_r($_FILES);
            echo "<script>alert();</script>";
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
                mysqli_error($conn);
                
                $_SESSION['id'] = $lastid;
                $_SESSION['idkk'] = "";
                $_SESSION['eid'] = $eid;
                $_SESSION['city'] = $city;
                header("Location:complaint/uploadimg.php"); 
                exit;
                    //echo '<script>alert("Embankment added successfully");window.location="addembank.php";</script>';
        } else {
            echo mysqli_error($conn);
            //echo '<script>alert("Oops.. Something went wrong! Please try again...");window.location="addembank.php";</script>';
        }
        
        
            
	
	}
?>