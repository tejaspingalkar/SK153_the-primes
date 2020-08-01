<?php 
session_start();
include "conn.php";
if(!isset($_POST['city']))
{
  //echo '<script language="javascript">';
  //echo 'alert("You are Not Doing It By valid Way");';
  //echo 'window.location.href="user/add/index.php";';
  //echo '</script>';
}
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
    
    color:white !important;
    text-align: center;
    
  }
  .modal-footer {
    background-color: #f9f9f9;
  }

  .modal {
  display: block;
  padding: 0 1em;
  text-align: center;
  width: 100%;
}


#details{

display: none;

}
@media (min-width: 43.75em) {

.modal {
  padding: 1em 2em;
  text-align: right;
}
}

.modal > label {
  background: #000;
  border-radius: .2em;
  color: #FFDE16;
  cursor: pointer;
  display: inline-block;
  font-weight: bold;
  margin: 0.5em 1em;
  padding: 0.75em 1.5em;
  -webkit-transition: all 0.55s;
  transition: all 0.55s;
}

.modal > label:hover {
  -webkit-transform: scale(0.97);
  -ms-transform: scale(0.97);
  transform: scale(0.97);
}

.modal input {
  position: absolute;
  right: 100px;
  top: 30px;
  z-index: -10;
}

.modal__overlay {
  background: black;
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  text-align: center;
  top: 0;
  z-index: -800;
}

.modal__box {
  padding: 1em .75em;
  position: relative;
  margin: 1em auto;
  max-width: 500px;
  width: 90%;
}

@media (min-height: 37.5em) {

.modal__box {
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -80%);
  -ms-transform: translate(-50%, -80%);
  transform: translate(-50%, -80%);
}
}

@media (min-width: 50em) {

.modal__box { padding: 1.75em; }
}

.modal__box label {
  background: #FFDE16;
  border-radius: 50%;
  color: black;
  cursor: pointer;
  display: inline-block;
  height: 1.5em;
  line-height: 1.5em;
  position: absolute;
  right: .5em;
  top: .5em;
  width: 1.5em;
}

.modal__box h2 {
  color: #FFDE16;
  margin-bottom: 1em;
  text-transform: uppercase;
}

.modal__box p {
  color: #FFDE16;
  text-align: left;
}

.modal__overlay {
  opacity: 0;
  overflow: hidden;
  -webkit-transform: scale(0.5);
  -ms-transform: scale(0.5);
  transform: scale(0.5);
  -webkit-transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
  transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
}

input:checked ~ .modal__overlay {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
  transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
  z-index: 800;
}

input:focus + label {
  -webkit-transform: scale(0.97);
  -ms-transform: scale(0.97);
  transform: scale(0.97);
}

#modal{
 display:none;   
}

#line{
 display:none;   
}

