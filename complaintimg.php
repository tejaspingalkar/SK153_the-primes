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

$eid = $_POST['eid'];
$cid = $_POST['cid'];
$query="select * from cimages where city = '$local_auth_dest' and complaintid = '$cid' order by iid desc";
$result= mysqli_query($conn,$query);

?>
      <div class="site-content">
        <div class="row">

          <div class="col-sm-12">
             
            <?php
     while($rows=mysqli_fetch_array($result))
     {?>
        <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="<?php echo $rows['image'];?>">
            <img src="<?php echo $rows['image'];?>" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
     <?php
     }
     ?>
         <div class="clearfix"></div>
          </div>
         
     </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/index.min.js"></script>

    
  </body>

<!-- Mirrored from big-bang-studio.com/cosmos/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:53:30 GMT -->
</html>