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


<div id="carousel-example-generic" class="carousel slide col-md-12" data-ride="carousel" style="background: none; margin-top: 50px;">
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
<div class="container col-md-11  col-sm-11 col-xs-11 " id="container">

    <div class="thumbnail panel panel-default  col-md-8 col-md-offset-2 col-xs-8 col-sm-8" >
        <nav class="navbar navbar-default" id="pageheader">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="img\<?php echo '%".$_POST["search"]."%' ?>.png" style="width: 100px; height: 50px;margin-top: -15px;">
                    </a>
                </div>
            </div>
        </nav>

        <?php
        /**
         * Created by PhpStorm.
         * User: KONG KEA
         * Date: 7/7/2017
         * Time: 6:13 PM
         */

        require_once ('dbconf.php');

        $output = '';
        $sql="SELECT * FROM network WHERE brand LIKE '%".$_POST["search"]."%'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result) > 0){
            // $output .= '<h4 align:center>Search result</h4>';
            // $output .= '<div class="table-responsive">
            //  <table class="table table-bordered">
            //  <tr>
            //  <td>name</td>
            //  <td>comment</td>
            //  </tr>
            //  </table>
            // </div>';
            while ($row=mysqli_fetch_object($result)) {
                echo "
                        <a href='detail.php?id=$row->id' >
                            <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                                <div class=\"thumbnail\">
                                    <img src=\"img/".$row->photo."\" alt=\"...\">
                                    <center><div class=\"caption\">
                                        $row->namee
                                    </div>
                                    <div style='color: red;'>$row->price</div>
                                    </center>
                                </div>
                            </div>
                        </a>
    
                    ";
            }
            exit();
        }
        else{
            echo 'data not found';
        }
        ?>


    </div>
</div>
</body>
</html>