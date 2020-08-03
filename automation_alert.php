<?php
include "conn.php";
$today = date("Y-m-d");
$i = 0; 
$email = 'sagargpatil1998@gmail.com';
$q = "SELECT * FROM embankment where embankment_id = '91'";
$result = mysqli_query($conn,$q);
while($rows = mysqli_fetch_array($result))
{  
    //print_r($rows);
                $cdate = $rows['date_of_modified'];
                 $date1 = "$cdate";
                 $date2 = "$today";
                 $diff = abs(strtotime($date2) - strtotime($date1));
                 $years = floor($diff / (365*60*60*24));
                 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                //  /echo "<br>";
                 //echo $months;
                $months = $months*30;
                //echo $months;
               if($months >150 and $months <164)
               {
                $msg='The maintainance date is approaching for '.$rows['embankment_name'].$rows['location'].' 1 month remaining';
                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
               }elseif($months >164 and $months <172)
               {
                $msg='The maintainance date is approaching for '.$rows['embankment_name'].$rows['location'].' 15 days remaining';
                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
               
               }
              elseif($months > 172){
                $msg='The maintainance date is approaching for '.$rows['embankment_name'].$rows['location'].' 15 days remaining';
                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
               
              }else{
                echo "ho";
              }
             
}


?>