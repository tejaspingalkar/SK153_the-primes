<?php
include "header.php";
?>
<?php
include "conn.php";



$query="select * from watertheft ";
$result= mysqli_query($conn,$query );
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
            <h3 class="m-t-0 m-b-5">View Theft Complaints</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table">
        <table   id="myTable" class="table">
           <thead>
                <tr>
                    
                    <th>Type</th>
                    <th>Discription</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Show On Map</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($rows=mysqli_fetch_array($result))
            {              
     ?>
                <tr>
                        <td><?php echo ucfirst($rows['type']);?></form></td>
                        <td><?php echo $rows['description'];?></td>
                        <td><?php echo $rows['address'];?></td>
                       <td><?php echo $rows['status'];?></td>
                        <td><form action="shwmap.php" method="POST">
                            <input type="hidden" name="lat" value="<?php echo $rows['lat'];?>">
                            <input type="hidden" name="lon" value="<?php echo $rows['lon'];?>">
                            <input type="hidden" name="type" value="<?php echo $rows['type'];?>">
                        <button class="btn btn-primary" type="submit">Map</button></form></td>
                        
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
                    <th>Status</th>
                    <th>Show On Map</th>
                    <th>Time</th>


                </tr>
            </tfoot>
        </table>

    

     </table>
     </div>
     </div>
<?php include "footer.php";?>