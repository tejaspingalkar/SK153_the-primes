<?php
include "localheader.php";
?>
<?php
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$type = $_POST['type'];
//echo $lat;
//echo $lon;
?>
<style>
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
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ&callback=initMap">
</script>
<script>

function initMap() {
  var myLatLng = {lat: <?php echo $lat ?>, lng: <?php echo $lon ?>};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: '<?php echo $type ?>',
    icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
  });
}
</script>
<script src="js/vendor.min.js"></script>
          <script src="js/cosmos.min.js"></script>
         <script src="js/application.min.js"></script>
         <script src="js/tables-datatables.min.js"></script>
</body>
   </html>