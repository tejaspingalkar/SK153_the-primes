<?php include "conn.php";?>
<?php include "header.php";?>
<?php
$q="select * from review ";
$res=mysqli_query($conn,$q);
?>
<html>
    <head>
<style>
    /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
#map {
  height: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
    </head>
    <body>
    <div id="map"></div>
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ&callback=initMap">
</script>
    </body>

    <script>
        function initMap() {

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 4.2,
  center: {lat: 20.5937, lng: 78.9629}
});

// Create an array of alphabetical characters used to label the markers.
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Add some markers to the map
// Note: The code uses the JavaScript Array.prototype.map() method to
// create an array of markers based on a given "locations" array.
// The map() method here has nothing to do with the Google Maps API.
var markers = locations.map(function(location, i) {
  return new google.maps.Marker({
    position: location,
    label: labels[i % labels.length]
  });
});

// Add a marker clusterer to manage the markers.
var markerCluster = new MarkerClusterer(map, markers,
    {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
    <?php
    while ($row=mysqli_fetch_array($res)){
      $que = "select * from embankment where embankment_id = '$row[1]' ";
      $res1=mysqli_query($conn,$que);
      while ($row1=mysqli_fetch_array($res1))
    {?>
      {lat: <?php echo $row1[3]?>, lng: <?php echo $row1[4]?>},
<?php } }?>
]
    </script>
<script src="js/vendor.min.js"></script>
<script src="js/cosmos.min.js"></script>
<script src="js/application.min.js"></script>
<script src="js/index.min.js"></script>
</html>
