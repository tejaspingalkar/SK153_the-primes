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
                        <?php
                        if (isset($_POST['msg'])) {
                            ?>
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        <i class="zmdi zmdi-close"></i>
                                    </span>
                                </button>
                                <span class="alert-icon">
                                    <i class="zmdi zmdi-close-circle-o"></i>
                                </span>
                                <strong>Oh snap!</strong> <?php echo $_POST['msg']; ?>
                            </div>


                            <?php
                        }
                        ?>

                        <h3 class="m-t-0 m-b-30 text-center">Login</h3>
                        <form action="local_authority_login_validation.php" method="post">
                            <div class="form-group">
                                <label for="form-control-1">Mobile Number</label>
                                <input type="text" name="mobile" maxlength="10" pattern="\d{10}" class="form-control" id="form-control-1" placeholder="Mobile No." required>
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Password</label>
                                <input type="password" name="password" class="form-control" id="form-control-2" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                               
                                <a href="setnewcreds.php" class="text-info pull-right">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-info btn-block">Login</button>
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

   
</html>