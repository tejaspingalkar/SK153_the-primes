<?php include "localheader.php";?>
<?php
$qrec = "select * from waterbodies where status='nomap'";
$qres = mysqli_query($conn,$qrec);

$qrec = "select * from waterbodies where status='nomap'";
$qres1 = mysqli_query($conn,$qrec);
?>
<style>
#dtable {
    display: none;
}
</style>

    <div class="site-content">
       
        <div class="row">
        
                
            <div class="col-sm-12">
            
            <div id="map_canvas" style="height: 620px; width: 100%;"></div>

            
        <div class="col-sm-12">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Added Records</h3>
          </div>
            <div class="panel-body">
            

                                        


                
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
        <?php while($row=mysqli_fetch_array($qres)){
            ?>
        ['<?php echo " \'$row[1]\' " ?>,<?php echo " \'$row[7]\' " ?>', <?php echo $row[10]?>,<?php echo  $row[11]?>,'img/red.png'],
        <?php }?>
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        <?php while($row4=mysqli_fetch_array($qres1)){?>
           
        [
       
        '<div class="card " style="width: 350px;">  <div class="card-body"> <h3 class="card-title"><?php echo $row4[12];?>\' Embankment</h3> <p class="card-text">Type : <?php echo $row4[4]; ?> <br>State : <?php echo $row4[5]; ?></p> <form action = "recorddetails.php" method="POST"><input type="hidden" name= "bid" value = "<?php echo $row4[0];?>"> <input type="hidden" name= "lat" value = "<?php echo $row4[10];?>"><input type="hidden" name= "lon" value = "<?php echo $row4[11];?>"><input type="hidden" name= "name" value = "<?php echo $row4[1];?>"><input type="hidden" name= "address" value = "<?php echo $row4[12];?>"><input type="hidden" name= "type" value = "<?php echo $row4[4];?>"> <input type="submit" class="btn btn-primary btn-lg btn-block" value="View"></form></div></div>'        
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
        this.setZoom(7);
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