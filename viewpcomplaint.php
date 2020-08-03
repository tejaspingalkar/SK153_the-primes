<?php
include "localheader.php";
?>
<?php
include "conn.php";


$query="select * from registercomplaint where city = '$local_auth_dest' and stats = 'pending'";
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
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
     while($rows=mysqli_fetch_array($result))
     {

     ?>
                <tr>
                        <td><?php echo $rows['embankment_name'];?></td>
                        <td><?php echo $rows['problem'];?></td>
                        <td><?php echo $rows['problem_desc'];?></td>
                        <td><?php echo $rows['compl_date'];?></td>
                        <td>Pending</td>
                    </tr>
                    <?php
     }
     ?>
                </tbody>
            <tfoot>
                <tr>
                    <th>Embankment Name</th>
                    <th>Problem</th>
                    <th>Problem Description</th>
                    <th>Complaint Date And Time</th>
                    <th>Status</th>

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