<?php include "header.php";?>
<?php include"conn.php";?>
<?php
$q="select * from embankment where status = '1'";
$res=mysqli_query($conn,$q);
$q1="select * from embankment where status = '1'";
$res1=mysqli_query($conn,$q);
$q3="select * from embankment where status = '1'";
$res3=mysqli_query($conn,$q3);

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
            $(document).ready( function(){
            $('#myTable').DataTable();
} );
</script>
<style>
    #map_canvas {
    width: 100%;
    height: 100%;
}

#dtable {
    display: none;
}
</style>

    
    <div class="site-content">
        <div class="row">
            
            <div class="col-sm-12">
            <button class="btn btn-primary" onclick="mapp()">MAP</button>
            <button class="btn btn-primary" onclick="table()">Table</button>
            
            <div id="map_canvas" style="height: 620px; width: 100%;"></div>
            
            </div>


        <div id="dtable">
        <div class="col-sm-12">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Added Records</h3>
          </div>
            <div class="panel-body">
            <div class="table-responsive">
        <table  id="myTable" class="table" >
           <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>View Card</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            while($drow=mysqli_fetch_array($res3))
            {   ?>
                
                <tr>
                        <td><?php echo $drow[1];?></td>
                        <td> <?php echo ucfirst($drow['state']);?></td>
                        <td><?php echo $drow['district'];?></td>
                        <td><?php echo $drow['taluka'];?></td>
                        <td><?php echo $drow['village'];?></td>
                        <td><form action="embankinfo.php" method="POST">
                            <input type="hidden" name="eid" value="<?php echo $drow[0];?>">
                        <button class="btn btn-primary" type="submit">View</button></form></td>
                        <td><form action="embankeditinfo.php" method="POST">
                            <input type="hidden" name="eid" value="<?php echo $drow[0];?>">
                        <button class="btn btn-primary" type="submit">Edit</button></form></td>
                        

                    </tr>
                    <?php
     }
     ?>
                </tbody>
            <tfoot>
                <tr>
                <th>Name</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>View Card</th>
                    <th>Action</th>
                                        


                </tr>
            </tfoot>
        </table>

    

     </table>
     </div>
     </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<script>
         
        jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    document.body.appendChild(script);
});

function table(){
    document.getElementById("map_canvas").style.display = "none";
    document.getElementById("dtable").style.display = "block";

}

function mapp(){
    document.getElementById("dtable").style.display = "none";
    document.getElementById("map_canvas").style.display = "block";

}
function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        <?php while($row=mysqli_fetch_array($res)){
                     $mq = "SELECT avg(crack),ROUND(avg(crack)*100.0/10.0),avg(vegetative),ROUND(avg(vegetative)*100.0/10.0),avg(geometry),ROUND(avg(geometry)*100.0/10.0) from review WHERE embankment_id = '$row[0]'";
            
            $mres = mysqli_query($conn,$mq);
                while($rows = mysqli_fetch_array($mres))
                {
      
                $overall = ($rows['ROUND(avg(geometry)*100.0/10.0)']+
                            $rows['ROUND(avg(vegetative)*100.0/10.0)']+$rows['ROUND(avg(crack)*100.0/10.0)']
                        +$rows['ROUND(avg(crack)*100.0/10.0)'])/4;  
                        
                      if($overall <= 33)
                      {
                        $image = '\'img/green.png\'';
                      }elseif($overall <=66 and $overall >33)
                      {
                          $image = '\'img/blue.png\'';
                      }else
                      {
                          $image = '\'img/red.png\'';
                      }
                      
    
        
            ?>
        ['<?php echo " \'$row[1]\' " ?>, <?php echo " \'$row[23]\' " ?>', <?php echo $row[3]?>,<?php echo  $row[4]?>,<?php echo $image?>],
        
        <?php }}?>
        
         ];
                        
    // Info Window Content
    var infoWindowContent = [
        <?php while($row1=mysqli_fetch_array($res1)){?>
           
        [
       
        '<div class="card " style="width: 350px;"> <img src="<?php echo $row1['image']; ?>" class="card-img-top"  alt="..." style = "height:250px; width:350px;"> <div class="card-body"> <h3 class="card-title"><?php echo $row1[1];?>\' Embankment</h3> <p class="card-text">Type : <?php echo $row1[25]; ?> <br>State : <?php echo $row1[21]; ?></p> <form action = "embankinfo.php" method="POST"> <input type="hidden" name= "eid" value = "<?php echo $row1[0];?>"> <input type="submit" class="btn btn-primary btn-lg btn-block" value="View"></form>  </div> </div>'        
       ],
        <?php }?>
    ];  
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow({ maxWidth: 470}), marker, i;
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon:markers[i][3],
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
    
}

    </script>
<?php include "footer.php";?>