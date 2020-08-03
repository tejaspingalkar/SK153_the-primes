<?php 
if(!isset($_POST['eid'])){
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}
include "header.php";?>
<?php include"conn.php";?>

<?php
$eid = $_POST['eid'];
$rr23 = "select * from images where embankment_id = $eid";
 $r12 =  mysqli_query($conn,$rr23);
 if(mysqli_num_rows($r12)!= 0){
  while($rr3s=mysqli_fetch_array($r12)){
    $path = $rr3s['image'];
  }
    
 require 'image.compare.class.php';
 $img1 = '1.jpg';
 $img2 = $path;
 //echo $img2;
 /*
   these two images are almost the same so the hammered distance will be less than 10
   try it with images like this:
     1. the example images
     2. two complatly different image
     3. the same image (returned number should be 0)
     4. the same image but with different size, even different aspect ratio (returned number should be 0)
   you will see how the returned number will represent the similarity of the images.
 */ 
 
 $class = new compareImages;
 $hh =  $class->compare($img1,$img2);
 if($hh == '0'){
   $hh;
 }
 else{
   $hh = $hh +3.1422360;
   $hh =  $hh .'%';
 }

 }else{
   $hh = 'No images Uploaded'; 
 }
 
?>
<style>
@media print { 
    img {
         max-width : 300px;
         height : auto;
    }
}
@media screen {
#iimg{
  height: 80% !important;
  width: 100% !important;
  
}
</style>
<?php
/*

$q1="select * from embankment where river like '%%' and state like '%%' and city like '%%'";
$res1=mysqli_query($conn,$q);*/
$eid = $_POST['eid'];
$q="select * from embankment where embankment_id = '$eid'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);

$village = $row["village"];
$taluka = $row["taluka"];
$district = $row["district"];

$q1="select * from images where embankment_id = '$eid'";
$res1=mysqli_query($conn,$q1);

$q4="select * from images where embankment_id = '$eid'";
$res4=mysqli_query($conn,$q4);


$infqury= "select embankment_id, avg(crack),ROUND(avg(crack)*100.0/10.0),avg(vegetative),ROUND(avg(vegetative)*100.0/10.0),avg(geometry),ROUND(avg(geometry)*100.0/10.0) from review where embankment_id='$eid' " ;
$infresult = mysqli_query($conn, $infqury);
$infrow=mysqli_fetch_array($infresult);
 $overall = ($infrow['ROUND(avg(geometry)*100.0/10.0)']+
      $infrow['ROUND(avg(vegetative)*100.0/10.0)']+$infrow['ROUND(avg(crack)*100.0/10.0)']
      +$infrow['ROUND(avg(crack)*100.0/10.0)'])/4;
?>
<div class="site-content">
        <div class="row">
            
            <div class="col-sm-12">
<title>EmbankNetra</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>


<!-- Top menu on small screens -->


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:px">
<div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
  <?php
 
if($overall <= 33)
    {
      echo "<h4><b>  $row[1] &nbsp;<button class='btn btn-success btn-lg'></button> </b></h4>";
    }
    elseif($overall <=66 and $overall >33)
    {
      echo "<h4><b>  $row[1] &nbsp;<button class='btn btn-warning btn-lg'></button> </b></h4>";
    }
    else{
      echo "<h4><b>$row[1] &nbsp;<button class='btn btn-Danger btn-lg'></button> </b></h4>";

    }?>
    <img src="<?php echo $row['image'];?>" alt="Me"  id="iimg"  style="border: 1px solid white;border-radius:20px; ">
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4><?php //echo $eid;?></h4>
      <p><?php //print_r($infrow);?></p>
      
      <h4>Genral Details</h4>
      <table class="table">
        <tr>
          <th>Co-Ordinates</th>
          <td><?php echo "lat : ".$row["latitude"] ." &nbsp"." lon : ".$row["longitude"];?></td>
        </tr>

        <tr>
        <th>River Base</th>
          <td><?php echo $row["river"];?></td>
        </tr>

        <tr>
        <th>Location</th>
          <td><?php echo $row["location"];?></td>
        </tr>

        <tr>
        <th>Village</th>
          <td><?php echo $village;?></td>
        </tr>

        <tr>
        <th>Taluka</th>
          <td><?php echo $taluka;?></td>
        </tr>

        <tr>
        <th>District</th>
          <td><?php echo $district;?></td>
        </tr>


        <tr>
        <th>State</th>
          <td><?php echo $row["state"];?></td>
        </tr>

        <tr>
        <th>Date Of Establishment</th>
          <td><?php echo $row["date_of_establishment"];?></td>
        </tr>

        <tr>
        <th>Last Maintenance</th>
          <td><?php echo $row["date_of_modified"];?></td>
        </tr>

       
        

      </table>


      <hr class="w3-opacity">
      <br>
