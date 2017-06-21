<!DOCTYPE html>
<html xmlns:color="http://www.w3.org/1999/xhtml">
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

<?php $model = $_GET['model']; ?>

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
				<!-- <ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
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
				</ul> -->
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container col-md-12 col-xs-12 col-sm-12" id="r">
		<div class=" col-md-6 col-xs-6" >
			<img src="img/hl.png">

		</div>
		<div class=" col-md-6 col-xs-6 col-sm-6" style="text-align: right;>
			<h3 style="color: black;">Heng Lay Phone Shop</h3>
			<h3 style="color: black;">More information:
			</h3>
			<h3><a href="khmertypingonline@gmail.com">khmertypingonline@gmail.com</a></h3>
			<h3 style="color: black;">Tel: 077 465 615</h3>

		</div>
	</div>
	<div class="container col-md-11  col-sm-11 col-xs-11 " id="container">

			<div class="thumbnail panel panel-default  col-md-8 col-md-offset-2 col-xs-8 col-sm-8" >
				<nav class="navbar navbar-default" id="pageheader">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">
								<img alt="Brand" src="img\<?php echo $model ?>.png" style="width: 100px; height: 50px;margin-top: -15px;">
							</a>
						</div>
					</div>
				</nav>

                <?php
                require_once('dbconf.php');

                $sql="select * from network where brand = '$model'";
//                echo $sql;
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
    </div>
</body>
</html>