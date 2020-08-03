<?php
include "localheader.php";
?>
<?php
include "conn.php";


$query="select * from local_authority where scopename LIKE '%$scopename%' or state LIKE '%$scopename%' or district LIKE '%$scopename%' or taluka LIKE '%$scopename%' or village LIKE '%$scopename%'";
$result= mysqli_query($conn,$query);
//echo $query;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
             <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
             <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
} );
             </script>

       <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">View Local Authority</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
        <table   id="myTable" class="table" style="width:100%">
           <thead>
                <tr>
                    
                    <th> ID</th>
                    <th>Fname</th>
                    <th>Mname</th>
                    <th>Lname</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mobile</th>
                    <th>Scope</th>
                    <th>Region</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
     while($rows=mysqli_fetch_array($result))
     {
         //echo $query;
         
         $loq = "select * from local_authority where local_authority_id = '$rows[0]' and active = '1'";
         $reloq = mysqli_query($conn,$loq);
         while($llrow = mysqli_fetch_array($reloq)){
            // print_r($llrow);
         //if($scope != $rows['scope']){
                         
     ?>
                     <tr>
                        
                        <td><?php echo $llrow['local_authority_id'];?></td>
                        <td><?php echo $llrow['f_name'];?></td>
                        <td><?php echo $llrow['m_name'];?></td>
                        <td><?php echo $llrow['l_name'];?></td>
                        <td><?php echo $llrow['dat_of_birth'];?></td>
                        <td><?php echo $llrow['email'];?></td>
                        <td><?php echo $llrow['gender'];?></td>
                        <td><?php echo $llrow['mobile'];?></td>
                        <td><?php echo $llrow['scope'];?></td>
                        <td><?php echo $llrow['scopename'];?></td>
                        <td><form action="lrmauth.php" method="POST">
                            <input type="hidden" name="aid" value="<?php echo $llrow[0];?>">
                        <button class="btn btn-primary" type="submit">Remove</button></form></td>
                    </tr>
                  
                   <?php //}else
                  // continue;
                }
                   ?>
                    
                    
                    
                        
                    <?php
     }
     ?>
                </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                    <th>Fname</th>
                    <th>Mname</th>
                    <th>Lname</th>                   
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mobile No</th>
                    <th>Scope</th>
                    <th>Region</th>
                    <th>Action</th>
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