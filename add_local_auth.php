<?php include "header.php";?>
      <script>
		function chkd()
		{
		    
		    
		    if(document.getElementById("fname").value == "")
		    {
		        alert("Select Proper Name")
		    }
		    
		     if(document.getElementById("mname").value == "")
		    {
		        alert("Select Proper Middle Name")
		    }
		    
		     if(document.getElementById("lname").value == "")
		    {
		        alert("Select Proper Last Name")
		    }
		    
		     if(document.getElementById("mob").value == "")
		    {
		        alert("Select Proper Mobile")
		    }
		     if(document.getElementById("mail").value == "")
		    {
		        alert("Select Proper Email ")
		    }
		     if(document.getElementById("gender").value == "")
		    {
		        alert("Select Proper Gender")
		    }
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; 
			var yyyy = today.getFullYear();
			if(dd<10) 
			{
			    dd='0'+dd;
			} 

			if(mm<10) 
			{
			    mm='0'+mm;
			} 
			
			
			today = yyyy+'-'+mm+'-'+dd;
			
			//alert(today);
			var a = document.getElementById("dob").value;
			//alert(a);

			const date1 = new Date(a);
			const date2 = new Date(today);
			const diffTime = Math.abs(date2 - date1);
			const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
			
			//alert(diffDays);
			if(diffDays >=6570)
			{
				//alert("No Prob");
				document.getElementById("addauth").submit();

			}
			else{
				alert("Select A Valid Date");
				
			}
			
			
		}
   
  </script>
   <style>
    #fg{
          display :none;
    }
    </style>
      <div class="site-content">
        <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <?php //echo $scope;?>
            <div class="authentication-content m-b-30">
                        <h3 class="m-b-30">Add Local Authorities</h3>
                        <form action="local_authority_signup_validation_admin.php" id="addauth" method="POST">
                            <div class="form-group">
                                <label for="form-control-1">First Name</label>
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="form-control-1">Middel Name</label>
                                <input type="text" name="mname" class="form-control" id="mname" placeholder="Enter Middel Name" required>
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Date Of Birth</label>
                                <input type="date" id = "dob" name="dob" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Email</label>
                                <input type="text" name="email" class="form-control" id="mail" placeholder="xyz@gmail.com " required>
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Mobile Number</label>
                                <input type="text" name="mobile" class="form-control" id="mob" maxlength="10" pattern="\d{10}" placeholder="Enter 10 Digit Mobile Number " required>
							</div>
							
                            
                           
                            
                            <div class="form-group">
								<label for="form-control-2">Select Scope</label>
								<select name="scope" id="scope" class="form-control" onchange="showDiv()" required>
									<option value="">Select Scope</option>
									<option value="state">State</option>
									<option value="district">District</option>
									<option value="taluka">Taluka</option>
									<option value="village">Village</option>
								</select>
							</div>
           
                            <div id="fg">
                            <div class="form-group" >
                                <label for="form-control-2">Scope Name</label>
                                <input id="autocomplete" type="text" name="scop" onFocus="geolocate()" class="form-control"  placeholder="Enter Name Of Scope">
							</div></div>
							
						<input type="hidden" name = "scopename" value="" id="nscope" required>
							

                            <div class="form-group">
                                <label for="form-control-2">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
							<!--div class="form-group">
                                <label for="form-control-2">Password</label>
                                <input type="password" name="password" class="form-control" id="form-control-2"placeholder="Password" required>
              </div-->
              
                            <div class="clearfix">

<input type="hidden" name = "state1" value="" id="state1" required>
<input type="hidden" name = "district1" value="" id="district1" required>
<input type="hidden" name = "taluka1" value="" id="taluka1" required>
<input type="hidden" name = "village1" value="" id="village1" required>

                                <div class="pull-right">
                                    <button type="button" class="btn btn-info btn-labeled" onclick="chkd()">Register
                                        <span class="btn-label btn-label-right">
                                            <i class="zmdi zmdi-chevron-right p-x-5"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
					</div></div>
					<!--<div id="yyy">hello</div>-->
            </div>         
     
    </div>
      </div>

      <script>

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
  
}
function showDiv(){
  document.getElementById("fg").style.display = "block";

}
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();
  console.log(place);
  var village = getAddressComponent(place, 'locality', 'long_name');
  var state = getAddressComponent(place, 'administrative_area_level_1', 'long_name');
  var district = getAddressComponent(place, 'administrative_area_level_2', 'short_name');
  var country = getAddressComponent(place, 'country', 'long_name');
  var taluka = getAddressComponent(place, 'locality', 'long_name');
  document.getElementById('state1').value = state;
  document.getElementById('district1').value = district;
  document.getElementById('taluka1').value = taluka;
  document.getElementById('village1').value = village;
  //alert(city);
  //alert(state,);
  //alert(postalCode);
  k = document.getElementById('scope').value;
  if(k == 'district')
  {	
	//document.getElementById('yyy').innerHTML = district;
	document.getElementById('nscope').value = district;
	
  }
  else if(k == 'state')
  {
	//document.getElementById('yyy').innerHTML = state;
	document.getElementById('nscope').value = state;
  }
  else if(k == 'taluka')
  {
	//document.getElementById('yyy').innerHTML = taluka;
	document.getElementById('nscope').value = taluka;
  }
  else if(k == 'village')
  {
//	document.getElementById('yyy').innerHTML = village;
	document.getElementById('nscope').value = village;
  }
  
  
  
  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
     
    var addressType = place.address_components[i].types[0];
    alert(place.address_components[0].types[0]);
    if (componentForm[addressType]) {
        alert(place.address_components[0]);
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
 
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
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}


    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb5MYCPJyECrALFoBROVoi6CjCl9gZtXw&libraries=places&callback=initAutocomplete"
        async defer></script>

    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/index.min.js"></script>

    
  </body>


</html>