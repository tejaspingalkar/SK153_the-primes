<?php
include "localheader.php";
?>
<?php
include "conn.php";



$query="select * from watertheft where $scope like '%$scopename%' and status = 'active'";
$result= mysqli_query($conn,$query );
//echo $query;

?>

       <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">View Theft Complaints</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table">
        <table   id="myTable" class="table" style="width:100%">
           <thead>
                <tr>
                    
                    <th>Type</th>
                    <th>Discription</th>
                    <th>Address</th>
                    
                    <th>Show On Map</th>
                    <th>Action</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($rows=mysqli_fetch_array($result))
            {              
     ?>
                <tr>
                        <td><form action="recorddetails.php" method="POST">
                        <input type="hidden" name="bid" value="<?php echo $rows[0];?>">
                        <input type="hidden" name="lat" value="<?php echo $rows['lat'];?>">
                        <input type="hidden" name="lon" value="<?php echo $rows['lon'];?>">
                        <input type="hidden" name="type" value="<?php echo $rows['type'];?>">
                        <input type="hidden" name="name" value="<?php echo $rows['name'];?>">
                        <input type="hidden" name="address" value="<?php echo $rows['address'];?>">
                        <a style="text-decoration:none;" href="javascript:void(0);" onclick="$(this).closest('form').submit();">
                        <?php echo ucfirst($rows['type']);?></form></td>
                        <td><?php echo $rows['description'];?></td>
                        <td><?php echo $rows['address'];?></td>
                       
                        <td><form action="shwmap.php" method="POST">
                            <input type="hidden" name="lat" value="<?php echo $rows['lat'];?>">
                            <input type="hidden" name="lon" value="<?php echo $rows['lon'];?>">
                            <input type="hidden" name="type" value="<?php echo $rows['type'];?>">
                        <button class="btn btn-primary" type="submit">Map</button></form></td>
                        <td><form action="chngstat.php" method="POST">
                            <input type="hidden" name="bid" value="<?php echo $rows[0];?>">
                        <button class="btn btn-primary" type="submit">Already mapped</button></form></td>
                        <td><?php echo $rows['time'];?></td>

                    </tr>
                    <?php
     }
     ?>
                </tbody>
            <tfoot>
                <tr>
                     <th>Type</th>
                     <th>Discription</th>
                    <th>Address</th>
                    
                    <th>Show On Map</th>
                    <th>Action</th>
                    <th>Time</th>


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