<?php include "localheader.php";?>
<style>
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

            <div id="dtable">
        <div class="col-sm-12">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Added Records</h3>
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
                    <th>View Card</th>
                    <th>Action</th>
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
                        <td><form action="local_embankinfo.php" method="POST">
                            <input type="hidden" name="eid" value="<?php echo $drow[0];?>">
                        <button class="btn btn-primary" type="submit">View</button></form></td>
                        <td><form action="lembankeditinfo.php" method="POST">
                            <input type="hidden" name="bid" value="<?php echo $drow[0];?>">
                        <button class="btn btn-primary" type="submit">Edit</button></form></td>
                        <td><form action="localembankremove.php" method="POST">
                            <input type="hidden" name="bid" value="<?php echo $drow[0];?>">
                        <button class="btn btn-primary" type="submit">Remove</button></form></td>
                        

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
    </div>

<script>
        
        jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    document.body.appendChild(script);
});

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
        <?php while($row=mysqli_fetch_array($res1)){
           
                     $mq = "SELECT avg(crack),ROUND(avg(crack)*100.0/10.0),avg(vegetative),ROUND(avg(vegetative)*100.0/10.0),avg(geometry),ROUND(avg(geometry)*100.0/10.0) from review WHERE embankment_id = '$row[0]'";
            $mres = mysqli_query($conn,$mq);
           // echo $mq;
                while($rows1 = mysqli_fetch_array($mres))
                {
      
                $overall = ($rows1['ROUND(avg(geometry)*100.0/10.0)']+
                            $rows1['ROUND(avg(vegetative)*100.0/10.0)']+$rows1['ROUND(avg(crack)*100.0/10.0)']
                        +$rows1['ROUND(avg(crack)*100.0/10.0)'])/4;  
                        
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
        <?php while($row4=mysqli_fetch_array($res4)){?>
           
        [
       
        '<div class="card " style="width: 350px;"> <img src="<?php echo $row4['image']; ?>" class="card-img-top"  alt="..." style = "height:250px; width:350px;"> <div class="card-body"> <h3 class="card-title"><?php echo $row4[1];?></h3> <p class="card-text">Type : <?php echo $row4[25]; ?> <br>State : <?php echo $row4[21]; ?></p> <form action = "local_embankinfo.php" method="POST"> <input type="hidden" name= "eid" value = "<?php echo $row4[0];?>"> <input type="submit" class="btn btn-primary btn-lg btn-block" value="View"></form>  </div> </div>'        
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
function table(){
    document.getElementById("map_canvas").style.display = "none";
    document.getElementById("dtable").style.display = "block";

}

function mapp(){
    document.getElementById("dtable").style.display = "none";
    document.getElementById("map_canvas").style.display = "block";

}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ&callback=initialize">
    </script>
<?php include "footer.php";?>