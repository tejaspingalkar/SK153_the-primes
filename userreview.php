<?php 
session_start();
include "conn.php";
if(!isset($_POST['cityid']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="user/add/index.php";';
  echo '</script>';
}

if(isset($_POST['self_lat']))
{
  $self_lat = $_POST['self_lat'];
}else if(isset($_COOKIE['self_lat'])){

  $self_lat = $_COOKIE['self_lat'];
}else{
  echo '<script language="javascript">';
  echo 'alert("Your Current Location Is Not accessible");';
  echo 'alert("Clear Cache And Cookie");';
  echo 'window.location.href="user/add/index.php";';
  echo '</script>';
}


if(!isset($_POST['self_long']))
{
  $self_lon = $_COOKIE['self_long'];
}else{
  $self_lon = $_POST['self_long'];
}

//echo $self_lat;
//echo $self_lon;


if($_POST['cityid'] == "")
{
  echo '<script language="javascript">';
  echo 'alert("Please Select Proper Option");';
  echo 'window.location.href="user/add/index.php";';
  echo '</script>';
}

$eid = $_POST['cityid'];
// echo $eid;
$lq = "SELECT * FROM embankment where embankment_id = '$eid'";
$lres = mysqli_query($conn,$lq);
$lrow = mysqli_fetch_array($lres);

$elat = $lrow['latitude'];
$elon = $lrow['longitude'];

function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
      return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
  } else {
      return $miles;
  }
}

$dist = distance($elat, $elon, $self_lat, $self_lon, "K");
echo '<br>';
$dist =  $dist*1000;


?>
<!DOCTYPE html>
<html lang="en">
  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <title>EmbankNetra</title>
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/cosmos.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  <style>
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>
    </head>
    <body>
    <?php

  
   if($dist > '500000000000000000000000')
    {
     echo '<script language="javascript">';
     echo 'alert("You Are Not In the Range to Review OR ");';
     echo 'alert("Maybe your Current Location Is Not accessible \n");';
     echo 'window.location.href="user/add/index.php";';
    echo '</script>';
   }
   if(!isset($_POST['self_long']))
    {

    }
    ?>


      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:15px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6><span class="glyphicon glyphicon-lock"></span> Terms And Conditions</h6>
        </div>

        <div class="modal-body" style="padding:40px 50px;">
          <p>1) The every uploaded image got process through the image processing algorithm
                to avoid the offensive or nude content. <br><br>
             2) The mac address and ip address is also get submitted along with current gps location
                just to backtrack or use in future.<br><br>
             3) And MANY MANY MORE...........
    
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          
        </div>
      </div>
      
    </div>
  </div> 
    </div>
  </div> 

  



  <div class="modal fade" id="gps" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:15px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-lock"></span> About Location</h3>
        </div>

        <div class="modal-body" style="padding:40px 50px;">
          <p> <h4>Please Turn ON GPS of Your Device.<br> Then Click Following Button</h4> <br>
          <button id = "find-me" class="btn btn-primary btn-block">Show my location</button><br/>
                <p id = "status"></p>
             <p id = "map-link" target="_blank"></p>
    
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          
        </div>
      </div>
      
    </div>
  </div> 
    </div>
  </div> 
  <?php
