<?php include "localheader.php";?>
<?php
include "conn.php";
$q="select * from waterbodies where $scope like '%$scopename%'";
$res=mysqli_query($conn,$q);

?>


  
   
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ&callback=initMap&libraries=visualization&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
     

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 300px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 100px;
      }

      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 400px;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>
    <script>
      "use strict";

      // This example requires the Visualization library. Include the libraries=visualization
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">
      let map, heatmap;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5.6,
  center: {lat: 20.5937, lng: 78.9629}
        });
        heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints(),
          map: map,
          radius:20
        });
      }

      function toggleHeatmap() {
        heatmap.setMap(heatmap.getMap() ? null : map);
      }

      function changeGradient() {
        const gradient = [
          "rgba(0, 255, 255, 0)",
          "rgba(0, 255, 255, 1)",
          "rgba(0, 191, 255, 1)",
          "rgba(0, 127, 255, 1)",
          "rgba(0, 63, 255, 1)",
          "rgba(0, 0, 255, 1)",
          "rgba(0, 0, 223, 1)",
          "rgba(0, 0, 191, 1)",
          "rgba(0, 0, 159, 1)",
          "rgba(0, 0, 127, 1)",
          "rgba(63, 0, 91, 1)",
          "rgba(127, 0, 63, 1)",
          "rgba(191, 0, 31, 1)",
          "rgba(255, 0, 0, 1)"
        ];
        heatmap.set("gradient", heatmap.get("gradient") ? null : gradient);
      }

      function changeRadius() {
        heatmap.set("radius", heatmap.get("radius") ? null : 25);
      }

      function changeOpacity() {
        heatmap.set("opacity", heatmap.get("opacity") ? null : 0.2);
      } // Heatmap data: 500 Points

      function getPoints() {
        return [<?php
    while ($row=mysqli_fetch_array($res)){
      //$que = "select * from review where embankment_id = '$row[0]'";
      //$res1=mysqli_query($conn,$que);
      //while ($row1=mysqli_fetch_array($res1))
    {?>
          new google.maps.LatLng(<?php echo $row['lat']?>, <?php echo $row['lon']?>),
          <?php } }?>
          
        ];
      }
    </script>
 
    <div id="floating-panel">
      <button onclick="changeGradient()">Change gradient</button>
      <button onclick="changeRadius()">Change radius</button>
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
    <div class="site-content">
        <div class="panel panel-default panel-table">
        <button class="btn btn-primary" onclick="window.location.href='locallheat.php'">Review </button>
    <div id="map"></div>
    </div></div>
    <script src="js/vendor.min.js"></script>
<script src="js/cosmos.min.js"></script>
<script src="js/application.min.js"></script>
<script src="js/index.min.js"></script>

  </body>
</html>