<h4>Technical Details</h4>
      <table class="table table-borderless">
  
  
  <tbody>
    <tr>
    <th scope="col">Area</th>
      <th scope="col"><?php?></th>
    </tr>
    <tr>
    <th scope="col">Diameter</th>
      <th scope="col"># </th>
    </tr>
    <tr>
    <th scope="col">Thickness</th>
      <th scope="col"># </th>
    </tr>
    <tr>
    <th scope="col">Length</th>
      <th scope="col"># </th>
    </tr>

    <tr>
    <th scope="col">Density</th>
      <th scope="col"># </th>
    </tr>

    <tr>
    <th scope="col">Youngs Modulus</th>
      <th scope="col"># </th>
    </tr>

    <tr>
    <th scope="col">Pile Spacing</th>
      <th scope="col"># </th>
    </tr>

    <tr>
    <th scope="col">Poissons Ratio</th>
      <th scope="col"># </th>
    </tr>
    
    
  </tbody>
</table>
<hr class="w3-opacity">
      
<h4>Health Details</h4>
<table class="table table-bordered">
  <thead>
  <tr>
      <th scope="col" style="text-align: center;">Parameters</th>
      <th scope="col" style="text-align: center;">Score ( % ) </th>
    </tr>
    <tr>
      <th scope="col">Cracks</th>
      <th scope="col"><?php echo $infrow['ROUND(avg(crack)*100.0/10.0)'];?> %</th>
    </tr>
    
    <tr>
      <th scope="col">Vegitative Growth</th>
      <th scope="col"><?php echo $infrow['ROUND(avg(vegetative)*100.0/10.0)'];?> %</th>
    </tr>
    <tr>
      <th scope="col">Geometrical Distortion</th>
      <th scope="col"><?php echo $infrow['ROUND(avg(geometry)*100.0/10.0)'];?> %</th>
    </tr>
    <tr>
    <?php
  
    
    if($overall <= 33)
    {
      echo "<th scope='col' colspan='2' style='color: #23f726;'>Overall Health  :  $overall  % &nbsp;[SAFE]</th>  ";
    }
    elseif($overall <=66 and $overall >33)
    {
      echo "<th scope='col' colspan='2' style='color: #f5f111;'>Overall Health   :  $overall  % &nbsp;[OK]</th>  ";
    }
    else{
      echo "<th scope='col' colspan='2' style='color: Red;'>Overall Health  :  $overall % &nbsp;[DANGER]</th>  ";

    }
   
?>
    </tr>
    <tr>
        <th colspan='2'>The Overall health according to Image Processing : [<?php echo $hh;?>]</th>
        </tr>
    </thead>
    
    </table>
    <SUB>Note : The greater the percentage more chance of danger</SUB>

  </thead>
 
</table>
      
    </div>
  </div>

  <!-- Push down content on small screens --> 

  <!-- Photo grid -->
  
  <!-- Photo grid -->
 
 
    <div class="w3-container w3-dark-grey w3-text-light-grey">
    <br><div class="col-md-6 m-b-30">
                <h4 class="m-t-0 m-b-30">Radar chart</h4>
                <canvas id="radar" style="height: 300px"></canvas>
              </div>
    </div>
    <div class="w3-hide-large" style="margin-top:33px"><h4>Crowd Sourced Photos</h4></div>
  <button class="btn btn-primary" onclick='document.getElementById("images").style.display = "block"'>Display Photos</button>
  <button class="btn btn-primary" onclick='document.getElementById("images").style.display = "none"'>Hide Photos</button><br>

  <div class="w3-container w3-dark-grey w3-text-light-grey" id="images" style="display: none;">
 <?php 
 $rr = "select * from images where embankment_id = $eid";
 $r1 =  mysqli_query($conn,$rr);
  
 while($rres=mysqli_fetch_array($r1)){
   $path = $rres['image'];
   ?>
     <img src="<?php echo $rres['image'];?>" style="width:350px" height="300px" onclick="onClick(this)" alt="">
  <?php } ?>
  </div>
    <br>
</div> </div> </div> 
<form action="embankinfoimg.php" method="POST" id="compare">
<input type="hidden" name="imgtarget" value="<?php echo $path?>">
<input type="hidden" name="eid" value="<?php echo $eid?>">

</form>
  
</div>
<script>
var g = {
        labels: ["Vegitation", "Cracks", "Geometry-Distortion", "Overall"],
        datasets: [{
            label: "Covrage",
            backgroundColor: "rgba(244,66,54,0.2)",
            borderColor: "#e53935",
            pointBackgroundColor: "#e53935",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "#e53935",
            data: [<?php echo $infrow['ROUND(avg(vegetative)*100.0/10.0)'];?>, <?php echo $infrow['ROUND(avg(crack)*100.0/10.0)'];?>, <?php echo $infrow['ROUND(avg(geometry)*100.0/10.0)'];?>, <?php echo $overall ?>]
        },]
    };

    var c = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Sales",
            data: [66, 28, 16, 10, 23, 18, 35],
            backgroundColor: "rgba(67, 185, 104, 0.2)",
            borderColor: "#34a853",
            borderWidth: 1
        }]
    };
</script>

</div>
            </div>

  
<script src="js/vendor.min.js"></script>
<script src="js/cosmos.min.js"></script>
<script src="js/application.min.js"></script>
<script src="js/charts-chartjs.min.js"></script>
<!-- End page content -->
</div>




<?php include "footer.php";?>