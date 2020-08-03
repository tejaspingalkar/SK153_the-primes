<?php session_start();
if(!isset($_SESSION['local_authority']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}
include"conn.php";
$fname= $_SESSION['local_authority'][1];
$scope = $_SESSION['local_authority']['scope'];
$scopename = $_SESSION['local_authority']['scopename'];
//print_r($_SESSION['local_authority']);
//echo $scopename;
?>
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
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
             <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
             <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
} );
             </script>

 


  </head>
<body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
    <div class="site-header">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="local_authority_index.php">
            <img src="img/logo.png" alt="" height="25">
            <span>EmbankNetra</span>
          </a>
          <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
            <span class="hamburger"></span>
          </button>
          <button class="navbar-toggler right-sidebar-toggle pull-right visible-xs-block" type="button">
            <i class="zmdi zmdi-long-arrow-left"></i>
            <div class="dot bg-danger"></div>
          </button>
          <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="more"></span>
          </button>
        </div>
        <div class="navbar-collapsible">
          <div id="navbar" class="navbar-collapse collapse">
            <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
              <span class="hamburger"></span>
            </button>
        
            <ul class="nav navbar-nav">
              <li class="visible-xs-block">
                <div class="nav-avatar">
                  <img class="img-circle" src="img/avatars/1.jpg" alt="" width="48" height="48">
                </div>
                <h4 class="navbar-text text-center">Welcome, <?php echo $fname;?> </h4>
              </li>
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-table dropdown visible-xs-block">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-account-o"></i>
                  </span>
                 
             
       
             
              <li class="nav-table ">
            
                  <span class="nav-cell">Welcome <?php echo $fname; ?> , <?php echo"<br>". $_SESSION['local_authority']['scope'];?>,<?php echo $_SESSION['local_authority']['scopename'];?>
                    <span class="caret"></span>
                  </span>
                </a>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Main</li>
            <li class="with-sub ">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Embankment</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Waterbodies</li>
                <li ><a href="local_embank.php">View Water Bodies</a></li>
                <li ><a href="addwaterbodies.php">Add Water Bodies</a></li>
                <li ><a href="viewrecords.php">View Requests Table</a></li>
                <li ><a href="viewrecmap.php">View Requests Map</a></li>
                <li ><a href="viewsummery.php">View Summery</a></li>
                <li ><a href="localcluster.php">View Cluster Representetion</a></li>
                <li ><a href="locallheat.php">View HeatMap Representetion</a></li>
                 <li ><a href="viewwtheft.php">View Water Theft</a></li>
                 <li ><a href="viewstheft.php">View Sand Theft</a></li>
                 <li ><a href="view_review.php">Reviews</a></li>
               
               
              </ul>
            </li>


            <li class="with-sub ">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Maps</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Maps</li>
                <li ><a href="localflod.php">Flood Forecasring</a></li>
                <li ><a href="localmap.php">Weather Report</a></li>

               
              </ul>
            </li>
            <?php 
            if($scope != 'village')
            {
            ?>
            <li class="with-sub ">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">User</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">user</li>
                <li ><a href="addlocalauth.php">Add Local Autorities</a></li>
                <li ><a href="view_local_authority.php">View Local Autorities</a></li>
              </ul>
            </li>

 <?php 
            }
            ?>
            <li class="with-sub ">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account"></i>
                </span>
                <span class="menu-text">Account</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Account</li>
                <li ><a href="local_authority_logout.php">Logout</a></li>
                <li ><a href="#">Profile</a></li>
              </ul>
            </li>

           </ul>
            </li>
          
            
         
         
        </div>
      </div>
<?php
if(!isset($_SESSION['local_authority']))
{
  echo '<script>alert("You Are Not Valid User");window.location="local_authority_login.php";</script>';
}
//print_r($_SESSION['local_authority']);

?>
<?php

$query="select count(*) from waterbodies where $scope like '%$scopename%' and status = 'nomap'";
$result= mysqli_query($conn,$query );
//echo $query;
$rows=mysqli_fetch_array($result);
//print_r($rows);
$record_no = $rows[0];

$rev_no = 0;
$rvc="select * from embankment where $scope like '%$scopename%' and status = '1'";
$rvs= mysqli_query($conn,$rvc );
//echo $query;
while($rvrows=mysqli_fetch_array($rvs))
{
    $rqueryrev="select * from review where embankment_id = '$rvrows[0]'";
    $revres= mysqli_query($conn,$rqueryrev);
    while($revrows1=mysqli_fetch_array($revres))
    {
        ++$rev_no;
    }
    
}
//echo $rev_no;;
//print_r($rows);
$record_no = $rows[0];


$q1="select * from embankment where $scope LIKE '%$scopename%' and status = '1'";
$res1=mysqli_query($conn,$q1);
//echo $q1;
$q2="select * from embankment where $scope LIKE '%$scopename%' and status = '1'";
$res2=mysqli_query($conn,$q2);

$q3="select * from embankment where $scope LIKE '%$scopename%' and status = '1'";
$res3=mysqli_query($conn,$q3);

$q4="select * from embankment where $scope LIKE '%$scopename%' and status = '1'";
$res4=mysqli_query($conn,$q4);
?>
<style>
    #map_canvas {
    width: 100%;
    height: 100%;
}
</style>