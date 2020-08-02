<?php session_start();
if(!isset($_SESSION['admin']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="alogin.php";';
  echo '</script>';
}
?>
<html>

	<head>
		<style>
			
		</style>
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
		
	
	
	</head>
<body class="layout layout-header-fixed layout-left-sidebar-fixed">
	<div class="site-overlay"></div>
    <div class="site-header">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">
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
				  <span class="menu-text">Embankments</span>
				</a>
				<ul class="sidebar-submenu collapse">
				  <li class="menu-subtitle">Dashboards</li>
				  <li><a href="addembank.php">Add Water Bodies</a></li>
				  <li ><a href="index.php">View Water Bodies</a></li>
				  <li ><a href="viewasummery.php">View Summery</a></li>
				  <li ><a href="viewrecmapadmin.php">View Request</a></li>
				  <li ><a href="seeembank.php">Filter Water Bodies</a></li>
				  <li ><a href="editembank.php">Edit Water Bodies</a></li>
				  <li ><a href="viewtheft1.php">View Theft Complaints</a></li>
				  <li ><a href="viewtheftdued.php">View Dued Complaints</a></li>
				  <li><a href="clusterreview.php">View Cluster Presentetion</a></li>
				   <li><a href="heatmap.php"> View HeatMap</a></li>
				   
				  
				 
				</ul>
			  </li>


			 <li class="with-sub">
				<a href="#" aria-haspopup="true">
				  <span class="menu-icon">
					<i class="zmdi zmdi-home"></i>
				  </span>
				  <span class="menu-text">Maps</span>
				</a>
				<ul class="sidebar-submenu collapse">
				  <li class="menu-subtitle">Dashboards</li>
				  <li><a href="flodfr.php">Flood Forecasting</a></li>
				  <li ><a href="map.php">Weather Report and Forecast</a></li>
				 
				   
				  
				 
				</ul>
			  </li>



			  <li class="with-sub ">
				<a href="#" aria-haspopup="true">
				  <span class="menu-icon">
					<i class="zmdi zmdi-account"></i>
				  </span>
				  <span class="menu-text">User</span>
				</a>
				<ul class="sidebar-submenu collapse">
				  
				  
				  <li ><a href="view_localauthority.php">View Local Authorities</a></li>
				  <li><a href="add_local_auth.php">Add Local Authorities</a></li>
				  
				</ul>
			  </li>
			  <li class="with-sub ">
				<a href="#" aria-haspopup="true">
				  <span class="menu-icon">
					<i class="zmdi zmdi-account"></i>
				  </span>
				  <span class="menu-text">Account</span>
				</a>
				<ul class="sidebar-submenu collapse">
				  
				  
				  <li ><a href="logout.php">Logout</a></li>
				 
				</ul>
			  </li>
			 
            
          </ul>
        </div>
      </div>
    