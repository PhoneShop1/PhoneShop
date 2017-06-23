
<html>
<head>
    <title>Edit</title>
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

<body>
            <?php
            $id=$_GET['id'];
            require_once('dbconf.php');
            $sql = "select * from network where id=$id";
            $result = $conn->query($sql);
            $count=$result->num_rows;
            if($count>0){
            while($row = $result->fetch_object()){

                echo "
                        <form action='edit.php' method='request' >
                                                                <input class=\"form-control\" type='hidden' value=$row->id name='id'>
                                                                <input type=\"hidden\"  name=\"size\" value=\"1000000\" />
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->namee name=\"namey\" placeholder='Name'>$row->namee</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->price name=\"price\" placeholder='Price'>$row->price</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->brand name=\"brand\" placeholder='brand'>$row->brand</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->memory name=\"memory\" placeholder='Memory'>$row->memory</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->sime name=\"sime\" placeholder='SIM'>$row->sime</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->warr name=\"warr\" placeholder='Warranty'>$row->warr</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->colords name=\"colords\" placeholder='Color'>$row->colords</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->statues name=\"statuss\" placeholder='Status'>$row->statues</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->remark name=\"remark\" placeholder='Remark'>$row->remark</textarea></div>
                                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Technology name=\"technology\" placeholder='Technology'>$row->Technology</textarea></div>
                                                                <div class=\"col-md-offset-10 col-md-2\"><button type=\"submit\" name=\"submit\">Enter</button></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->TwoGBrand name=\"tGBrand\" placeholder='2GBrand'>$row->TwoGBrand</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->ThreeGBrand name=\"thGBrand\" placeholder='3GBrand'>$row->ThreeGBrand</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->FourGBrand name=\"fGBrand\" placeholder='4GBrand'>$row->FourGBrand</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Speed name=\"Speed\" placeholder='Speed'>$row->Speed</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->GPRS name=\"GPRS\" placeholder='GPRS'>$row->GPRS</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->EDGE name=\"EDGE\" placeholder='EDGE'>$row->EDGE</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Announced name=\"Announced\" placeholder='Announced'>$row->Announced</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Status name=\"Status\" placeholder=''Status>$row->Status</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Dimensions name=\"Dimensions\" placeholder='Dimensions'>$row->Dimensions</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Weight name=\"Weight\" placeholder='Weight'>$row->Weight</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Build name=\"Hello\" placeholder='Build'>$row->Build</textarea></div>
                                                           
                                                            
                                                            <div class='col-md-8 col-md-offset-2'><textarea nclass=\"form-control textedit\" value=$row->SIM name=\"SIM\" placeholder='SIM'>$row->SIM</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Typee name=\"Typee\" placeholder='Type'>$row->Typee</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Sizee name=\"Sizee\" placeholder='Size'>$row->Sizee</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Resolution name=\"Resolution\" placeholder='Resolution'>$row->Resolution</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Multitouch name=\"Multitouch\" placeholder='Multitouch'>$row->Multitouch</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Protection name=\"Protection\" placeholder='Protection'>$row->Protection</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->OS name=\"OS\" placeholder='OS'>$row->OS</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Chipset name=\"Chipset\" placeholder='Chipset'>$row->Chipset</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->CPU name=\"CPU\" placeholder='CPU'>$row->CPU</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->GPU name=\"GPU\" placeholder='GPU'>$row->GPU</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Card name=\"Card\" placeholder='Card'>$row->Card</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Internal name=\"Internal\" placeholder='Internal'>$row->Internal</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Primaryy name=\"Primary\" placeholder='Primary'>$row->Primaryy</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Features name=\"Features\" placeholder='Features'>$row->Features</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Video name=\"Video\" placeholder='Video'>$row->Video</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Secondary name=\"Secondary\" placeholder='Secondary'>$row->Secondary</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Alert name=\"Alert\" placeholder='Alert'>$row->Alert</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Loundspeaker name=\"Loundspeaker\" placeholder='Loundspeaker'>$row->Loundspeaker</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->jack name=\"jack\" placeholder='Jack'>$row->jack</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->WLAN name=\"WLAN\" placeholder='WLAN'>$row->WLAN</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Bluetooth name=\"Bluetooth\" placeholder='Bluetooth'>$row->Bluetooth</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->GPS name=\"GPS\" placeholder='GPS'>$row->GPS</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->NFC name=\"NFC\" placeholder='NFC'>$row->NFC</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Radio name=\"Radio\" placeholder='Radio'>$row->Radio</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->USB name=\"USB\" placeholder='USB'>$row->USB</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Sensors name=\"Sensors\" placeholder='Sensors'>$row->Sensors</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Messaging name=\"Messaging\" placeholder='Messaging'>$row->Messaging</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Brower name=\"Brower\" placeholder='Brower'>$row->Brower</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Java name=\"Java\" placeholder='JAVA'>$row->Java</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Colors name=\"Colors\" placeholder='Color'>$row->Colors</textarea></div>
                                                            <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Battery name=\"Battery\" placeholder='Battery'>$row->Battery</textarea></div>
                                                       </form>                                                    
                                 ";
                        }
                    }
                 ?>


