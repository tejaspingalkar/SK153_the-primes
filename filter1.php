<?php include "header.php";?>
<?php include "conn.php";?>
<?php
if(isset($_REQUEST['river']))
{
  $river = mysqli_real_escape_string($conn,($_REQUEST['river']));
}else{
  $river = "";
}

if(isset($_REQUEST['state']))
{
  $state = mysqli_real_escape_string($conn,($_REQUEST['state']));
}else{
  $state = "";
}

if(isset($_REQUEST['city']))
{
  $city = mysqli_real_escape_string($conn,($_REQUEST['city']));
}else{
  $city = "";
}

$q="select * from embankment where river like '%$river%' and state like '%$state%' and city like '%$city%' and status = '1'";
$res=mysqli_query($conn,$q);
$q1="select * from embankment where river like '%$river%' and state like '%$state%' and city like '%$city%' and status = '1'";
$res1=mysqli_query($conn,$q);

$q3="select DISTINCT river from embankment where status = '1'";
$res3=mysqli_query($conn,$q3);

$q4="select DISTINCT state from embankment where status = '1'";
$res4=mysqli_query($conn,$q4);

$q5="select DISTINCT city from embankment where status = '1'";
$res5=mysqli_query($conn,$q5);
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
        
            <div class="text-center">
              <form class="form-inline" action="filter.php" method="POST">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-account"></i>
                    </span>
                   
                    <input list="river" name="river" class="form-control"  placeholder="Select River">
                        <datalist id="river" >
                            <option value="" selected>
                              <?php
                                   while ($rowss1=mysqli_fetch_array($res3))
                                   {
                                    echo "<option value ='".$rowss1['river']."'>";
                                   }
                                ?>
                            
                            
                        </datalist>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-account"></i>
                    </span>
                   
                    <input list="state" name="state" class="form-control"  placeholder="Select State">
                        <datalist id="state" >
                            <option value="" selected>
                              <?php
                                   while ($rowss2=mysqli_fetch_array($res4))
                                   {
                                    echo "<option value ='".$rowss2['state']."'>";
                                   }
                                ?>
                            
                            
                        </datalist>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-account"></i>
                    </span>
                   
                    <input list="city" name="city" class="form-control"  placeholder="Select City">
                        <datalist id="city" >
                            <option value="" selected>
                              <?php
                                   while ($rowss3=mysqli_fetch_array($res5))
                                   {
                                    echo "<option value ='".$rowss3['city']."'>";
                                   }
                                ?>
                            
                            
                        </datalist>
                  </div>
                </div>


                
                <button type="submit" class="btn btn-primary">Filter</button>
                <button  class="btn btn-primary" onclick="window.location.href = 'seeembank.php';">Reset</button>
              </form>
              
            </div>
          </div>
        </div>
            <div class="col-sm-12">
            <div id="map_canvas" style="height: 620px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        
        jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    document.body.appendChild(script);
});
var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

function addYourLocationButton(map, marker) 
{
    var controlDiv = document.createElement('div');

    var firstChild = document.createElement('button');
    firstChild.style.backgroundColor = '#fff';
    firstChild.style.border = 'none';
    firstChild.style.outline = 'none';
    firstChild.style.width = '28px';
    firstChild.style.height = '28px';
    firstChild.style.borderRadius = '2px';
    firstChild.style.boxShadow = '0 1px 4px rgba(0,0,0,0.3)';
    firstChild.style.cursor = 'pointer';
    firstChild.style.marginRight = '10px';
    firstChild.style.padding = '0px';
    firstChild.title = 'Your Location';
    controlDiv.appendChild(firstChild);

    var secondChild = document.createElement('div');
    secondChild.style.margin = '5px';
    secondChild.style.width = '18px';
    secondChild.style.height = '18px';
    secondChild.style.backgroundImage = 'url(https://maps.gstatic.com/tactile/mylocation/mylocation-sprite-1x.png)';
    secondChild.style.backgroundSize = '180px 18px';
    secondChild.style.backgroundPosition = '0px 0px';
    secondChild.style.backgroundRepeat = 'no-repeat';
    secondChild.id = 'you_location_img';
    firstChild.appendChild(secondChild);

    google.maps.event.addListener(map, 'dragend', function() {
        $('#you_location_img').css('background-position', '0px 0px');
    });

    firstChild.addEventListener('click', function() {
        var imgX = '0';
        var animationInterval = setInterval(function(){
            if(imgX == '-18') imgX = '0';
            else imgX = '-18';
            
            $('#you_location_img').css('background-position', imgX+'px 0px');
        }, 500);
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                marker.setPosition(latlng);
                map.setCenter(latlng);
                clearInterval(animationInterval);
                $('#you_location_img').css('background-position', '-144px 0px');
            });
        }
        else{
            clearInterval(animationInterval);
            $('#you_location_img').css('background-position', '0px 0px');
        }
    });

    controlDiv.index = 1;
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(controlDiv);
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
        <?php while($row=mysqli_fetch_array($res)){?>
        ['London Eye, London', <?php echo $row[3]?>,<?php echo $row[4]?>],
        <?php }?>
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        <?php while($row1=mysqli_fetch_array($res1)){?>
           
        [
       
        '<div class="card " style="width: 350px;"> <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tataragi_Dam01n4272.jpg" class="card-img-top"  alt="..." style = "height:250px; width:350px;"> <div class="card-body"> <h3 class="card-title"><?php echo $row1[1];?>\' Embankment</h3> <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p> <form action = "embankinfo.php" method="POST"> <input type="hidden" name= "eid" value = "<?php echo $row1[0];?>"> <input type="submit" class="btn btn-primary btn-lg btn-block"></form>  </div> </div>'        
       ],
        <?php }?>
    ];  
    var myMarker = new google.maps.Marker({
        map: map,
        icon:"https://img.icons8.com/ultraviolet/40/000000/location-off.png",
        animation: google.maps.Animation.DROP,
        position: faisalabad
    });
    addYourLocationButton(map, myMarker);
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow({ maxWidth: 470}), marker, i;
    var faisalabad = {lat:31.4181, lng:73.0776};

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