<?php include 'header.php'; ?>

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      
   #myMap {
      height: 80.6%;
      width: 99%;
   }
   </style>
     
     <div class="site-content">
        <div class="row">
          <div class="col-sm-12">
    
<div class="panel panel-default m-b-0">
          <div class="form-wizard">
            <div class="fw-header">
              <ul class="nav nav-pills">
                <li class="active"><a href="#tab1" data-toggle="tab">Add  <span class="chevron"></span></a></li>
                </ul>
            </div>
           
              <div class="tab-content p-x-15">
                <div class="tab-pane active" id="tab1">
                <div id="latclicked"></div>
          <div id="longclicked"></div>
        
        <div id="latmoved"></div>
        <div id="longmoved"></div>
        <div id="myMap"></div> <br>
                <h3 class="m-t-0 m-b-30" id="lo">Add New Entry</h3>
                <form class="form-horizontal" method="POST" action="addembnk-save.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-1" class="col-sm-3 control-label">Enter Latitude</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon">.....</span>
                        <input type="text" class="form-control" id="latitude" placeholder="Enter Latitude" name="latitude" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-1" class="col-sm-3 control-label">Enter Longitude</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon">.....</span>
                        <input type="text" class="form-control" id="longitude"  placeholder="Enter Longitude" name="longitude" required>
                      </div>
                    </div>
                  </div>
                  
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Waterbody Type</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="type" id="detail"  required>
                      <option value = "" >Select Watebody Type</option>
                        <option value="embankment" >Embankment</option>
                        <option value="canal" >Canal</option>
                        <option value="pond">Pond</option>
                        <option value="Dam">Dam</option>
                      </select>

                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Enter Location</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="address" placeholder="Location  Of Embankment" name="location" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-6">
                      <input type="text" id="state" class="form-control" id="form-control-2" placeholder="Name Of State" name="state" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">District</label>
                    <div class="col-sm-6">
                      <input type="text" id="city" class="form-control" id="form-control-2" placeholder="Name Of District" name="district" required>
                    </div>
                  </div>
                
                <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Taluka</label>
                    <div class="col-sm-6">
                      <input type="text" id="taluka" class="form-control" id="form-control-2" placeholder="Name Of taluka" name="taluka" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Village</label>
                    <div class="col-sm-6">
                      <input type="text" id="village" class="form-control" id="form-control-2" placeholder="Name Of Village" name="village" required>
                    </div>
                  </div>
                  
                   
                  
                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Enter Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Enter Name" name="nameofembank" required>
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">River Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Enter Neary By river Or Water Source" name="river" required>
                    </div>
                  </div>


                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Date Of Establishment</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="form-control-2" name="dateofest">
                    </div>
                  </div>  


                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Last Date Of Maintenance</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="form-control-2" name="dateoflast">
                    </div>
                  </div> 
                  
                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Image Of Establishment </label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" id="form-control-2" name="embankphoto" accept="image/*" required>
                    </div> 
                  </div>
                  <br>
                  <h3 class="m-t-0 m-b-30">Civil Parameters</h3>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Area ()</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Total Area Embankment" name="area">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Diameter (cm)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Total Diameter" name="diameter">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Thickness (cm)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Total Thickness" name="thickness">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Length (m)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Total Length" name="length">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Density ∂ (Kg/m<sup>3</sup>)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Total Density" name="density">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Young's Modulus E (GPa)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Young's Modulus" name="youngmod">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Pile Spacing S<sub>a</sub> (m)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Pile Spacing" name="pilespacing">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Cross-Sectional Area Of Pile Cap A<sub>i</sub> (m<sup>2</sup>)</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="C-S area of Pile cap" name="csaofpc">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Poisson's Ratio ϑ </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="form-control-2" placeholder="Poisson's Ratio" name="poissonratio">
                    </div>
                  </div>

                  
                <div class="form-group">
                    <div class="col-lg-2 col-sm-2 col-xs-6 m-y-5">
                    <button type="submit" class="btn btn-success btn-pill m-w-120" name="submit">Submit</button>
                    </div>
                    </div>
                </form>
              </div>
              
              

</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script>/*
  var map;
        
        function initMap() {                            
            var latitude = 27.7172453; // YOUR LATITUDE VALUE
            var longitude = 85.3239605; // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14,
              disableDoubleClickZoom: true, // disable the default map zoom on double click
            });
            
            // Update lat/long value of div when anywhere in the map is clicked    
            google.maps.event.addListener(map,'click',function(event) {                
                document.getElementById('latclicked').innerHTML = event.latLng.lat();
                document.getElementById('longclicked').innerHTML =  event.latLng.lng();
                document.getElementById('autolat').value = event.latLng.lat();
                document.getElementById('autolong').value =  event.latLng.lng();
          
            });

            
            // Update lat/long value of div when you move the mouse over the map
            google.maps.event.addListener(map,'mousemove',function(event) {
                document.getElementById('latmoved').innerHTML = event.latLng.lat();
                document.getElementById('longmoved').innerHTML = event.latLng.lng();
            });
                    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: 'Hello World',
              
              // setting latitude & longitude as title of the marker
              // title is shown when you hover over the marker
              title: latitude + ', ' + longitude 
            });    
            
            // Update lat/long value of div when the marker is clicked
            marker.addListener('click', function(event) {              
            document.getElementById('latclicked').innerHTML = event.latLng.lat();
           document.getElementById('longclicked').innerHTML =  event.latLng.lng();
           
          var k = event.latLng.lat();
          var  j = event.latLng.lng();
          
            });
            
            // Create new marker on double click event on the map
            google.maps.event.addListener(map,'dblclick',function(event) {
             
                var marker = new google.maps.Marker({
                  position: event.latLng, 
                  map: map, 
                  title: event.latLng.lat()+', '+event.latLng.lng()
                  
                });
                
                // Update lat/long value of div when the marker is clicked
                marker.addListener('click', function() {
                  document.getElementById('latclicked').innerHTML = event.latLng.lat();
                  document.getElementById('longclicked').innerHTML =  event.latLng.lng();
                });            
            });
           
            // Create new marker on single click event on the map
            /*google.maps.event.addListener(map,'click',function(event) {
                var marker = new google.maps.Marker({
                  position: event.latLng, 
                  map: map, 
                  title: event.latLng.lat()+', '+event.latLng.lng()
                });                
            });
          }*/</script>
<script type="text/javascript"> 
var map;
var marker;
var myLatlng = new google.maps.LatLng(20.268455824834792,85.84099235520011);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
function initialize(){
var mapOptions = {
zoom: 6,
center: myLatlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
};

map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

marker = new google.maps.Marker({
map: map,
position: myLatlng,
draggable: true 
}); 

geocoder.geocode({'latLng': myLatlng }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#latitude,#longitude').show();
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);


}
}
});

google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
  
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
var locaddress = results[0].formatted_address;
var locaddresarr = locaddress.split(',');
var state  = locaddresarr.length-2;
var city  = locaddresarr.length-3;
alert(locaddress);
var state =  locaddresarr[state];
state = state.trim();
state = state.replace(/[0-9]/g, '');
var city  = locaddresarr[city];
city = city.trim();
alert('Your State Is :' + state);
alert('Your City Is :'+city);
$('#city').val(city);
$('#state').val(state);
}
}
});
});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>   
         
        </script>
  
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/forms-form-wizard.min.js"></script>
</body>
</html>