//echo $_COOKIE['lat'];
?>    

    <div class="site-content">
    <div class="panel panel-default col-md-10">
          <div class="panel-heading">
            <h3 class="m-y-0">Review Embankment</h3>
            <?php //print_r($_COOKIE); ?>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10">
                <form class="form-horizontal" name="uploadFile" enctype="multipart/form-data" id="upload-form" method="POST" action="addreview.php">
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Your Name</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "name" class="form-control input-pill" type="text"onkeypress="return (event.charCode > 64 && 
                                	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Your Full name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Your Email</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "mail" class="form-control input-pill" type="email" placeholder="Enter Your valid Email Address" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Your Mobile No.</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "mob" class="form-control input-pill" type="text"  placeholder="Enter Your 10 digit Mobile No." pattern="[1-9]{1}[0-9]{9}">
                    </div>
                  </div>
                   
                  <hr>
                   <div style="text-align: center;"> &nbsp;&nbsp;&nbsp; Rate The Embankment From Scale 1 to 10 <br> 1 - Best Shape And 10 - Worst Shape <button type="button" class="btn btn-primary btn-xs" data-toggle="popover" title="Popover title" data-content="Help How to use.">?</button></div>
                    <br> <br> <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-7">Embankment You Reviewing</label>
                    <div class="col-sm-9">
                      <input id="form-control-7" class="form-control" type="text" value="<?php echo $_REQUEST['cityiid'];?>" readonly="readonly">
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label" for="form-control-2">Vegetative Growth</label>
                    <div class="slider-primary col-sm-9">
                        <input type="text" name = "veggro" data-plugin="bootstrapslider" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="1" data-slider-handle="round">
                    </div>
                  </div>
            
            <input type="hidden" name="eid"  value="<?php echo $eid;?>">
  

                  <div class="form-group">
                  <label class="col-sm-3 control-label" for="form-control-2">Cracks</label>
                    <div class="slider-primary col-sm-9">
                        <input type="text" name = "crack" data-plugin="bootstrapslider" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="1" data-slider-handle="round">
                    </div>
                  </div>


                  <div class="form-group">
                  <label class="col-sm-3 control-label" for="form-control-2">Geometry Distortion</label>
                    <div class="slider-primary col-sm-9">
                        <input type="text" name = "gdito" data-plugin="bootstrapslider" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="1" data-slider-handle="round">
                    </div>
                  </div>

                 

                 
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-8">Suggetions</label>
                    <div class="col-sm-9">
                      <textarea id="form-control-8" name = "review" class="form-control" rows="3" placeholder="If you have Any Suggetions Or complaints about Embankment Write Here"></textarea>
                    </div>
                  </div>
                  
                  
                  <!--<div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-11">Upload Image</label>
                    <div class="col-sm-9 aa" >
                    <p class="help-block">
                        <small>Upload Images of Embankment for better Results</small>
                      </p>
                    <div class="add-more-cont"><a id="moreImg"><img src="img/add_icon.jpg">Add Image</a></div>

                      <input type="file" name="image_upload-1" accept="image/*">
                     
                    </div>
                  </div>-->
                  <div class="form-group">
                    <div class="col-sm-9">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="signed" checked="checked"> Accept <a id="myBtn">terms and conditions</a>
                        </label>
                      </div>   
                    </div>
                  </div>
                  <input type="submit" name="Next" class="btn btn-primary btn-block">

                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script>
  //alert(document.cookie);
  </script>


<script type="text/javascript">
// $(window).on('load',function(){
//        $('#gps').modal('show');
//    });
//
//  $(document).ready(function(){
//  $("#myBtn").click(function(){
//    $("#myModal").modal();
//  });
//});
//function geoFindMe() {
//
//const status = document.querySelector('#status');
//const mapLink = document.querySelector('#map-link');
//
//mapLink.href = '';
//mapLink.textContent = '';
//
//function success(position) {
//  const latitude  = position.coords.latitude;
//  const longitude = position.coords.longitude;
//
//  status.textContent = '';
//  mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
//  mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
//  document.getElementById("lat").value = position.coords.latitude;
//  document.getElementById("lon").value = position.coords.longitude;
//  alert(position.coords.latitude);
//  alert(position.coords.longitude);
//   
//document.cookie = "lat = " + position.coords.latitude;
//document.cookie = "lon = " + position.coords.longitude;
//
//
//
//}
//
//function error() {
//  status.textContent = 'Unable to retrieve your location';
//}
//
//if (!navigator.geolocation) {
//  status.textContent = 'Geolocation is not supported by your browser';
//} else {
//  status.textContent = 'Locating…';
//  navigator.geolocation.getCurrentPosition(success, error);
//}
//
//}
//document.querySelector('#find-me').addEventListener('click', geoFindMe);
</script>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/forms-plugins.min.js"></script>
    </body>
</html>