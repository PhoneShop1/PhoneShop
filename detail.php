<!DOCTYPE html>
<html>
<head>
    <title>Heng Lay Phone Shop</title>
    <link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/css/bootstrap.min.css">
    <meta content="width=device-width,initial-scale=1" name="viewpoet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="phoneshoP.css">
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
    <div class="col-md-12  ">
        <div class="thumbnail panel panel-default  col-md-8 col-md-offset-2 col-xs-8 col-sm-8" >
            <div class="col-md-12" >
                <form action="postImage.php" >
                    <button type="network">Add</button>
                </form>
            </div>
                           <?php
//                        require_once ('dbconf.php');
//                        $sql="select * from network where id=(select max(network.id) from network)";
//                        $result = $conn->query($sql);
//                        $count=$result->num_rows;
                           $db = mysqli_connect("localhost","root","","phoneshop");
                           $sql = "select * from network where id=(select max(network.id) from network)";
                           $result = mysqli_query($db,$sql);
                           while ($row = mysqli_fetch_object($result)) {
                               echo "
            
                <div id=\"$row->id\" class=\"flex-item-2\">
                    <div class='col-md-12  col-sm-12'>
                        <div  class='col-md-1 col-md-offset-5' method=\"request\">
                            <a href=\"delete.php?id=$row->id\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete
                                </button>
                            </a>
                        </div>
                        <div  action=\"detail.php\"   method=\"request\">
                            <button  type='button'  data-toggle='modal' data-target='#up-$row->id'>
                                Edit
                            </button>
						</div>
                    </div>
                </div>
                <!-- Modal -->
                <div class=\"modal fade\" id=\"up-$row->id \" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" style=\"align-self: right;display:\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Edit</h4>
                            </div>
                            <form action=\"edit.php\" method=\"request\">
                                <div class=\"modal-body\" >
                                    <input class=\"form-control\" type='hidden' value=$row->id name='id'>
                                    
                                    <textarea class=\"form-control textedit\" value=$row->namee name=\"namee\">$row->namee</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->price name=\"price\">$row->price</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->brand name=\"brand\">$row->brand</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->memory name=\"memory\">$row->memory</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->sime name=\"sime\">$row->sime</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->warr name=\"warr\">$row->warr</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->colords name=\"colords\">$row->colords</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->statues name=\"statues\">$row->statues</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->remark name=\"remark\">$row->remark</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Technology name=\"Technology\">$row->Technology</textarea>
                                    <div class=\"col-md-offset-10 col-md-2\"><button type=\"submit\" name=\"submit\">Enter</button></div>
                                    <textarea class=\"form-control textedit\" value=$row->TwoGBrand name=\"TwoGBrand\">$row->TwoGBrand</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->ThreeGBrand name=\"ThreeGBrand\">$row->ThreeGBrand</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->FourGBrand name=\"FourGBrand\">$row->FourGBrand</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Speed name=\"Speed\">$row->Speed</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->GPRS name=\"GPRS\">$row->GPRS</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->EDGE name=\"EDGE\">$row->EDGE</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Announced name=\"Announced\">$row->Announced</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Status name=\"Status\">$row->Status</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Dimensions name=\"Dimensions\">$row->Dimensions</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Weight name=\"Weight\">$row->Weight</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Build name=\"Build\">$row->Build</textarea>
                                    <textarea nclass=\"form-control textedit\" value=$row->SIM name=\"SIM\">$row->SIM</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Typee name=\"Typee\">$row->Typee</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Sizee name=\"Sizee\">$row->Sizee</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Resolution name=\"Resolution\">$row->Resolution</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Multitouch name=\"Multitouch\">$row->Multitouch</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Protection name=\"Protection\">$row->Protection</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->OS name=\"OS\">$row->OS</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Chipset name=\"Chipset\">$row->Chipset</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->CPU name=\"CPU\">$row->CPU</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->GPU name=\"GPU\">$row->GPU</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Card name=\"Card\">$row->Card</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Internal name=\"Internal\">$row->Internal</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Primaryy name=\"Primaryy\">$row->Primaryy</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Features name=\"Features\">$row->Features</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Video name=\"Video\">$row->Video</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Secondary name=\"Secondary\">$row->Secondary</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Alert name=\"Alert\">$row->Alert</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Loundspeaker name=\"Loundspeaker\">$row->Loundspeaker</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->jack name=\"jack\">$row->jack</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->WLAN name=\"WLAN\">$row->WLAN</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Bluetooth name=\"Bluetooth\">$row->Bluetooth</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->GPS name=\"GPS\">$row->GPS</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->NFC name=\"NFC\">$row->NFC</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Radio name=\"Radio\">$row->Radio</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->USB name=\"USB\">$row->USB</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Sensors name=\"Sensors\">$row->Sensors</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Messaging name=\"Messaging\">$row->Messaging</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Brower name=\"Brower\">$row->Brower</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Java name=\"Java\">$row->Java</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Colors name=\"Colors\">$row->Colors</textarea>
                                    <textarea class=\"form-control textedit\" value=$row->Battery name=\"Battery\">$row->Battery</textarea>
                                </div>
                                <div class=\"modal-footer \" >
                                    <button type=\"sumbit\" class=\"btn btn-primary \" name=\"save\">Save</button>
                                </div>
                             </form>
                        </div>
                    </div>
                </div>
            
                                            <div class='col-md-12'>
                                                
                                                <div class='col-md-12'>
                                                    
                                                        <div class='col-md-6'>
                                                            
                                                            <img style='width: 80%;margin-top: 5%;margin-left: 10%;background-color: #c8ffff' class='panel panel-default' src='images/".$row->photo."'>
                                                        </div>
                                                        <div class='col-md-6'>
                                                            <div class='col-md-12'>
                                                                <div class='col-md-12'>
                                                                    <div class='col-md-12'><h2>$row->namee</h2></td>
                                                                    <div class='col-md-12'><h2>Price: <b style='color: red'>$row->price</b></h2></div>
                                                                    
                                                                </div>
                                                                <div class='col-md-12'>
                                                                    <table class=' table table-bordered'>
                                                                        <tr><td style='width: 60%'>Brand</td><td>$row->brand</td></tr>
                                                                        <tr><td>Internal Memory</td><td>$row->memory</td></tr>
                                                                        <tr><td>SIM</td><td>$row->sime</td></tr>
                                                                        <tr><td>Warranty</td><td>$row->warr</td></tr>
                                                                        <tr><td>Color</td><td>$row->colords</td></tr>
                                                                        <tr><td>Status</td><td>$row->statues</td></tr>
                                                                        <tr><td>Remark</td><td>$row->remark</td></tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class='detailinf'>
                                                   <table class='table table-bordered col-md-12'>
                                                <tr>
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
                                                
                                                </table>
                                                </div>
                                                
                                            </div>
                                            
                      
      
                                         ";
                           }
                           ?>

            </div>
        </div>


</div>




</body>
</html>