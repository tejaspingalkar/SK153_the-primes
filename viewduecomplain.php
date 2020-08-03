<?php include 'header.php'; ?>
<?php include 'conn.php'; 



$query="select * from registercomplaint where stats = 'dued'";
$result= mysqli_query($conn,$query );
//echo $query;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
             <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
             <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
} );
             </script>
     <div class="site-content">
        <div class="row">
          <div class="col-sm-12">
    
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
                        <!--<td><form action="changestatus.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $rows[0];?>">
                            <input type="hidden" name="desg" value="admin">
                        <button class="btn btn-primary" type="submit">Completed</button></form></td>-->
                        <td>Dued</td>

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