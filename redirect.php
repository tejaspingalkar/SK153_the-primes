<?php
include "conn.php";
$query="select * from watertheft where status = 'active';";
$result= mysqli_query($conn,$query);   
$today = date("Y-m-d h:i:s");
$i = 0;  
while($rows=mysqli_fetch_array($result))
{
     $cdate = $rows['time'];
     $date1 = "$cdate";
     $date2 = "$today";
     $diff = abs(strtotime($date2) - strtotime($date1));
     $years = floor($diff / (365*60*60*24));
     $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
     $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
     echo $days;
     echo"<br>";
     //printf("%d years, %d months, %d days\n", $years, $months, $days);
     
   if($days > 14)
   {
       echo"<br>";
       echo $rows[1];
       echo"<br>";
       $target[$i] = $rows[2];
      ++$i;
       echo $days;echo"<br>";
      $q = "UPDATE watertheft set status= 'dued' where theft_id = '$rows[0]'";
    $res= mysqli_query($conn,$q);

   }else{
         continue;
   }
              
}
//$msg = "test\nSecond line of text";

//use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
//mail("overlordactual007@gmail.com","My subject",$msg);
if($target!=0){
print_r($target);
}
?>
                