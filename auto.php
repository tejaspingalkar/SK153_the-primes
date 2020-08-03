

<?php
//$email=$_SESSION['email'];
$email='sagargpatil1998@gmail.com';
include "conn.php";
$query="select * from embankment where  status = '1'";
$result= mysqli_query($conn,$query );
//echo $query;
?>

            <?php
            while($rows=mysqli_fetch_array($result))
            {   
                $q = "SELECT avg(crack),ROUND(avg(crack)*100.0/10.0),avg(vegetative),ROUND(avg(vegetative)*100.0/10.0),avg(geometry),ROUND(avg(geometry)*100.0/10.0) from review WHERE embankment_id = '$rows[0]'";
                $res = mysqli_query($conn,$q);
                while($row = mysqli_fetch_array($res)) {
                //print_r($row);
                $overall = ($row['ROUND(avg(geometry)*100.0/10.0)']+
                            $row['ROUND(avg(vegetative)*100.0/10.0)']+$row['ROUND(avg(crack)*100.0/10.0)']
                        +$row['ROUND(avg(crack)*100.0/10.0)'])/4;         
                        //print_r($row);
     ?>         
                
                        <?php
                        
                            if($overall > 70)
                             {
                                 $msg='The '.$rows['embankment_name'].$rows['location'].' Embankment is in Danger Zone Immediate Attention is Required';
                                mail($email, 'Notice',$msg, 'From: overlordactual007@gmail.com');
                             }
                            
                             ?>
                       
                    <?php
     }}
     ?>
       