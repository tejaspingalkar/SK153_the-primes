<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from big-bang-studio.com/cosmos/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2017 06:53:23 GMT -->
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
                        <a class="authentication-logo" href="index-2.html">
                            <img src="img/logo.png" alt="" height="25">
                            <span>Expense Diary</span>
                        </a>
                    </div>
                    <div class="pull-right">
                        <a href="local_authority_login.php" class="btn btn-outline-info">Login</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <ul class="authentication-progress m-b-30">
                        <li></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="authentication-content m-b-30">
                        <h3 class="m-b-30">Create Your Cosmos Account</h3>
                        <form action="local_authority_signup_validation.php" method="POST">
                            <div class="form-group">
                                <label for="form-control-1">First Name</label>
                                <input type="text" name="fname" class="form-control" id="form-control-1" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="form-control-1">Middel Name</label>
                                <input type="text" name="mname" class="form-control" id="form-control-1" placeholder="Enter Middel Name">
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="form-control-2" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Date Of Birth</label>
                                <input type="date" name="dob" class="form-control" id="form-control-2" >
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Email</label>
                                <input type="text" name="email" class="form-control" id="form-control-2" placeholder="xyz@gmail.com " >
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Mobile Number</label>
                                <input type="text" name="mobile" class="form-control" id="form-control-2" placeholder="Enter 10 Digit Mobile Number ">
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Embankment Name</label>
                                <input type="text" name="eid" class="form-control" id="form-control-2" placeholder="Enter your Embankment name ">
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Password</label>
                                <input type="text" name="password" class="form-control" id="form-control-2" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="form-control-2">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="clearfix">

                                <div class="pull-right">
                                    <button type="submit" class="btn btn-info btn-labeled">Register
                                        <span class="btn-label btn-label-right">
                                            <i class="zmdi zmdi-chevron-right p-x-5"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
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