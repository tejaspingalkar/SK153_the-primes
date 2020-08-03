<?php
include "localheader.php";
?>
<?php
include "conn.php";



$query="select * from registercomplaint where city = '$local_auth_dest' and stats = 'active'";
$result= mysqli_query($conn,$query );
//echo $query;

?>

       <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Complaint Table</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
        <table  Border="1" id="myTable" class="display" style="width:100%">
           <thead>
                <tr>
                    
                    <th>Embankment Name</th>
                    <th>Problem</th>
                    <th>Problem Description</th>
                    <th>Complaint Date And Time</th>
                    <th>Action</th>
                     <th>Days Passed</th>
                </tr>
            </thead>
            <tbody>
            <?php
     while($rows=mysqli_fetch_array($result))
     {
          $today = date("Y-m-d h:i:s");
        $cdate = $rows['compl_date'];
        $date1 = "$cdate";
        $date2 = "$today";
        $diff = abs(strtotime($date2) - strtotime($date1));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

     ?>
                <tr>
                        <td><form action="complaintimg.php" method="POST">
                        <input type="hidden" name="eid" value="<?php echo $rows[1];?>">
                        <input type="hidden" name="cid" value="<?php echo $rows[0];?>">
                        <a style="text-decoration:none;" href="javascript:void(0);" onclick="$(this).closest('form').submit();">
                        <?php echo $rows['embankment_name'];?></form></td>

                        <td><?php echo $rows['problem'];?></td>
                        <td><?php echo $rows['problem_desc'];?></td>
                        <td><?php echo $rows['compl_date'];?></td>
                        <td><form action="changestatus.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $rows[0];?>">
                            <input type="hidden" name="desg" value="local">
                        <button class="btn btn-primary" type="submit">Request Completion</button></form></td>
                        <?php if($days >= 10 ){ ?>
                        <td style="color:red;"><b><?php echo $days; ?></b></td>
                        <?php } else { ?>
                        <td ><?php echo $days; ?></td>
                        <?php } ?>
                    </tr>
                    <?php
     }
     ?>
                    </tr>
      
                </tbody>
            <tfoot>
                <tr>
                    <th>Embankment Name</th>
                    <th>Problem</th>
                    <th>Problem Description</th>
                    <th>Complaint Date And Time</th>
                    <th>Action</th>
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