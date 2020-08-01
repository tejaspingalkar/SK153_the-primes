<?php 
session_start();
if(!isset($_POST['city']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="user/add/complainindex.php";';
  echo '</script>';
}

if($_POST['city'] == "")
{
  echo '<script language="javascript">';
  echo 'alert("Please Select Proper Option");';
echo 'window.location.href="user/add/complainindex.php";';

  echo '</script>';
}

//print_r($_POST);

$city =  $_REQUEST["city"];
if(!isset($_POST['id']))
{
  $details = (explode(" ",$city));
  //print_r($details);
  $id = $details[0];
  $city = $details[2];
}
else{
  $id = $_POST['id'];
  $city =  $_REQUEST["city"];
}

//echo $id;
//echo $city;

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


    <div class="site-content">
    <div class="panel panel-default col-md-10">
          <div class="panel-heading">
            <h3 class="m-y-0">Complaint Register </h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10">
                <form class="form-horizontal" name="uploadFile" enctype="multipart/form-data" id="upload-form" method="POST" action="complaintregistersave.php">
               
                  <div class="form-group">
                    <label  class="col-sm-3 control-label" for="form-control-2">Enter Your Name</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "name" onkeypress="return (event.charCode > 64 && 
                                	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" class="form-control input-pill" type="text" placeholder="Enter Your Full name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Your Email</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "email" class="form-control input-pill" type="email" placeholder="Enter Your valid Email Address" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Your Mobile No.</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "mobile_no" maxlength="10" pattern="\d{10}" class="form-control input-pill" type="text"  placeholder="Enter Your 10 digit Mobile No." pattern="[1-9]{1}[0-9]{9}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Embankment Name.</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "embankment_name" class="form-control input-pill" type="text"  placeholder="Enter Embankment Name." readonly value="<?php echo $city ?>" >
                    </div>
                  </div>
                  <input type="hidden" name="eid" value="<?php echo $id;?>">
                  <input type="hidden" name="city" value="<?php echo $city;?>">
                  <div class="form-group">
                    <label  class="col-sm-3 control-label" for="form-control-2">Problem</label>
                    <div class="col-sm-9">
                    <div >
                      <select id="form-control-2" name="problem" class="form-control input-pill">
                        <option value="Vegetative Growth">Vegetative Growth</option>
                        <option value="Cracks">Cracks</option>
                        <option value="Geometric Distortion">Geometric Distortion</option>
                        <option value="Others">Others</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  

                 
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-8">Problem Description</label>
                    <div class="col-sm-9">
                      <textarea id="form-control-8" name = "problem_desc" class="form-control" rows="3" placeholder="Write your Problem Details here...."></textarea>
                    </div>
                  </div>
                  
                  
                  <!--div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-11">Upload Image</label>
                    <div class="col-sm-9 aa" >
                    <p class="help-block">
                        <small>Upload Images of Embankment for better Results</small>
                      </p>
                    <div class="add-more-cont"><a id="moreImg"><img src="img/add_icon.jpg">Add Image</a></div>

                      <input type="file" name="image_upload-1" accept="image/*">
                     
                    </div>
                  </div-->
                  <div class="form-group">
                    <div class="col-sm-9">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="signed" checked="checked"> Accept <a id="myBtn">terms and conditions</a>
                        </label>
                      </div>   
                    </div>
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary btn-block">

                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script type="text/javascript">
 $(window).on('load',function(){
        $('#gps').modal('show');
    });

  $(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
function geoFindMe() {

const status = document.querySelector('#status');
const mapLink = document.querySelector('#map-link');

mapLink.href = '';
mapLink.textContent = '';

function success(position) {
  const latitude  = position.coords.latitude;
  const longitude = position.coords.longitude;

  status.textContent = '';
  mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
  mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
  alert(position.coords.latitude);
  alert(position.coords.longitude);
  document.cookie = "lat = " + position.coords.latitude;
document.cookie = "lon = " + position.coords.longitude;
  document.getElementById("lat").value = position.coords.latitude;
  document.getElementById("lon").value = position.coords.longitude;
  



}

function error() {
  status.textContent = 'Unable to retrieve your location';
}

if (!navigator.geolocation) {
  status.textContent = 'Geolocation is not supported by your browser';
} else {
  status.textContent = 'Locating…';
  navigator.geolocation.getCurrentPosition(success, error);
}

}
document.querySelector('#find-me').addEventListener('click', geoFindMe);
</script>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/forms-plugins.min.js"></script>
    </body>
</html>