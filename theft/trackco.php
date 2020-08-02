
<?php 
if(!isset($_POST['id'])){
 echo '<script language="javascript">';
 echo 'alert("You are Not Doing It By valid Way");';
 echo 'window.location.href="../user/index.php";';
 echo '</script>';
}
?>
<?php include "../conn.php";?>
<?php
        $ref = $_POST['id'];
        $query="select * from theftimage where ref = '$ref'";
        $result= mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
        //echo $query;
        $rows=mysqli_fetch_array($result);
        if(!$rows){
            echo $query;
            echo '<script language="javascript">';
            echo 'alert("No Id Found");';
            echo 'window.location.href="../user/index.php";';
            echo '</script>';
        }?>
       
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <title>EmbankNetra</title>
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.html">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link rel="stylesheet" href="../css/vendor.min.css">
        <link rel="stylesheet" href="../css/cosmos.min.css">
        <link rel="stylesheet" href="../css/application.min.css">
        
        </script>

    
    </head>
    
    <body class="authentication-body">
        <div class="container-fluid">
            <div class="authentication-header m-b-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <a class="authentication-logo" href="../user/index.php">
                            <img src="img/logo.png" alt="" height="25">
                            <span>EmbankNetra</span>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">


                <div class="panel">
                    <h1>Complaint Status</h1>
            <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>State</th>
                <th>District</th>
                <th>Type</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
         $query1="select * from watertheft where theft_id = '$rows[1]'";
         $result1= mysqli_query($conn,$query1)or die("Error: ".mysqli_error($conn));
         $rows1=mysqli_fetch_array($result1);
     ?>
            <tr>
                <td><?php echo $rows1[0];?></td>
                <td><?php echo $rows1['state'];?></td>
                <td><?php echo $rows1['district'];?></td>
                <td><?php echo $rows1['type'];?></td>
                <td><?php echo $rows1['status'];?></td>

            </tr>
            <?php
     
     ?>
            </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
                <th>State</th>
                <th>District</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            
        </tfoot>
    </table>
            </div>
                   
                    </div>
                </div>
            </div>
            <div class="authentication-footer">
            </div>
        </div>
        <script src="../js/vendor.min.js"></script>
        <script src="../js/cosmos.min.js"></script>
        <script src="../js/application.min.js"></script>
    </body>

    
</html>