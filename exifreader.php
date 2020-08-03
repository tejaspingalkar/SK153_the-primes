<?php
include 'localheader.php';
include 'conn.php';

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






$query="select * from wimages where biid = '39'";
$result = mysqli_query($conn,$query);
?>
 <div class="col-sm-9 offset-sm-9">
            <?php
            //echo $query;
     while($rows=mysqli_fetch_array($result))
     {?>
        <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="<?php echo $rows['images'];?>">
            <img src="<?php echo $rows['images'];?>" alt="Cinque Terre" width="600" height="400">
          </a>
          <?php
          $exif = exif_read_data($rows['images']);
            $lon = getGps($exif["GPSLongitude"], $exif['GPSLongitudeRef']);
            $lat = getGps($exif["GPSLatitude"], $exif['GPSLatitudeRef']);
          echo $lat;
          echo $lon;
          echo "<br>";
          print_r($exif);
          echo '<h1>'.$exif['DateTimeOriginal'].'</h1>';
          ?>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
     <?php
    }
     ?>
         <div class="clearfix"></div>
          
         
     </div>