#elem{
 display:none;   
}
  </style>
    </head>
    <body>
    <div class="modal">
  <input id="modal" type="checkbox" name="modal" tabindex="1">
  
  <div class="modal__overlay">
    <div class="modal__box">
      
      <h1 style="color:yellow; font-weight:800;">
          Please Turn On GPS
      </h1>
      <h2>And CLICK on following button to get address</h2>
      <button type="button" onclick="getLocation()" class="btn btn-warning">Get Address</button>
      <br ><b style="color:white;">Finding Address(It May Take Some Time):</b><div id="ad"></div>
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
            <h3 class="m-y-0">Add Waterbodies</h3>
            <div style="font-weight:900;">* Note : Uploading Images are Compulsory.</div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10">
                <form class="form-horizontal" name="uploadFile"  enctype="multipart/form-data" id="upload-form" method="POST" action="addwbsave.php">
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Enter Your Name</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" name = "name" class="form-control input-pill" type="text" onkeypress="return (event.charCode > 64 && 
                                	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Your Full name"placeholder="Enter Your Full name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Current Locality Address</label>
                    <div class="col-sm-9">
                      <input  id = "cadd" name = "cadd" class="form-control input-pill" type="text" placeholder="Enter Current Locality Address" >
                      <input  id = "line" name = "addline" class="form-control input-pill" type="text" placeholder="Enter Current Locality Address" required>

                    </div>
                    <div id="elem">
                    <div class="col-sm-3">
                      
                    </div><br>
                    <div class="col-sm-3">
                      
                    <input  id = "state" name = "state" class="form-control input-pill" type="text" placeholder="District" required>
                    <label class="col-sm-3 control-label" for="form-control-2">State</label>

                    </div>
                    <div class="col-sm-3">
                      
                    <input  id = "district" name = "district" class="form-control input-pill" type="text" placeholder="District" required>
                    <label class="col-sm-3 control-label" for="form-control-2">District</label>

                    </div>

                    <div class="col-sm-3">
                      
                    <input  id = "taluka" name = "taluka" class="form-control input-pill" type="text" placeholder="Taluka" required>
                    <label class="col-sm-3 control-label" for="form-control-2">Taluka</label>

                    </div><div class="col-sm-3">
                      
                      </div>
                    <div class="col-sm-3">
                      
                    <input  id = "village" name = "village" class="form-control input-pill" type="text" placeholder="Village" required>
                    <label class="col-sm-3 control-label" for="form-control-2">Village</label>

                    </div>
                    
                    <div class="col-sm-3">
                    <input  id = "postal" name = "postal" class="form-control input-pill" type="number" placeholder="Postal Code" required>
                    <label class="col-sm-3 control-label" for="form-control-2">Postal/PIN </label>

                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Waterbody Type</label>
                    <div class="col-sm-9">
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
                   
                  
  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-8">Description</label>
                    <div class="col-sm-9">
                      <textarea id="form-control-8" name = "description" class="form-control" rows="3" placeholder="If you have Any Suggetions Or Description about Write Here.."></textarea>
                    </div>
                  </div>
                  </div>
          <input type="hidden" name="lat" id = "lat" value="">
          <input type="hidden" name="lon" id = "lon" value="">
          
          <input type="hidden" name="data"  value="1">

                  <div class="form-group">
                    <div class="col-sm-9">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="signed" checked="checked"> Accept <a id="myBtn">terms and conditions</a>
                        </label>
                      </div>   
                    </div>
                  </div>
                  <input type="submit" value="Next" class="btn btn-primary btn-block">

                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

<script type="text/javascript">
 var x = document.getElementById("ad");
var alat;
var alon;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  alat = position.coords.latitude;
  alon = position.coords.longitude;
  
  document.getElementById("lat").value = alat;
  document.getElementById("lon").value = alon;
  //alert(alat);
  gaddress();
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "Turn On GPS first."
      alert("Turn On GPS first.");
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      alert("Location information is unavailable.")
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      alert("An unknown error occurred.");
      break;
  }
}

function gaddress()
{
  //alert(alat);
  //alert(alon);
  var geocodingAPI = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+alat+","+alon+"&key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ";
  $.getJSON(geocodingAPI, function (json) {
     if (json.status == "OK") {
         //Check result 0
         var result = json.results[0];
         //look for locality tag and administrative_area_level_1
         var city = "";
         var state = "";
         for (var i = 0, len = result.address_components.length; i < len; i++) {
             var ac = result.address_components[i];
            if (ac.types.indexOf("administrative_area_level_1") >= 0) state = ac.short_name;
         }
         var aa = result.formatted_address;
         if (state != '') {
             console.log(result);
         }
         
         var taluka = getAddressComponent(result, 'locality', 'long_name');
         var state1 = getAddressComponent(result, 'administrative_area_level_1', 'long_name');
         var village = getAddressComponent(result, 'locality', 'long_name');
         var district = getAddressComponent(result, 'administrative_area_level_2', 'long_name');
         var postal = getAddressComponent(result, 'postal_code', 'long_name');

         //alert(city);
         //alert(state);  
         //alert(aa);
         document.getElementById("line").value = aa;
         document.getElementById("district").value = district;
         document.getElementById("taluka").value = taluka;
         document.getElementById("village").value = village;
         document.getElementById("postal").value = postal;
         document.getElementById("state").value = state1;

         document.getElementById("ad").innerHTML = "<h4>"+aa+"<h4>"+"<br><button type='button' class='btn btn-primary' onclick = 'clo()'>Close</button>";
         setTimeout(function() {
document.getElementById("ad").innerHTML = "<button class='btn btn-primary btn-block' onclick = 'clo()'>Enter Manually</button>";

        }, 15000);
     }
   
 });
}

function getAddressComponent(place, componentName, property) {
  var comps = place.address_components.filter(function(component) {
    return component.types.indexOf(componentName) !== -1;
  });

  if(comps && comps.length && comps[0] && comps[0][property]) {
    return comps[0][property];
  } else {
    return null;
  }
}




function clo(){
  document.getElementsByClassName('modal')[0].style.display = "none";

}
  $(window).on('load',function(){
  document.getElementsByClassName('modal')[0].style.display = "none";

  });

$( "#cadd" ).focus(function() {
  document.getElementsByClassName('modal')[0].style.display = "block";
  document.getElementById('cadd').style.display = "none";
  document.getElementById('line').style.display = "block";
  document.getElementById('elem').style.display = "block";

  $( "#modal" ).prop( "checked", true );
});

//function showDiv(select){
//   if(select.value){
//    document.getElementById('details').style.display = "block";
//   } else{
//    document.getElementById('details').style.display = "none";
//   }
//} 
</script>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/forms-plugins.min.js"></script>
    </body>
</html>