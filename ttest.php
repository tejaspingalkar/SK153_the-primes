<?php include"conn.php";?>
<?php 
    
        $mquery="select * from embankment where status = '1'";
        $mresult= mysqli_query($conn,$mquery);
        while($mrows=mysqli_fetch_array($mresult))
        {
             $mq = "SELECT avg(crack),ROUND(avg(crack)*100.0/10.0),avg(vegetative),ROUND(avg(vegetative)*100.0/10.0),avg(geometry),ROUND(avg(geometry)*100.0/10.0) from review WHERE embankment_id = '$mrows[0]'";
            
            $mres = mysqli_query($conn,$mq);
                while($rows = mysqli_fetch_array($mres))
                {
                //print_r($rows);
                $overall = ($rows['ROUND(avg(geometry)*100.0/10.0)']+
                            $rows['ROUND(avg(vegetative)*100.0/10.0)']+$rows['ROUND(avg(crack)*100.0/10.0)']
                        +$rows['ROUND(avg(crack)*100.0/10.0)'])/4;  
                        
                        //print_r($overall);
                        echo "<br>";
                        echo $overall;
        }
            
            
        }
        
        ?>