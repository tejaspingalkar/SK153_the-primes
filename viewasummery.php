<?php
include "header.php";
?>
<?php
include "conn.php";



$query="select * from embankment where status = '1'";
$result= mysqli_query($conn,$query );
//echo $query;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
             <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
             <script>
            $(document).ready( function () {
            $('#myTable').DataTable({
        "order": [[ 5, "desc" ]],
        
    } );
} );
var table = $('#myTable').DataTable();

var buttons = new $.fn.dataTable.Buttons(table, {
     buttons: [
       'copyHtml5',
       'excelHtml5',
       'csvHtml5',
       'pdfHtml5'
    ]
}).container().appendTo($('#buttons'));
             </script>
       <div class="site-content">
        <div class="panel panel-default panel-table">
        <div id="buttons"></div>    
    
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Added Records</h3>
            <p class="text-muted m-b-0"></p>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
        <table  id="myTable" class="table" style="width:100%">
           <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>Health</th>
                    <th>Details</th>
                    
                </tr>
            </thead>
            <tbody>
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
                <tr>
                        <td><?php echo $rows[1];?></td>
                        <td> <?php echo ucfirst($rows['state']);?></td>
                        <td><?php echo $rows['district'];?></td>
                        <td><?php echo $rows['taluka'];?></td>
                        <td><?php echo $rows['village'];?></td>
                        <?php
                        
                            if($overall <= 33)
                             {
                               echo" <td style='color:green;'>$overall</td>";
                             }
                             elseif($overall <=66 and $overall >33)
                             {
                                echo" <td style='color:goldenrod';>$overall</td>";
                             }
                             else{
                                echo" <td style='color:red';>$overall</td>";
                             }
                             ?>
                        <td><form action="local_embankinfo.php" method="POST">
                            <input type="hidden" name="eid" value="<?php echo $rows[0];?>">
                        <button class="btn btn-primary" type="submit">Details</button></form></td>
                        

                    </tr>
                    <?php
     }}
     ?>
                </tbody>
            <tfoot>
                <tr>
                <th>Name</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>Health</th>
                    <th>Details</th>
                                        


                </tr>
            </tfoot>
        </table>

     </div>

     </div>
     <div id="buttons"></div>    

     <script src="js/vendor.min.js"></script>
          <script src="js/cosmos.min.js"></script>
         <script src="js/application.min.js"></script>
         <script src="js/tables-datatables.min.js"></script>
</body>
   </html>