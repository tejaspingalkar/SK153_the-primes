<?php
session_start();
$otp = $_SESSION['otp'];
if(!isset($_SESSION['otp']))
{
     echo '<script language="javascript">';
     echo 'alert("You are Not Doing It By valid Way");';
     echo 'window.location.href="local_authority_login.php";';
     echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from big-bang-studio.com/cosmos/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2017 06:53:23 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <title>Cosmos</title>
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.html">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/cosmos.min.css">
        <link rel="stylesheet" href="css/application.min.css">
    </head>
    <body class="authentication-body">
        <div class="container-fluid">
            <div class="authentication-header m-b-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <a class="authentication-logo" href="user/index.php">
                            <img src="img/logo.png" alt="" height="25">
                            <span>EmbankNetra</span>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">

                    <div class="authentication-content m-b-30">
                        


                        <h3 class="m-t-0 m-b-30 text-center">Set New Password</h3>
                        <form action="setnewpasssave.php" method="POST">
                            <div class="form-group">
                                <label for="form-control-1">Enter New Password</label>
                                <input type="password" name="newpass"  class="form-control" id="form-control-1" placeholder="Enter Your New Password" required>
                            </div>

                            
                            <button type="submit" class="btn btn-info btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="authentication-footer">
                <span class="text-muted">Need help? Contact us mail@example.com</span>
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/cosmos.min.js"></script>
        <script src="js/application.min.js"></script>
    </body>

</html>