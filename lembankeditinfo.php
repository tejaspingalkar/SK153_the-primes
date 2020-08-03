<?php
include "localheader.php";
$eid = $_POST['bid'];
$q="select * from embankment where embankment_id = '$eid'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);
?>

<?php
include "conn.php";
?>


<div class="site-content">
        <div class="row">
          <div class="col-sm-12">
    
<div class="panel panel-default m-b-0">
          <div class="form-wizard">
            <div class="fw-header">
              <ul class="nav nav-pills">
                <li class="active"><a href="#tab1" data-toggle="tab">Edit<span class="chevron"></span></a></li>
                </ul>
            </div>
           
              <div class="tab-content p-x-15">
                <div class="tab-pane active" id="tab1">
                <div id="latclicked"></div>
          <div id="longclicked"></div>
        
        <div id="latmoved"></div>
        <div id="longmoved"></div>
        <div id="myMap"></div> <br>
                <h3 class="m-t-0 m-b-30" id="lo">Edit Embankment</h3>
                <form class="form-horizontal" method="POST" action="editembank-save.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-1" class="col-sm-3 control-label">Enter Latitude</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon">.....</span>
                        <input type="text" class="form-control" value="<?php echo $row[3]; ?>" id="latitude" placeholder="Enter Latitude" name="latitude" >
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-1" class="col-sm-3 control-label">Enter Longitude</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon">.....</span>
                        <input type="text" value="<?php echo $row[4]; ?>" class="form-control" id="longitude"  placeholder="Enter Longitude" name="longitude">
                      </div>
                    </div>
                  </div>
                  
                 <input type="hidden" name="eid" value="<?php echo $eid; ?>">

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Enter Location</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row[2]; ?>" class="form-control" id="address" placeholder="Location  Of Embankment" name="location">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['state']; ?>" id="state" class="form-control" id="form-control-2" placeholder="Name Of State" name="state" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">District</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['district']; ?>" id="district" class="form-control" id="form-control-2" placeholder="Name Of District" name="district" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Taluka</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['taluka']; ?>" id="taluka" class="form-control" id="form-control-2" placeholder="Name Of Taluka" name="taluka" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Village</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['village']; ?>" id="village" class="form-control" id="form-control-2" placeholder="Name Of Village" name="village" >
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">River Name</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['river']; ?>" class="form-control" id="form-control-2" placeholder="River Where Embankment Situated" name="river">
                    </div>
                  </div>


                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Date Of Establishment</label>
                    <div class="col-sm-6">
                      <input type="date" value="<?php echo $row['date_of_establishment']; ?>" class="form-control" id="form-control-2" name="dateofest">
                    </div>
                  </div>  
                  
                  

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Image Of Embankment</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" id="form-control-2" name="embankphoto" accept="image/*" value="<?php echo $row['image']; ?>">
                    </div> 
                  </div>
                  <br>
                  <h3 class="m-t-0 m-b-30">Civil Parameters</h3>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Area ()</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['area']; ?>" class="form-control" id="form-control-2" placeholder="Total Area Embankment" name="area">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Diameter (cm)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['diameter']; ?>" class="form-control" id="form-control-2" placeholder="Total Diameter" name="diameter">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Thickness (cm)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['thickness']; ?>" class="form-control" id="form-control-2" placeholder="Total Thickness" name="thickness">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Length (m)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['length']; ?>" class="form-control" id="form-control-2" placeholder="Total Length" name="length">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Density ∂ (Kg/m<sup>3</sup>)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['density']; ?>" class="form-control" id="form-control-2" placeholder="Total Density" name="density">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Young's Modulus E (GPa)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['youngs_modulus']; ?>" class="form-control" id="form-control-2" placeholder="Young's Modulus" name="youngmod">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Pile Spacing S<sub>a</sub> (m)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['pile_spacing']; ?>" class="form-control" id="form-control-2" placeholder="Pile Spacing" name="pilespacing">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Cross-Sectional Area Of Pile Cap A<sub>i</sub> (m<sup>2</sup>)</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row[19]; ?>" class="form-control" id="form-control-2" placeholder="C-S area of Pile cap" name="csaofpc">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="col-sm-3 control-label">Poisson's Ratio ϑ </label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row[20]; ?>" class="form-control" id="form-control-2" placeholder="Poisson's Ratio" name="poissonratio">
                    </div>
                  </div>

                  
                <div class="form-group">
                    <div class="col-lg-2 col-sm-2 col-xs-6 m-y-5">
                    <button type="submit" class="btn btn-success btn-pill m-w-120" name="submit">Update Values</button>
                    </div>
                    </div>
                </form>
              </div>
              
              

</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyARGs5343eKcT7krKZn7wXkGznrlVf9dqQ">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<?php
include "footer.php";
?>