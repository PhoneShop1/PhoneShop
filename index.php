<!DOCTYPE html>
<html>
<head>
	<title>Heng Lay Phone Shop</title>
	<link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/css/bootstrap.min.css">
	<meta content="width=device-width,initial-scale=1" name="viewpoet">
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

                        <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>
                        <button type="button" class="btn btn-default " id="log_out">Log out</button>
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
                                                    <form id="loginForm" method="POST" action="postLogin.php" novalidate="novalidate">
                                                        <div class="form-group">
                                                            <label for="username" class="control-label">Username</label>
                                                            <input type="text" class="form-control" id="username" name="first_Name" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
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
                                                <p><a href="SignUp.php" class="btn btn-info btn-block">Yes please, register now!</a></p>
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
	<div class="container col-md-12 col-xs-12 col-sm-12">
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
    <div id="carousel-example-generic" class="carousel slide col-md-12" data-ride="carousel" style="background: none;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" >
            <div class="item active">
                <img src="img/p10show.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="img/p10show.jpg" alt="...">
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
	<div class="container col-md-11  col-sm-11 col-xs-11 " id="container">
		<div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
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
                        $sql="select id,namee,photo from network where brand like'Huawei'";
                        $result = $conn->query($sql);

                            while ($row = mysqli_fetch_object($result)) {
                        echo"
                            
                                <a href='detail.php?id=$row->id' >
                                   <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
					<div class=\"thumbnail\">
						<img src=\"img/".$row->photo."\" alt=\"...\">
						<div class=\"caption\">
							
							$row->namee

                            </div>
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
                $sql="select id,namee,photo from network where brand like'Samsung' limit 4";
                $result = $conn->query($sql);

                    while ($row=mysqli_fetch_object($result)){
                    echo "
                        <a href='detail.php?id=$row->id' >
                            <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                                <div class=\"thumbnail\">
                                    <img src=\"img/".$row->photo."\" alt=\"...\">
                                    <div class=\"caption\">
                                        $row->namee
                                    </div>
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
                    $sql="select id,namee,photo from network where brand like 'iphone' limit 4";
                    $result = $conn->query($sql);

                    while ($row = mysqli_fetch_object($result)) {
                        echo"
                                
                                    <a href='detail.php?id=$row->id' >
                                       <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                        <div class=\"thumbnail\">
                            <img src=\"img/".$row->photo."\" alt=\"...\">
                            <div class=\"caption\">
                                
                                $row->namee
    
                                </div>
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
                    $sql="select id,namee,photo from network where brand like 'oppo' limit 4";
                    $result = $conn->query($sql);

                    while ($row = mysqli_fetch_object($result)) {
                        echo"
                                    
                                        <a href='detail.php?id=$row->id' >
                                           <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                            <div class=\"thumbnail\">
                                <img src=\"img/".$row->photo."\" alt=\"...\">
                                <div class=\"caption\">
                                    
                                    $row->namee
        
                                    </div>
                                </div>
                            </div></a>
                                ";
                    }

                    ?>

			</div>
			<div class="thumbnail panel panel-default  col-md-12 col-xs-12 col-sm-12" >
				<nav class="navbar navbar-default" id="pageheader">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">
								<img alt="Brand" src="img\sugar.jpg" style=" height: 20px;">
							</a>
						</div>
						<div  class="navbar-header navbar-right" >
							<a  href="samsung.php?model=sugar">
								<button class="btn btn-default navbar-btn " >more</button>
							</a>
						</div>
					</div>
				</nav>
                        <?php
                        require_once('dbconf.php');
                        //                        $sql = "select id,photo,namee from network ORDER by id DESC limit 4";
                        $sql="select id,namee,photo from network where brand like 'sugar' limit 4";
                        $result = $conn->query($sql);

                        while ($row = mysqli_fetch_object($result)) {
                            echo"
                                        
                                            <a href='detail.php?id=$row->id' >
                                               <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                                <div class=\"thumbnail\">
                                    <img src=\"img/".$row->photo."\" alt=\"...\">
                                    <div class=\"caption\">
                                        
                                        $row->namee
            
                                        </div>
                                    </div>
                                </div></a>
                                    ";
                        }

                        ?>
            </div>
        </div>
        <div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
        </div>


	</body>
	</html>