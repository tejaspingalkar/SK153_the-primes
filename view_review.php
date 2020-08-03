<?php
include "localheader.php";
?>
<?php
include "conn.php";

$rquery="select * from embankment where $scope like '%$scopename%' and status = '1'";
$rresult= mysqli_query($conn,$rquery);
//echo $query;

?>

       <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Embankment Reviews</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
        <table  id="myTable" class="table" style="width:100%">
           <thead>
                <tr>
                    
                    <th>Embankment ID</th>
                    <th>Vegitative</th>
                    <th>Crack</th>
                    <th>Geometry</th>
                    <th>Suggetions</th>
                </tr>
            </thead>
            <tbody>
            <?php
     while($rrows=mysqli_fetch_array($rresult))
     {
        $rquery1="select embankment_id,vegetative,crack,geometry,suggetions from review where embankment_id = '$rrows[0]'";
        $rresult1= mysqli_query($conn,$rquery1);
        while($rrows1=mysqli_fetch_array($rresult1))
        {
     ?>
                <tr>
                        <td><?php echo $rrows1['embankment_id'];?></td>
                        <td><?php echo $rrows1['vegetative'];?></td>
                        <td><?php echo $rrows1['crack'];?></td>
                        <td><?php echo $rrows1['geometry'];?></td>
                        <td><?php echo $rrows1['suggetions'];?></td>
                    </tr>
                    <?php
     }}
     ?>
                </tbody>
            <tfoot>
                <tr>
                <th>Embankment ID</th>
                    <th>Vegitative</th>
                    <th>Crack</th>
                    <th>Geometry</th>
                    <th>Suggetions</th>
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