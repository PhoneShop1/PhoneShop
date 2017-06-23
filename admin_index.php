<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: admin_login.php');
}
?>
<?php
if(isset($_POST['newnote'])){
    header('Location: admin_index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
    <nav class="navbar navbar-default">
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
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <!--                    <p><a href="LogOut.php" class="btn btn-info btn-block" id="myBtn">Log Out</a></p>-->
                    <li class="dropdown">
                        <!--                        <button type="button" class="btn btn-default btn-lg"><a href="LogOut.php">log out</a></button>-->

<!--                        <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>-->
                        <a href="admin_logout.php"><button type="button" class="btn btn-default " id="log_out">Log out</button></a>
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
                                                    <form role="form" id="loginForm" method="POST" action="postLogin.php" novalidate="novalidate">
                                                        <div class="form-group">
                                                            <label for="username" class="control-label">Username</label>
                                                            <input type="text" class="form-control" id="username" name="first_Name" value="" required="" title="Please enter you username" placeholder="Username">
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password" class="control-label">Password</label>
                                                            <input type="password" class="form-control" id="password" name="passWord" value="" required="" title="Please enter your password">
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
<div class="container col-md-12 col-xs-12 col-sm-12" >
    <div class=" col-md-6 col-xs-6" id="brand" >
        <img src="img/phoneshop.svg">

    </div>
    <div class=" col-md-6 col-xs-6 col-sm-6" style="text-align: right;margin-top: 3%">
        <div style="margin-left: 25%">
            <h3 style="color: black;">Heng Lay Phone Shop</h3>
            <h3 style="color: black;">More information:
            </h3>
            <h3><a href="khmertypingonline@gmail.com">khmertypingonline@gmail.com</a></h3>
            <h3 style="color: black;">Tel: 077 465 615</h3>
        </div>
    </div>
</div>
<div class="col-md-12" style="margin-top: 30px">
    <div class="col-md-3">
        <div class="list-group">
            <a href="admin_index.php" class="list-group-item active">Admin</a>
            <a href="#input_form" class="list-group-item" id="addPhone">Add Phone</a>
            <a href="#input_acc" class="list-group-item" id="addAcc">Add Accessories</a>
            <a href="#list_phone" class="list-group-item" id="lst_phone">List Phone</a>
            <a href="#list_acc" class="list-group-item" id="lst_acc">List Accessories</a>
            <a href="#list_cus" class="list-group-item" id="lst_cus">List Customer</a>

        </div>
    </div>
    <div class="col-md-9">
        <div id="input_form" style="display: none">
            <form action="Network.php" method="post" enctype="multipart/form-data" >
                <input type="hidden"  name="size" value="1000000" />
                <input class="col-md-3 col-md-offset-2" type="file" name="image" />
                <div class="col-md-8 col-md-offset-2"><textarea name="namey" placeholder="Name"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="price" placeholder="Price"></textarea> </div>
                <div class="col-md-8 col-md-offset-2"><textarea name="brand" placeholder="Brand"></textarea> </div>
                <div class="col-md-8 col-md-offset-2"><textarea name="memory" placeholder="Internal Memory"></textarea> </div>
                <div class="col-md-8 col-md-offset-2"><textarea name="sime" placeholder="SIM"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="warr" placeholder="Warranty"></textarea> </div>
                <div class="col-md-8 col-md-offset-2"><textarea name="colord" placeholder="Color"></textarea> </div>
                <div class="col-md-8 col-md-offset-2"><textarea name="statuss" placeholder="Status"></textarea> </div>
                <div class="col-md-8 col-md-offset-2"><textarea name="remark" placeholder="Remark"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="technology" placeholder="Technology" ></textarea></div>
                <div class="col-md-8 col-md-offset-2"><button  type="submit" name="upload" >Sumbit</button></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="tGBrand" placeholder="2GBrand"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="thGBrand" placeholder="3GBrands"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="fGBrand" placeholder="4GBrands"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Speed" placeholder="Speed"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="GPRS" placeholder="GPRS"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="EDGE" placeholder="EDGE"></textarea></div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Announced" placeholder="Announced"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Status" placeholder="Status "></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Dimensions" placeholder="Dimensions"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Weight" placeholder="Weight"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Build" placeholder="Build"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="SIM" placeholder="SIM"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Typee" placeholder="Type"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Sizee" placeholder="Size"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Resolution" placeholder="Resolution"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Multitouch" placeholder="Multitouch"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Protection" placeholder="Protection"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="OS" placeholder="OS"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Chipset" placeholder="Chipset"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="CPU" placeholder="CPU"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="GPU" placeholder="GPU"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Card" placeholder="Card slot"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Internal" placeholder="Internal"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Primary" placeholder="Primary"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Features" placeholder="Features"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Video" placeholder="Video"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Secondary" placeholder="Secondary"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Alert" placeholder="Alert types"></textarea>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <textarea name="Loundspeaker" placeholder="Loudspeaker"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="jack" placeholder="3.5mm jack"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="WLAN" placeholder="WLAN"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Bluetooth" placeholder="Bluetooth"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="GPS" placeholder="GPS"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="NFC" placeholder="NFC"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Radio" placeholder="Radio"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="USB" placeholder="USB"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Sensors" placeholder="Sensors"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Messaging" placeholder="Messaging"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Brower" placeholder="Brower"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Java" placeholder="Java"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Colors" placeholder="Colors"></textarea>
                </div><div class="col-md-8 col-md-offset-2">
                    <textarea name="Battery" placeholder="Battery"></textarea>
                </div>

            </form>
        </div>
        <div id="input_acc" style="display: none">
            <form method="post" action="Accessories.php" enctype="multipart/form-data" style="margin-top: 30px">
                <input type="hidden"  name="size" value="1000000" />
                <div class="col-md-8 col-md-offset-2"><input type="file" name="images"/></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="namey" placeholder="name"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="price" placeholder="price"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Brand" placeholder="Brand"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Memory" placeholder="Internal Memory"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="SIM" placeholder="SIM"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Warran" placeholder="Warranty"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Color" placeholder="Color"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Status" placeholder="Status"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><textarea name="Remark" placeholder="Remark"></textarea></div>
                <div class="col-md-8 col-md-offset-2"><button  type="submit" name="upload">Enter</button></div>
            </form>
        </div>
        <div id="list_phone" style="display: none">
            <table>
                <?php
                $db = mysqli_connect("localhost","root","","phoneshop");
                $sql="select * from network order by id DESC ";
                $result = mysqli_query($db,$sql);
                while ($row = mysqli_fetch_object($result)) {
                    echo "
                        <div style='border: 1px solid;height: 50px;' class='col-md-8 col-md-offset-1' >
                            <div class='col-md-6' style='margin-top: 2%;'>$row->namee</div>
                            <a href='edit.php?id=$row->id'><div class='col-md-2' style='margin-top: 2%'><button>edit</button></div></a> 
                            <a href='delete.php?id=$row->id'><div class='col-md-2' style='margin-top: 2%'> <button>delete</button></div></a>                            
                            <a href='detail.php?id=$row->id'><div class='col-md-2' style='margin-top: 2%'> <button>detail</button></div></a>                            
                        </div>           
                    ";
                };
                ?>
            </table>
        </div>
        <div id="list_acc" style="display: none">
            <table>
                <?php
                $db = mysqli_connect("localhost","root","","phoneshop");
                $sql="select * from accessories order by id DESC";
                $result = mysqli_query($db,$sql);
                while ($row = mysqli_fetch_object($result)) {

                    echo "
                        <div style='border: 1px solid;height: 50px' class='col-md-8 col-md-offset-1'>
                            <div class='col-md-12'>
                                <div class='col-md-6' style='margin-top: 2%;'>$row->namee</div>
                                <a href='edit_access.php?id=$row->id'><div class='col-md-2' style='margin-top: 2%'><button>edit</button></div></a> 
                                <a href='delete.php?id=$row->id'><div class='col-md-2' style='margin-top: 2%'> <button>delete</button></div></a>
                                <a href='detail.php?id=$row->id'><div class='col-md-2' style='margin-top: 2%'> <button>detail</button></div></a>                                                        
                            </div>
                        </div>                     
                    ";
                };
                ?>
            </table>
        </div>
        <div id="list_cus" style="display: none">
            <table>
                <?php
                $db = mysqli_connect("localhost","root","","phoneshop");
                $sql="select * from userlogin order by userId DESC";
                $result = mysqli_query($db,$sql);
                while ($row = mysqli_fetch_object($result)) {

                    echo "
                        <div style='border: 1px solid;height: 50px' class='col-md-8 col-md-offset-1'>
                            <div class='col-md-6' style='margin-top: 2%;'>Username: <b style='color: blue'> $row->username</b></div>
                            <a href='edit_user.php?id=$row->userId'><div class='col-md-2' style='margin-top: 2%'><button>edit</button></div></a> 
                            <a href='delete.php?id=$row->userId'><div class='col-md-2' style='margin-top: 2%'> <button>delete</button></div></a>
                            <a href='delete.php?id=$row->userId'><div class='col-md-2' style='margin-top: 2%'> <button>delete</button></div></a>                            

                        </div>
                    ";
                };
                ?>
            </table>

        </div>
    </div>
</div>
    <script>
        $('#addPhone').click(function () {
            $('#input_acc').css("display","none")
            $('#input_form').css("display", "block")
            $('#list_phone').css("display","none")
            $('#list_acc').css("display","none")
            $('#list_cus').css("display","none")
        })
        $('#addAcc').click(function () {
            $('#input_acc').css("display","block")
            $('#input_form').css("display", "none")
            $('#list_phone').css("display","none")
            $('#list_acc').css("display","none")
            $('#list_cus').css("display","none")
        })
        $('#lst_phone').click(function () {
            $('#list_phone').css("display","block")
            $('#input_form').css("display", "none")
            $('#input_acc').css("display","none")
            $('#list_acc').css("display","none")
            $('#list_cus').css("display","none")
        })
        $('#lst_acc').click(function () {
            $('#list_phone').css("display","none")
            $('#input_form').css("display", "none")
            $('#input_acc').css("display","none")
            $('#list_acc').css("display","block")
            $('#list_cus').css("display","none")
        })
        $('#lst_cus').click(function () {
            $('#list_phone').css("display","none")
            $('#input_form').css("display", "none")
            $('#input_acc').css("display","none")
            $('#list_acc').css("display","none")
            $('#list_cus').css("display","block")
        })

    </script>
</body>
</html>