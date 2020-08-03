<?php
include "conn.php";
echo "connected succe";
   $query= "select embankment_id, avg(crack),ROUND(avg(crack)*100.0/10.0),avg(vegetative),ROUND(avg(vegetative)*100.0/10.0),avg(geometry),ROUND(avg(geometry)*100.0/10.0) from review group by embankment_id" ;
   echo mysqli_error($conn);
   $result = mysqli_query($conn, $query);
  ?>
   <!DOCTYPE html>
   <html>
      <head>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script>
           $(document).ready( function () {
           $('#myTable').DataTable();

            </script>
   </head>
      <body>
      <div class="site-content">
       <div class="panel panel-default panel-table">
         <div class="panel-heading">
           <h3 class="m-t-0 m-b-5">Health Card Status</h3>
           <p class="text-muted m-b-0"></p>
         </div>
         <div class="panel-body">
           <div class="table-responsive">
       <table  Border="1" id="myTable" class="display" style="width:100%">
          <thead>
          <tr>
          <th>Embankment_id</th>
          <th>Crack_Avg</th>
          <th>Crack_Percentage(%)</th>
          <th>Vegtative_Growth_Avg</th>
          <th>Vegtative_Growth_Percentage(%)</th>
          <th>Geomatric_Distortion_Avg</th>
          <th>Geomatric_Distortion_Percentage(%)</th>
        </tr>
           </thead>
           <tbody>
           <?php
    while($rows=mysqli_fetch_assoc($result))
    {

    ?>
               <tr>
                      
                       <td><?php echo $rows['embankment_id'];?></td>
                       <td><?php echo $rows['avg(crack)'];?></td>
                       <td><?php echo $rows['ROUND(avg(crack)*100.0/10.0)'];?></td>
                       <td><?php echo $rows['avg(vegetative)'];?></td>
                       <td><?php echo $rows['ROUND(avg(vegetative)*100.0/10.0)'];?></td>
                       <td><?php echo $rows['avg(geometry)'];?></td>
                       <td><?php echo $rows['ROUND(avg(geometry)*100.0/10.0)'];?></td>

                   </tr>
                   <?php
    }
    ?>
               </tbody>
           <tfoot>
           <tr>
           <th>Embankment_id</th>
          <th>Crack_Avg</th>
          <th>Crack_Percentage(%)</th>
          <th>Vegtative_Growth_Avg</th>
          <th>Vegtative_Growth_Percentage(%)</th>
          <th>Geomatric_Distortion_Avg</th>
          <th>Geomatric_Distortion_Percentage(%)</th>
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

   