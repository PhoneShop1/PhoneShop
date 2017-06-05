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

					<li class="dropdown">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:35px 50px;">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                                    </div>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                                <input type="text" class="form-control" id="psw" placeholder="Enter password">
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" checked>Remember me</label>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                        <p>Not a member? <a href="#">Sign Up</a></p>
                                        <p>Forgot <a href="#">Password?</a></p>
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
	<div class="container col-md-11  col-sm-11 col-xs-11 " id="container">
		<div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" id="menu">Phones</h3>
				</div>
				<div class="panel-body">
					Samsung
				</div>
				<div class="panel-body">
					Huawei
				</div>
				<div class="panel-body">
					Oppo
				</div>
				<div class="panel-body">
					Sugar
				</div>
				<div class="panel-body">
					Iphone
				</div>
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
							<a  href="huawei.php">
								<button class="btn btn-default navbar-btn " >more</button>
							</a>
						</div>
					</div>
				</nav>

				<div class="panel-default col-md-2 col-xs-2 col-sm-2" id="show">
					<div class="thumbnail">

						<img src="img\P10.jpg" alt="...">
						<p>Huawei P10</p>

						<div class="caption">
							
						</div>
					</div>
				</div>

				<div class="panel-default col-md-2 col-xs-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\p10plus.jpg" alt="...">
						<p>Huawei P10Pluse</p>
						<div class="caption">
							
							

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-xs-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\GR5.png" alt="...">
						<div class="caption">
							
							<p>Huawei GR5 2017</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-xs-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\GR5mini.jpg" alt="...">
						<div class="caption">
							
							<p>Huawei GR5mini</p>
						</div>
					</div>
				</div>
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
							<a  href="samsung.php">
								<button class="btn btn-default navbar-btn " >more</button>
							</a>
						</div>
					</div>
				</nav>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\s88.jpg" alt="...">
						<div class="caption">
							
							<p>Samsung Galaxy S8+</p>

						</div>
					</div>
				</div>

				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\s8.jpg" alt="...">
						<div class="caption">
							
							<p>Samsung Galaxy S8</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\A7.jpg" alt="...">
						<div class="caption">
							
							<p>Samsung A7 2017</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\J7prime.jpg" alt="...">
						<div class="caption">
							
							<p>Samsung Galaxy J7 Prime</p>
						</div>
					</div>
				</div>
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
							<a  href="iphone.php">
								<button class="btn btn-default navbar-btn " >more</button>
							</a>
						</div>
					</div>
				</nav>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\ip6s.jpg" alt="...">
						<div class="caption">
							
							<p>Iphone 6s 16g</p>

						</div>
					</div>
				</div>

				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\ip6sp.jpg" alt="...">
						<div class="caption">
							
							<p>Iphone 6s+ 16g</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\ip7.png" alt="...">
						<div class="caption">
							
							<p>Iphone7</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\ip7p.jpg" alt="...">
						<div class="caption">
							
							<p>Iphone 7+</p>
						</div>
					</div>
				</div>
				

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
							<a  href="oppo.php">
								<button class="btn btn-default navbar-btn " >more</button>
							</a>
						</div>
					</div>
				</nav>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\oppof1p.jpg" alt="...">
						<div class="caption">
							
							<p>oppo F1 Plus</p>

						</div>
					</div>
				</div>

				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\f1s.jpg" alt="...">
						<div class="caption">
							
							<p>oppo F1s</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\oppoA39.png" alt="...">
						<div class="caption">
							
							<p>oppo A39</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\neo7.jpg" alt="...">
						<div class="caption">
							
							<p>oppo Neo 7</p>
						</div>
					</div>
				</div>
				

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
							<a  href="sugar.php">
								<button class="btn btn-default navbar-btn " >more</button>
							</a>
						</div>
					</div>
				</nav>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\sugarf7mini.jpg" alt="...">
						<div class="caption">
							
							<p>Sugar F7mini</p>

						</div>
					</div>
				</div>

				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\sugarf7.jpg" alt="...">
						<div class="caption">
							
							<p>Sugar F7</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\sugarc6.jpg" alt="...">
						<div class="caption">
							
							<p>Sugar C6</p>

						</div>
					</div>
				</div>
				<div class="panel-default col-md-2 col-sm-2 col-sm-2" id="show">
					<div class="thumbnail">
						<img src="img\sugar2.jpg" alt="...">
						<div class="caption">
							
							<p>Sugar 2</p>
						</div>
					</div>
				</div>
            </div>
        </div>
        <div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" id="menu">Phones</h3>
                </div>
                <div class="panel-body">
                    Samsung
                </div>
                <div class="panel-body">
                    Huawei
                </div>
                <div class="panel-body">
                    Oppo
                </div>
                <div class="panel-body">
                    Sugar
                </div>
                <div class="panel-body">
                    Iphone
                </div>
            </div>
        </div>
        </div>


	</body>
	</html>