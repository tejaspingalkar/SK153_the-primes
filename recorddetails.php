<?php include "localheader.php";?>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<?php
include "conn.php";
?>
<?php 

$bid = $_POST['bid'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$name = $_POST['name'];
$address = $_POST['address'];
$type = $_POST['type'];

$query="select * from wimages where biid = '$bid' ";
$result = mysqli_query($conn,$query);

function getGps($exifCoord, $hemi) {

    $degrees = count($exifCoord) > 0 ? gps2Num($exifCoord[0]) : 0;
    $minutes = count($exifCoord) > 1 ? gps2Num($exifCoord[1]) : 0;
    $seconds = count($exifCoord) > 2 ? gps2Num($exifCoord[2]) : 0;

    $flip = ($hemi == 'W' or $hemi == 'S') ? -1 : 1;

    return $flip * ($degrees + $minutes / 60 + $seconds / 3600);

}

function gps2Num($coordPart) {

    $parts = explode('/', $coordPart);

    if (count($parts) <= 0)
        return 0;

    if (count($parts) == 1)
        return $parts[0];

    return floatval($parts[0]) / floatval($parts[1]);
}

?>
      <div class="site-content">
        <div class="row">

          <div class="col-sm-9">

          <table class="table">
        <tr>
          <th>Co-Ordinates</th>
          <td><?php echo "[lat] : $lat  &nbsp; [lon] :  $lon";?></td>
        </tr>

        <tr>
        <th>Address</th>
          <td><?php echo $address; ?></td>
        </tr>

        <tr>
        <th>Name</th>
          <td><?php echo $name;?></td>
        </tr>

        <tr>
        <th>Type</th>
          <td><?php echo $type;?></td>
        </tr>

        <tr>
        <th colspan="2"><form action="addembank1.php" method="POST">
        <input type="hidden" name="lat" value="<?php echo $lat;?>">
        <input type="hidden" name="lon" value="<?php echo $lon;?>">
        <button class="btn btn-primary btn-block" type="submit">Map To Network</button></form></th>
          
        </tr>
        
        
      </table>
      </div>
      <div class="col-sm-9 offset-sm-9">
            <?php
            //echo $query;
     while($rows=mysqli_fetch_array($result))
     
     {?>
     <?php
    
            $exif = exif_read_data($rows['images']);
            
            if(!$exif){
              echo "No image Data Found";
            }
            $lon = getGps($exif["GPSLongitude"], $exif['GPSLongitudeRef']);
            $lat = getGps($exif["GPSLatitude"], $exif['GPSLatitudeRef']);
     ?>
        <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://www.google.com/maps/search/?api=1&query=<?php echo $lat?>,<?php echo $lon?>">
            <img src="<?php echo $rows['images'];?>" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Latitude :[<?php echo $lat;?>] <br>Longitude :[<?php echo $lon;?>] <br>Timestamp :[<?php echo $exif['DateTime']?>]</div>
        </div>
      </div>
     <?php
     //print_r($exif);
    }
     ?>
         <div class="clearfix"></div>
          
         
     </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/index.min.js"></script>

    
  </body>

</html>