</body>
</html>
            <?php
            require_once('dbconf.php');
                if(isset($_REQUEST['submit'])){

                    $id = mysqli_real_escape_string($conn,$_REQUEST['id']);
                    $technology =mysqli_real_escape_string($conn,$_REQUEST['technology']);
            //        echo $technology;
                    $tGBrand=mysqli_real_escape_string($conn,$_REQUEST['tGBrand']);
                    $thGBrand=mysqli_real_escape_string($conn,$_REQUEST['thGBrand']);
                    $fGBrand=mysqli_real_escape_string($conn,$_REQUEST['fGBrand']);
                    $Speed=mysqli_real_escape_string($conn,$_REQUEST['Speed']);
                    $GPRS=mysqli_real_escape_string($conn,$_REQUEST['GPRS']);
                    $EDGE=mysqli_real_escape_string($conn,$_REQUEST['EDGE']);
                    $Announced=mysqli_real_escape_string($conn,$_REQUEST['Announced']);
                    $Status=mysqli_real_escape_string($conn,$_REQUEST['Status']);
                    $Dimensions=mysqli_real_escape_string($conn,$_REQUEST['Dimensions']);
                    $Weight=mysqli_real_escape_string($conn,$_REQUEST['Weight']);
            //        $Build=mysqli_real_escape_string($conn,$_REQUEST['Hello']);
                    $SIM=mysqli_real_escape_string($conn,$_REQUEST['SIM']);
                    $Typee=mysqli_real_escape_string($conn,$_REQUEST['Typee']);
                    $Sizee=mysqli_real_escape_string($conn,$_REQUEST['Sizee']);
                    $Resolution=mysqli_real_escape_string($conn,$_REQUEST['Resolution']);
                    $Multitouch=mysqli_real_escape_string($conn,$_REQUEST['Multitouch']);
                    $Protection=mysqli_real_escape_string($conn,$_REQUEST['Protection']);
                    $OS=mysqli_real_escape_string($conn,$_REQUEST['OS']);
                    $Chipset=mysqli_real_escape_string($conn,$_REQUEST['Chipset']);
                    $CPU=mysqli_real_escape_string($conn,$_REQUEST['CPU']);
                    $GPU=mysqli_real_escape_string($conn,$_REQUEST['GPU']);
                    $Card=mysqli_real_escape_string($conn,$_REQUEST['Card']);
                    $Internal=mysqli_real_escape_string($conn,$_REQUEST['Internal']);
                    $Primary=mysqli_real_escape_string($conn,$_REQUEST['Primary']);
                    $Features=mysqli_real_escape_string($conn,$_REQUEST['Features']);
                    $Video=mysqli_real_escape_string($conn,$_REQUEST['Video']);
                    $Secondary=mysqli_real_escape_string($conn,$_REQUEST['Secondary']);
                    $Alert=mysqli_real_escape_string($conn,$_REQUEST['Alert']);
                    $Loundspeaker=mysqli_real_escape_string($conn,$_REQUEST['Loundspeaker']);
                    $jack=mysqli_real_escape_string($conn,$_REQUEST['jack']);
                    $WLAN=mysqli_real_escape_string($conn,$_REQUEST['WLAN']);
                    $Bluetooth=mysqli_real_escape_string($conn,$_REQUEST['Bluetooth']);
                    $GPS=mysqli_real_escape_string($conn,$_REQUEST['GPS']);
                    $NFC=mysqli_real_escape_string($conn,$_REQUEST['NFC']);
                    $Radio=mysqli_real_escape_string($conn,$_REQUEST['Radio']);
                    $USB=mysqli_real_escape_string($conn,$_REQUEST['USB']);
                    $Sensors=mysqli_real_escape_string($conn,$_REQUEST['Sensors']);
                    $Messaging=mysqli_real_escape_string($conn,$_REQUEST['Messaging']);
                    $Brower=mysqli_real_escape_string($conn,$_REQUEST[ 'Brower']);
                    $Java=mysqli_real_escape_string($conn,$_REQUEST['Java']);
                    $Colors=mysqli_real_escape_string($conn,$_REQUEST['Colors']);
                    $Battery=mysqli_real_escape_string($conn,$_REQUEST['Battery']);
                    $namey=mysqli_real_escape_string($conn,$_REQUEST['namey']);
                    $price=mysqli_real_escape_string($conn,$_REQUEST['price']);
                    $brand=mysqli_real_escape_string($conn,$_REQUEST['brand']);
                    $memory=mysqli_real_escape_string($conn,$_REQUEST['memory']);
                    $sime=mysqli_real_escape_string($conn,$_REQUEST['sime']);
                    $warr=mysqli_real_escape_string($conn,$_REQUEST['warr']);
            //        $colord=mysqli_real_escape_string($conn,$_REQUEST['colord']);
                    $statuss=mysqli_real_escape_string($conn,$_REQUEST['statuss']);
                    $remark=mysqli_real_escape_string($conn,$_REQUEST['remark']);
//                    echo  $id;

                    if (empty($technology)) {
                        echo "<font color='red'>Note field is empty.</font><br/>";
                    }else{
                        $result = mysqli_query($conn,"UPDATE network SET Technology='$technology',TwoGBrand='$tGBrand',ThreeGBrand='$thGBrand',FourGBrand='$fGBrand'
            ,Speed='$Speed',GPRS='$GPRS',EDGE='$EDGE',
            Announced='$Announced',Status='$Status',Dimensions='$Dimensions',Weight='$Weight'
            ,SIM='$SIM',Typee='$Typee',Sizee='$Sizee',Resolution='$Resolution'
            ,Multitouch='$Multitouch',Protection='$Protection',OS='$OS',Chipset='$Chipset',CPU='$CPU',
            GPU='$GPU',Card='$Card',Internal='$Internal',Primaryy='$Primary',Features='$Features'
            ,Video='$Video',Secondary='$Secondary',Alert='$Alert',Loundspeaker='$Loundspeaker',
            jack='$jack',WLAN='$WLAN',Bluetooth='$Bluetooth',GPS='$GPS',NFC='$NFC',Radio='$Radio',
            USB='$USB',Sensors='$Sensors',Messaging='$Messaging',Brower='$Brower',Java='$Java',
            Colors='$Colors',Battery='$Battery',namee='$namey',price='$price',brand='$brand',memory='$memory',
            sime='$sime',warr='$warr',statues='$statuss',remark='$remark' WHERE id=$id");
            //////            echo $result;
                       header("Location:admin_indes.php");
            //            mysqli_query($conn,"update network set Technology='$technology',TwoGBrand='$tGBrand',ThreeGBrand='$thGBrand' where id=$id");

                    }
                }


            ?>


