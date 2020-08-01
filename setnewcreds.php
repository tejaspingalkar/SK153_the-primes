<!DOCTYPE html>
<html lang="en">

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
                        


                        <h3 class="m-t-0 m-b-30 text-center">Reset Password</h3>
                        <form action="setnewcedsverify.php" method="POST">
                            <div class="form-group">
                                <label for="form-control-1">Email Address</label>
                                <input type="email" name="email"  class="form-control" id="form-control-1" placeholder="Enter Your Register Email Address" required>
                            </div>

                            <div class="form-group">
                                <label for="form-control-1">Mobile Number</label>
                                <input type="text" name="mobile" maxlength="10" pattern="\d{10}" class="form-control" id="form-control-1" placeholder="Enter Registerd Mobile Number" required>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-info btn-block">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="authentication-footer">
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/cosmos.min.js"></script>
        <script src="js/application.min.js"></script>
    </body>

    <!-- Mirrored from big-bang-studio.com/cosmos/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2017 06:53:23 GMT -->
</html>