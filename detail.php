<!DOCTYPE html>
<html>
<head>
    <title>Heng Lay Phone Shop</title>
    <link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/css/bootstrap.min.css">
    <meta content="width=device-width,initial-scale=1" name="viewpoet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Phoneshop.css">
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
<div class="container col-md-11  col-sm-11 col-xs-11 " id="container" >
    <div class="col-md-12">
        <div class="panel col-md-2 col-xs-2" style="background-color: #f0f0f5;">

        </div>

        <div class="thumbnail panel panel-default  col-md-8 col-xs-8 col-sm-8" >
            <div class="col-md-12" >
                <form action="Network.php" >
                    <button type="network">Add</button>


                </form>
                <form action="#up-$row->id" method="request" ><button  type="button" data-toggle="modal" data-target="#up-$row->id" >Edit</button></form>
                <!-- Modal -->
                <div class="modal fade" id="up-$row->id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="align-self: right;display:">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit</h4>
                            </div>
                            <form action="edit.php" method="request">
                                <div class="modal-body" >

                                    <input class="form-control" type='hidden' value=$row->id name='id'>
                                    <textarea class="form-control textedit" value=$row->Technology name="Technology"  >$row->Technology</textarea>
                                </div>
                                <div class="modal-footer " >
                                    <button type="sumbit" class="btn btn-primary " name="save">Save</button>
                                </div>
                             </form>
                        </div>
                     </div>
                </div>
                <table class="col-md-12">

                           <?php
                        require_once ('dbconf.php');
                        $sql="select *from network order by id";
                        $result = $conn->query($sql);
                        $count=$result->num_rows;
                        if($count>0){
                            while ($row=$result->fetch_object()){

                                echo "    
                                            <div class='col-md-12'>
                                               
                                                <div class='col-md-12'>
                
                                                <tr >
                                                    <td rowspan='7' style='width: 20%'><div>Network</div></td>
                                                    <td style='width: 20%'><div>Technology</div></td>
                                                    <td >
                                                        <div >$row->Technology</div>
                                                    </td>
                                                </tr>
                                                <tr><td>2GBrand</td><td><div>$row->TwoGBrand</div></td></tr>
                                                <tr><td>3GBrand</td><td><div>$row->ThreeGBrand</div></td></tr>
                                                <tr><td>4GBrand</td><td><div>$row->FourGBrand</div></td></tr>
                                                <tr><td>Speed</td><td><div>$row->Speed</div></td></tr>
                                                <tr><td>GPRS</td><td><div>$row->GPRS</div></td></tr>
                                                <tr><td>EDGE</td><td><div>$row->EDGE</div></td></tr>
                                                
                                                <tr><td rowspan='2'>Launch</td><td>Announced</td><td><div>$row->Announced</div></td></tr>
                                                <tr><td>Status</td><td><div>$row->Status</div></td></tr>
                                               
                                                <tr><td rowspan='4'>Body</td><td>Dimensions</td><td><div>$row->Dimensions</div></td></tr>
                                                <tr><td>Weight</td><td><div>$row->Weight</div></td></tr>
                                                <tr><td>Build</td><td><div>$row->Build</div></td></tr>
                                                <tr><td>SIM</td><td><div>$row->SIM</div></td></tr>
                                                
                                                <tr><td rowspan='5'>Display</td><td>Type</td><td><div>$row->Typee</div></td></tr>
                                                <tr><td>Size</td><td><div>$row->Sizee</div></td></tr>
                                                <tr><td>Resolution</td><td><div>$row->Resolution</div></td></tr>
                                                <tr><td>Multitouch</td><td><div>$row->Multitouch</div></td></tr>
                                                <tr><td>Protection</td><td><div>$row->Protection</div></td></tr>
                                               
                                                <tr><td rowspan='4'>Platform</td><td>OS</td><td><div>$row->OS</div></td></tr>
                                                <tr><td>Chipset</td><td><div>$row->Chipset</div></td></tr>
                                                <tr><td>CPU</td><td><div>$row->CPU</div></td></tr>
                                                <tr><td>GPU</td><td><div>$row->GPU</div></td></tr>
                                               
                                                <tr><td rowspan='2'>Memory</td><td>Card slot</td><td><div>$row->Card</div></td></tr>
                                                <tr><td>Internal</td><td><div>$row->Internal</div></td></tr>
                                               
                                                <tr><td rowspan='4'>Camera</td><td>Primary</td><td><div>$row->Primaryy</div></td></tr>
                                                <tr><td>Features</td><td><div>$row->Features</div></td></tr>
                                                <tr><td>Video</td><td><div>$row->Video</div></td></tr>
                                                <tr><td>Secondary</td><td><div>$row->Secondary</div></td></tr>
                                               
                                                <tr><td rowspan='3'>Sound</td><td>Alert types</td><td><div>$row->Alert</div></td></tr>
                                                <tr><td>Loundspeaker</td><td><div>$row->Loundspeaker</div></td></tr>
                                                <tr><td>3.5mm jack</td><td><div>$row->jack</div></td></tr>
                                                
                                                <tr><td rowspan='6'>Comms</td><td>WLAN</td><td><div>$row->WLAN</div></td></tr>
                                                <tr><td>Bluetooth</td><td><div>$row->Bluetooth</div></td></tr>
                                                <tr><td>GPS</td><td><div>$row->GPS</div></td></tr>
                                                <tr><td>NFC</td><td><div>$row->NFC</div></td></tr>
                                                <tr><td>Radio</td><td><div>$row->Radio</div></td></tr>
                                                <tr><td>USB</td><td><div>$row->USB</div></td></tr>
                                                
                                                
                                                <tr><td rowspan='4'>Features</td><td>Sensors</td><td><div>$row->Sensors</div></td></tr>
                                                <tr><td>Messaging</td><td><div>$row->Messaging</div></td></tr>
                                                <tr><td>Browser</td><td><div>$row->Brower</div></td></tr>
                                                <tr><td>Java</td><td><div>$row->Java</div></td></tr>
                                                <tr><td>Battery</td><td></td><td><div>$row->Battery</div></td></tr>
                                                <tr><td>Music</td><td>Colors</td><td><div>$row->Colors</div></td></tr>
                                                
                                                
                                                </div>
                                                
                                            </div>
                      
      
                                         ";

                            }
                        }
                    ?>
                </table>
            </div>
        </div>


    </div>
</div>




</body>
</html>