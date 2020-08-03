<?php
include "conn.php";
$today = date("Y-m-d");
$i = 0; 
$email = 'chaudhari4351@gmail.com';
$q = "SELECT * FROM embankment where embankment_id = '91'";
ini_set('max_execution_time', 300);
set_time_limit(300);
$result = mysqli_query($conn,$q);
while($rows = mysqli_fetch_array($result))
{  
  
  $start = strtotime($rows['date_of_modified']);
  $end = strtotime($today);
  
  $days =  ceil(abs($end - $start) / 86400);
  echo "$days";
    //print_r($rows);
                /*$cdate = $rows['date_of_modified'];
                 $date1 = "$cdate";
                 $date2 = "$today";
                 $diff = abs(strtotime($date2) - strtotime($date1));
                 $years = floor($diff / (365*60*60*24));
                 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                //  /echo "<br>";
                 //echo $months;
                $months = $months*30;
                //echo $months;*/
              if($days >120 and $days <164)
               {
                $msg='The maintainance date is approaching for '.$rows['embankment_name'].$rows['location'].' 1 month remaining';
                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
               }elseif($days >164 and $days <172)
               {
                $msg='The maintainance date is approaching for '.$rows['embankment_name'].$rows['location'].' 15 days remaining';
                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
               
               }
              elseif($days > 172){
                $msg='The maintainance date is approaching for '.$rows['embankment_name'].$rows['location'].' 15 days remaining';
                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
               
              }else{
                echo "ho";
              }/*
              echo "<br>";
              echo $rows[0];
              echo "<br>";
              echo $months;*/
             
}


?>