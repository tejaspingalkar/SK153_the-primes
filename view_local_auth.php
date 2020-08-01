<html>

	<head>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">    
</script>
<?php include"conn.php";?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="">
		<title>Embankment</title>
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link rel="stylesheet" href="css/vendor.min.css">
		<link rel="stylesheet" href="css/cosmos.min.css">
		<link rel="stylesheet" href="css/application.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" class="init">
	

    $(document).ready(function() {
    $('#example').DataTable();
} );
        </script>
        <?php
        $query="select * from local_authority ";
        $result= mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
?>
	</head>
<body class="layout layout-header-fixed layout-left-sidebar-fixed">
	<div class="site-overlay"></div>
    <div class="site-header">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">
				<img src="img/logo.png" alt="" height="25">
				<span>Embanknetra</span>
				
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
				  <li><a href="addembank.php">Add Embankment</a></li>
				  <li ><a href="view_embankment.php">View Embankment</a></li>
				  <li><a href="dashboard-2.html">Remove Embankment</a></li>
				  
				</ul>
			  </li>

			  <li class="with-sub with-sub active open">
				<a href="#" aria-haspopup="true">
				  <span class="menu-icon">
					<i class="zmdi zmdi-account"></i>
				  </span>
				  <span class="menu-text">User</span>
				</a>
				<ul class="sidebar-submenu collapse">
				  
				  
				  <li class="active"><a href="view_local_auth.php">View Local Authorities</a></li>
				  <li ><a href="add_local_auth.php" >Add Local Authorities</a></li>
				 
				</ul>
			  </li>
			  
          </ul>
        </div>
      </div>
     



    
    <div class="site-content">
        <div class="row">
            
            <div class="col-sm-12">
            <div class="panel">
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Embankment</th>
                <th>Mobile</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
     while($rows=mysqli_fetch_array($result))
     {

     ?>
            <tr>
                <td><form action="aaa.php"><a style="text-decoration:none;" href="javascript:void(0);" onclick="$(this).closest('form').submit();"><?php echo $rows[1];?></form></td>
                <td><?php echo $rows[5];?></td>
                <td><?php echo $rows[8];?></td>
                <td><?php echo $rows[7];?></td>
                
            </tr>
            <?php
     }
     ?>
            </tbody>
        <tfoot>
            <tr>
            <th>Name</th>
                <th>Email</th>
                <th>Embankment</th>
                <th>Mobile</th>
            </tr>
            
        </tfoot>
    </table>
            </div>
            </div>
            </div>
        </div>
    </div>


<?php include "footer.php";?>