<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: KONG KEA-->
<!-- * Date: 6/21/2017-->
<!-- * Time: 12:22 PM-->
<!-- */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/css/bootstrap.min.css">
    <meta content="width=device-width,initial-scale=1" name="viewpoet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="phoneshop.css">
    <script src="phoneshop.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" style="background-color: #b3e0ff;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HengLay PhoneShop</a>
            <h5 class="navbar-header" style="margin-top: 20px;">Tel: 077 465615</h5>
        </div>
        <div class="navbar-header ">

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <div>
                <?php
                session_start();

                if(isset($_COOKIE['username'])){
                    echo $_COOKIE['username'];
                }
                if(isset($_SESSION['username'])){
                    echo $_GET['name'];
                }else{
                    echo "";
                }
                ?>
            </div>
            </a>
            <ul class="nav navbar-nav navbar-right">
                <!--                    <p><a href="LogOut.php" class="btn btn-info btn-block" id="myBtn">Log Out</a></p>-->
                <form class="navbar-form navbar-right">
                    <div >
                        <a href="logout.php"> <button type="button" class="btn btn-default ">Log out</button></a>
                    </div>
                </form>
                <li class="dropdown">
                    <!--                        <button type="button" class="btn btn-default btn-lg"><a href="LogOut.php">log out</a></button>-->
                    <form class="navbar-form navbar-right">
                        <div >
                            <button type="button" class="btn btn-default" id="myBtn">Login</button>
                        </div>

                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div id="login-overlay" class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Login to henglay.com</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="well">
                                                <form role="form" id="loginForm" method="POST" action="login.php?op=in" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="username" class="control-label">Username</label>
                                                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Username">
                                                        <span class="help-block"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="control-label">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                        <span class="help-block"></span>
                                                    </div>
                                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="r" id="remember"> Remember login
                                                        </label>
                                                        <p class="help-block">(if this is a private computer)</p>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                                    <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="lead">Register now for <span class="text-success">FREE</span></p>
                                            <ul class="list-unstyled" style="line-height: 2">
                                                <li><span class="fa fa-check text-success"></span> See all your orders</li>
                                                <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                                                <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                                                <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                                                <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                                                <li><a href="/read-more/"><u>Read more</u></a></li>
                                            </ul>
                                            <p><a href="register.php" class="btn btn-info btn-block">Yes please, register now!</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-default col-md-6 col-md-offset-3"  >
    <center>
        <h1>Admin Login</h1>
    <form role="form" name="loginForm" action="admin_postLogin.php" method="post">
        <input class="form-control" type="text" name="username" placeholder="Username" style="width: 300px;"><br>
        <input class="form-control" type="password" name="password" placeholder="Password"  style="width: 300px;"><br>
        <button type="submit">Login</button>

    </form>
    <a href="forgetPasswordPage.php">Forget Password</a>
    </center>
</div>

</body>
</html>
