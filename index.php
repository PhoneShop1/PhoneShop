<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heng Lay Phone Shop</title>
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
<body style="background-color: #f0f0f5;">
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
                    <input id="search_txt" type="text" class="form-control" placeholder="Search Phone">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <div class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-right">
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
                </form>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <!--                    <p><a href="LogOut.php" class="btn btn-info btn-block" id="myBtn">Log Out</a></p>-->
                <?php
                if(isset($_SESSION['username'])){
                    echo "<form class=\"navbar-form navbar-right\">
                                <div >
                                    <a href=\"logout.php\"> <button type=\"button\" class=\"btn btn-default \">Log out</button></a>
                                </div>
                            </form>";
                }
                ?>

                <li class="dropdown">
                    <!--                        <button type="button" class="btn btn-default btn-lg"><a href="LogOut.php">log out</a></button>-->
                    <?php
                    if(!isset($_SESSION['username'])){
                        echo "<form class=\"navbar-form navbar-right\">
                                    <div >
                                        <button type=\"button\" class=\"btn btn-default\" id=\"myBtn\">Login</button>
                                    </div>
            
                                </form>";
                    }
                    ?>

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
<div id="result" style="display:none"></div>
<div id="display">

    <div id="carousel-example-generic" class="carousel slide col-md-8 col-md-offset-1" data-ride="carousel" style="background: none; margin-top: 50px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" role="listbox" >
            <div class="item active">
                <img src="img/Location.png" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="img/p10show1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="img/s8show1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="background: none;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="background: none;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container col-md-12 col-xs-12 col-sm-12">
        <nav class="navbar navbar-default col-md-8 col-md-offset-2">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mobile Phones <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accessories <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="container col-md-11  col-sm-11 col-xs-11 " id="container">
        <div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Mobile Phone
                </a>
                <a href="samsung.php?model=Huawei" class="list-group-item">Huawei</a>
                <a href="samsung.php?model=Samsung" class="list-group-item">Samsung</a>
                <a href="samsung.php?model=iphone" class="list-group-item">iphone</a>
                <a href="samsung.php?model=oppo" class="list-group-item">oppo</a>
            </div>
        </div>
        <div class="thumbnail panel panel-default  col-md-8 col-xs-8 col-sm-8" >
            <div class="thumbnail panel panel-default  col-md-12 col-xs-12 col-sm-12" >
                <nav class="navbar navbar-default" id="pageheader">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <img alt="Brand" src="img\huawei.png" style="width: 100px; height: 35px; margin-top: 10px;">

                        </div>
                        <div  class="navbar-header navbar-right" >
                            <a  href="samsung.php?model=Huawei">
                                <button class="btn btn-default navbar-btn " id="btn">more</button>
                            </a>
                        </div>
                    </div>
                </nav>
                <?php
                require_once('dbconf.php');
                //                        $sql = "select id,photo,namee from network ORDER by id DESC limit 4";
                $sql="select id,namee,photo,price from network where brand ='Huawei' ORDER BY id DESC limit 4";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_object($result)) {
                    echo"
                            
                                <a href='detail.php?id=$row->id' >
                                   <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
					<div class=\"thumbnail\" style='height: 220px;'>
						<img src=\"img/".$row->photo."\" alt=\"...\">
						<div class=\"caption\">
							$row->namee
                            </div>
                            <center><div style='color: red'>$row->price</div></center>
                        </div>
                    </div></a>
                        ";
                }

                ?>
            </div>

            <div class="thumbnail panel panel-default col-md-12 col-xs-12 col-sm-12" >
                <nav class="navbar navbar-default" id="pageheader">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img alt="Brand" src="http://www.pngall.com/wp-content/uploads/2016/03/Samsung-Logo-Transparent-PNG.png" style="width: 100px; height: 20px;">
                            </a>
                        </div>
                        <div  class="navbar-header navbar-right" >
                            <a  href="samsung.php?model=Samsung">
                                <button class="btn btn-default navbar-btn " >more</button>
                            </a>
                        </div>
                    </div>
                </nav>

                <?php
                require_once('dbconf.php');
                $sql="select id,namee,photo,price from network where brand ='Samsung' ORDER BY id DESC limit 4";
                $result = $conn->query($sql);

                while ($row=mysqli_fetch_object($result)){
                    echo "
                        <a href='detail.php?id=$row->id' >
                            <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                                <div class=\"thumbnail\" style='height: 250px;'>
                                    <img src=\"img/".$row->photo."\" alt=\"...\">
                                    <center><div class=\"caption\">
                                        $row->namee
                                    </div></center>
                                    <center><div style='color: red'>$row->price</div></center>
                                </div>
                            </div>
                        </a>
    
                    ";
                }
                ?>
            </div>
            <!--            Samsung-->
            <div class="thumbnail panel panel-default  col-md-12 col-xs-12 col-sm-12" >
                <nav class="navbar navbar-default" id="pageheader">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img alt="Brand" src="img\iphone-brand.png" style=" height: 30px;">
                            </a>
                        </div>
                        <div  class="navbar-header navbar-right" >
                            <a  href="samsung.php?model=iphone">
                                <button class="btn btn-default navbar-btn " >more</button>
                            </a>
                        </div>
                    </div>
                </nav>
                <?php
                require_once('dbconf.php');
                //                        $sql = "select id,photo,namee from network ORDER by id DESC limit 4";
                $sql="select id,namee,photo,price from network where brand ='iphone' ORDER BY id DESC limit 4";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_object($result)) {
                    echo"
                                
                                    <a href='detail.php?id=$row->id' >
                                       <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                        <div class=\"thumbnail\" style='height: 220px;'>
                            <img src=\"img/".$row->photo."\" alt=\"...\">
                            <center><div class=\"caption\">
                                $row->namee
                                </div></center>
                             <center><div style='color: red'>$row->price</div></center>
                            </div>
                        </div></a>
                            ";
                }

                ?>

            </div>
            <div class="thumbnail panel panel-default col-md-12 col-xs-12 col-sm-12" >
                <nav class="navbar navbar-default" id="pageheader">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img alt="Brand" src="img\oppo.png" style=" height: 30px;">
                            </a>
                        </div>
                        <div  class="navbar-header navbar-right" >
                            <a  href="samsung.php?model=oppo">
                                <button class="btn btn-default navbar-btn " >more</button>
                            </a>
                        </div>
                    </div>
                </nav>
                <?php
                require_once('dbconf.php');
                //                        $sql = "select id,photo,namee from network ORDER by id DESC limit 4";
                $sql="select id,namee,photo,price from network where brand ='oppo' ORDER BY id DESC limit 4";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_object($result)) {
                    echo"
                                    
                                        <a href='detail.php?id=$row->id' >
                                           <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                            <div class=\"thumbnail\" style='height: 220px;'>
                                <img src=\"img/".$row->photo."\" alt=\"...\">
                                <center><div class=\"caption\">
                                    $row->namee
                                    </div></center>
                                <center><div style='color: red'>$row->price</div></center>
                                </div>
                            </div></a>
                                ";
                }

                ?>

            </div>
            <!--			<div class="thumbnail panel panel-default  col-md-12 col-xs-12 col-sm-12" >-->
            <!--				<nav class="navbar navbar-default" id="pageheader">-->
            <!--					<div class="container-fluid">-->
            <!--						<div class="navbar-header">-->
            <!--							<a class="navbar-brand" href="#">-->
            <!--								<img alt="Brand" src="img\sugar.jpg" style=" height: 20px;">-->
            <!--							</a>-->
            <!--						</div>-->
            <!--						<div  class="navbar-header navbar-right" >-->
            <!--							<a  href="samsung.php?model=sugar">-->
            <!--								<button class="btn btn-default navbar-btn " >more</button>-->
            <!--							</a>-->
            <!--						</div>-->
            <!--					</div>-->
            <!--				</nav>-->
            <!--                        --><?php
            //                        require_once('dbconf.php');
            //                        //                        $sql = "select id,photo,namee from network ORDER by id DESC limit 4";
            //                        $sql="select id,namee,photo from network where brand like 'sugar' limit 4";
            //                        $result = $conn->query($sql);
            //
            //                        while ($row = mysqli_fetch_object($result)) {
            //                            echo"
            //
            //                            <a href='detail.php?id=$row->id' >
            //                            <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
            //                                <div class=\"thumbnail\">
            //                                    <img src=\"img/".$row->photo."\" alt=\"...\">
            //                                    <div class=\"caption\">
            //
            //                                        $row->namee
            //                                     </div>
            //                                 </div>
            //                             </div></a>
            //                                    ";
            //                        }
            //
            //                        ?>
            <!--            </div>-->
        </div>
        <div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Accessories
                </a>
                <a href="accessoriesDetail.php?model=Camera" class="list-group-item">Action Camera</a>
                <a href="accessoriesDetail.php?model=Bluetooth" class="list-group-item">Bluetooth HeadSet</a>
                <a href="accessoriesDetail.php?model=Bottle" class="list-group-item">Bottle</a>
                <a href="accessoriesDetail.php?model=Charger" class="list-group-item">Charger</a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $("#search_txt").keyup(function(){
            var txt = $("#search_txt").val();
            $("#result").show();
            $("#display").hide();
            if(txt != ''){
                $.ajax({
                    url: "processSearch.php",
                    method: "post",
                    data: {search:txt},
                    dataType: "text",
                    success:function(data){
                        $("#result").html(data);
                    }

                });
            }else if(txt == ''){
                $("#result").html('');
                $("#result").hide();
                $("#display").show();
            }
        });
    });
</script>

</body>
</html>