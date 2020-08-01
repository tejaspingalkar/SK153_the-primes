<?php
include "localheader.php";
?>
<?php
include "conn.php";
$query="select * from watertheft where $scope like '%$scopename%' and status = 'active' and type = 'sand'";
$result= mysqli_query($conn,$query );
//echo $query;
$today = date("Y-m-d h:i:s");
$i = 0; 
?>
<script>
$(document).ready( function () {
            $('#sTable').DataTable();
} );

</script>
       <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Theft Records</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
        <table  id="sTable" class="table" style="width:100%">
           <thead>
                <tr>
                    
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>Details</th>
                    <th>Action</th>
                    <th>Remove</th>
                    <th>Days Passed</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            while($rows=mysqli_fetch_array($result))
            {  $cdate = $rows['time'];
                 $date1 = "$cdate";
                 $date2 = "$today";
                 $diff = abs(strtotime($date2) - strtotime($date1));
                 $years = floor($diff / (365*60*60*24));
                 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                 //echo $days;
                 //echo"<br>";  
            
            ?>
                <tr>
                        <td> <?php echo ucfirst($rows['state']);?></td>
                        <td><?php echo $rows['district'];?></td>
                        <td><?php echo $rows['taluka'];?></td>
                        <td><?php echo $rows['village'];?></td>
                        <td><?php echo $rows['description'];?></td>

                        <td><form action="theftinfo.php" method="POST">
                            <input type="hidden" name="tid" value="<?php echo $rows[0];?>">
                        <button class="btn btn-primary" type="submit">Details</button></form></td>
                        
                        <td><form action="theftstatuschange.php" method="POST">
                            <input type="hidden" name="tid" value="<?php echo $rows[0];?>">
                        <button class="btn btn-primary" type="submit">Completed</button></form></td>
                        <td><?php echo $days;?></td>

                        

                    </tr>
                    <?php
     }
     ?>
                </tbody>
            <tfoot>
                <tr>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>Details</th>
                    <th>Action</th>
                    <th>Remove</th>
                    <th>Days Passed</th>
                                        


                </tr>
            </tfoot>
        </table>

    

     </table>
     </div>
     </div>
     <script src="js/vendor.min.js"></script>
          <script src="js/cosmos.min.js"></script>
         <script src="js/application.min.js"></script>
         <script src="js/tables-datatables.min.js"></script>
</body>
   </html>