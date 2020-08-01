<?php include "header.php";?>
<?php include"conn.php";?>
<?php
$q="select * from embankment where status = '1'";
$res=mysqli_query($conn,$q);
$q1="select * from embankment where status = '1'";
$res1=mysqli_query($conn,$q);
?>
<style>
    #map_canvas {
    width: 100%;
    height: 100%;
}
</style>

    
    <div class="site-content">
        <div class="row">
        
            <div class="col-sm-12">
                Choose the embankment from map to edit <br>
            <div id="map_canvas" style="height: 620px; width: 100%;"></div>
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
        <?php while($row=mysqli_fetch_array($res)){?>
        ['London Eye, London', <?php echo $row[3]?>,<?php echo $row[4]?>],
        <?php }?>
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        <?php while($row1=mysqli_fetch_array($res1)){?>
           
        [
       
        '<div class="card " style="width: 350px;"> <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tataragi_Dam01n4272.jpg" class="card-img-top"  alt="..." style = "height:250px; width:350px;"> <div class="card-body"> <h3 class="card-title"><?php echo $row1[1];?>\' Embankment</h3> <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p> <form action = "embankeditinfo.php" method="POST"> <input type="hidden" name= "eid" value = "<?php echo $row1[0];?>"> <button class="btn btn-primary  btn-lg btn-block" type= "submit">Edit</button></form><form action = "embankremove.php" method="POST"> <input type="hidden" name= "eid" value = "<?php echo $row1[0];?>"> <button class="btn btn btn-outline-danger  btn-block" type= "submit">Remove</button></form>  </div> </div>'        
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