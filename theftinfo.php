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

$tid = $_POST['tid'];

$query="select * from watertheft where theft_id = '$tid' ";
$result = mysqli_query($conn,$query);
$rrows = mysqli_fetch_array($result);

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
          <td><?php echo "[lat] : $rrows[6];  &nbsp; [lon] :  $rrows[7];";?></td>
        </tr>

        <tr>
        <th>Address</th>
          <td><?php echo  $rrows['address']; ?></td>
        </tr>

        <tr>
        <th>Description</th>
          <td><?php echo $rrows['description'];?></td>
        </tr>

        <tr>
        <th>State</th>
          <td><?php echo $rrows['state'];?></td>
        </tr>

        <tr>
        <th>District</th>
          <td><?php echo $rrows['district'];?></td>
        </tr>

        <tr>
        <th colspan="2"><form action="addembank1.php" method="POST">
        <input type="hidden" name="lat" value="<?php echo $lat;?>">
        <input type="hidden" name="lon" value="<?php echo $lon;?>">
        <!--<button class="btn btn-primary btn-block" type="submit">Map To Network</button></form></th>-->
          
        </tr>
        
        
      </table>
      </div>
      <div class="col-sm-9 offset-sm-9">
            <?php
            $iqry = "select * from theftimage where theft_id = '$tid'";
            $ires = mysqli_query($conn,$iqry);
            //echo $query;
     while($irows=mysqli_fetch_array($ires))
     {?>
      <?php
    
    $exif = exif_read_data($irows['images']);
    
    if(!$exif){
      echo "No image Data Found";
    }
    $lon = getGps($exif["GPSLongitude"], $exif['GPSLongitudeRef']);
    $lat = getGps($exif["GPSLatitude"], $exif['GPSLatitudeRef']);
?>
        <div class="responsive">
        <div class="gallery">
        <a target="_blank" href="https://www.google.com/maps/search/?api=1&query=<?php echo $lat?>,<?php echo $lon?>">
            <img src="<?php echo $irows['image'];?>" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Latitude :[<?php echo $lat;?>] <br>Longitude :[<?php echo $lon;?>] <br>Timestamp :[<?php echo $exif['DateTime']?>]</div>
        </div>
      </div>
     <?php
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