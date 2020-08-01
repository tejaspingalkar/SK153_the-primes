<?php 
include "conn.php";

	if(isset($_POST['submit']))
	{
        $name = mysqli_real_escape_string($conn,($_POST['name']));
        $mail = mysqli_real_escape_string($conn,($_POST['mail']));
        $mob = mysqli_real_escape_string($conn,($_POST['mob']));
        $veggro = mysqli_real_escape_string($conn,($_POST['veggro']));
        $crack = mysqli_real_escape_string($conn,($_POST['crack']));
        $gdito = mysqli_real_escape_string($conn,($_POST['gdito']));
        $review = mysqli_real_escape_string($conn,($_POST['review']));
        $city = mysqli_real_escape_string($conn,($_POST['city']));
        $eid = mysqli_real_escape_string($conn,($_POST['eid']));

         $name = htmlspecialchars($name);
         $mail = htmlspecialchars($mail);
         $mob = htmlspecialchars($mob);
         $veggro = htmlspecialchars($veggro);
         $crack = htmlspecialchars($crack);
         $gdito = htmlspecialchars($gdito);
         $review = htmlspecialchars($review);
         $city = htmlspecialchars($city);
         $eid = htmlspecialchars($eid);

        
		$targetFolder = "uploads";
		$errorMsg = array();
		$successMsg = array();
        $mac1=exec('getmac');
        $mac=substr($mac1, 0, 17); 

        $query = "insert into review VALUES (NULL , '$eid','$city', '$veggro', 
        '$crack', $gdito,'$review','$name','$mail','$mob','$mac',NULL, NULL, NULL)";
        echo mysqli_error($conn);
        $result = mysqli_query($conn, $query);
        if ($result) 
        {
            $lastid = mysqli_insert_id($conn);
            echo mysqli_error($conn);
            echo "<h1>".$lastid."</h1>";
            print_r($_FILES);
            foreach($_FILES as $file => $fileArray)
                {
                    
                    if(!empty($fileArray['name']) && $fileArray['error'] == 0)
                    {                                        mysqli_error($conn);
                        $getFileExtension = pathinfo($fileArray['name'], PATHINFO_EXTENSION);

                        if(($getFileExtension =='jpg') || ($getFileExtension =='jpeg') || ($getFileExtension =='png') || ($getFileExtension =='gif'))
                        {
                            mysqli_error($conn);

                            if ($fileArray["size"] <= 50000000) 
                            {
                                $breakImgName = explode(".",$fileArray['name']);
                                $imageOldNameWithOutExt = $breakImgName[0];
                                $imageOldExt = $breakImgName[1];

                                $newFileName = strtotime("now")."-".str_replace(" ","-",strtolower($imageOldNameWithOutExt)).".".$imageOldExt;

                                
                                $targetPath = $targetFolder."/".$newFileName;

                                $qry = "insert into images VALUES(NULL,'$lastid',$newFileName)";
                                $rs  = mysqli_query($conn, $qry);
                                if($rs)
                                    {
                                        echo $qry;
                                        mysqli_error($conn);
                                        move_uploaded_file($fileArray["tmp_name"], $targetPath);
                                    }
                                    else
                                    {
                                        mysqli_error($conn);
                                    }

                        
                            } 
                            else{                                        mysqli_error($conn);

                                $errorMsg[$file] = "Image size is too large in ".$file;
                            }

                        }else{                                        mysqli_error($conn);

                            $errorMsg[$file] = 'Only image file required in '.$file.' position';
                        }	
                    }
                    mysqli_error($conn);
                }
                mysqli_error($conn);

                    //echo '<script>alert("Embankment added successfully");window.location="addembank.php";</script>';
        } else {
            echo mysqli_error($conn);
            //echo '<script>alert("Oops.. Something went wrong! Please try again...");window.location="addembank.php";</script>';
        }

        mysqli_error($conn);

	}
?>