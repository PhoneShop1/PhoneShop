<?php
////require_once('dbconf.php');
////
////$id= $_REQUEST['id'];
////$Technology=$_REQUEST['Technology'];
////echo "$id Technology=$Technology";
////echo "$id 2GBrand=$2GBrand";
////echo "$id Speed=$Speed";
//////
//////$technology','$t','$thGBrand','$fGBrand','$Speed','$GPRS','$EDGE',
//////'$Announced','$Status','$Dimensions','$Weight','$Build','$SIM','$Typee','$Sizee',
//////'$Resolution','$Multitouch','$Protection','$OS','$Chipset','$CPU','$GPU','$Card',
//////'$Internal','$Primaryy','$Features','$Video','$Secondary','$Alert','$Loundspeaker',
//////'$jack','$WLAN','$Bluetooth','$GPS','$NFC','$Radio','$USB','$Sensors','$Messaging',
//////'$Brower','$Java','$Colors','$Battery'
////
////$sql="UPDATE network SET Technology='$Technology' WHERE id='$id'";
////$conn->query($sql);
////header("Location:detail.php");
////
//
//require_once('dbconf.php');
//
//$id=$_REQUEST[ 'id'];
//$technology = $_REQUEST['technology'];
//$tGBrand=$_REQUEST['tGBrand'];
//$thGBrand=$_REQUEST['thGBrand'];
//$fGBrand=$_REQUEST['fGBrand'];
//$Speed=$_REQUEST['Speed'];
//$GPRS=$_REQUEST['GPRS'];
//$EDGE=$_REQUEST['EDGE'];
//$Announced=$_REQUEST['Announced'];
//$Status=$_REQUEST['Status'];
//$Dimensions=$_REQUEST['Dimensions'];
//$Weight=$_REQUEST['Weight'];
//$Build=$_REQUEST['Build'];
//$SIM=$_REQUEST['SIM'];
//$Typee=$_REQUEST['Typee'];
//$Sizee=$_REQUEST['Sizee'];
//$Resolution=$_REQUEST['Resolution'];
//$Multitouch=$_REQUEST['Multitouch'];
//$Protection=$_REQUEST['Protection'];
//$OS=$_REQUEST['OS'];
//$Chipset=$_REQUEST['Chipset'];
//$CPU=$_REQUEST['CPU'];
//$GPU=$_REQUEST['GPU'];
//$Card=$_REQUEST['Card'];
//$Internal=$_REQUEST['Internal'];
//$Primary=$_REQUEST['Primary'];
//$Features=$_REQUEST['Features'];
//$Video=$_REQUEST['Video'];
//$Secondary=$_REQUEST['Secondary'];
//$Alert=$_REQUEST['Alert'];
//$Loundspeaker=$_REQUEST['Loundspeaker'];
//$jack=$_REQUEST['jack'];
//$WLAN=$_REQUEST['WLAN'];
//$Bluetooth=$_REQUEST['Bluetooth'];
//$GPS=$_REQUEST['GPS'];
//$NFC=$_REQUEST['NFC'];
//$Radio=$_REQUEST['Radio'];
//$USB=$_REQUEST['USB'];
//$Sensors=$_REQUEST['Sensors'];
//$Messaging=$_REQUEST['Messaging'];
//$Brower=$_REQUEST[ 'Brower'];
//$Java=$_REQUEST['Java'];
//$Colors=$_REQUEST['Colors'];
//$Battery=$_REQUEST['Battery'];
//$namey=$_REQUEST['namey'];
//$price=$_REQUEST['price'];
//$brand=$_REQUEST['brand'];
//$memory=$_REQUEST['memory'];
//$sime=$_REQUEST['sime'];
//$warr=$_REQUEST['warr'];
//$colord=$_REQUEST['colord'];
//$statuss=$_REQUEST['statuss'];
//$remark=$_REQUEST['remark'];
////$photo=$_REQUEST[ 'photo'];
////if(isset($photo)){
////    if (isset($_FILES['photo'])){
//////        $target="image/".basename($_FILES['photo']['name']);
//////        $photo=$_FILES[ 'photo']['name'];
////        $uploadDir = "upload/";
////        $fileTmpName= $_FILES['photo']['tmp_name'];
////        $fileExtension=pathinfo($_FILES['photo']['tmp_name'])['extension'];
////        $fileName=time().".$fileExtension";
////        $target=$uploadDir.$fileName;
////        $fileSize=filesize($fileTmpName);
////        if($fileSize<=5242880){
////            if(in_array($fileExtension,['jpg'],['png'])){
////                if(move_uploaded_file($fileTmpName,$target)) {
////                    $photo = $target;
////                }else{
////                    echo "File is Fail to upload";
////                }
////            }else{
////                echo "Only jpg/png are allow";
////            }
////        }else{
////            echo "File is bigger than 5M - file size is ".number_format($fileSize/1024/024,2). "MB";
////        }
////    }
////}
//$sql = "UPDATE network SET technology='$technology',tGBrand='$tGBrand',thGBrand='$thGBrand',fGBrand='$fGBrand'
//,Speed='$Speed',GPRS='$GPRS',EDGE='$EDGE',
//Announced='$Announced',Status='$Status',Dimensions='$Dimensions',Weight='$Weight'
//,Build='$Build',SIM='$SIM',Typee='$Typee',Sizee='$Sizee',Resolution='$Resolution'
//,Multitouch='$Multitouch',Protection='$Protection',OS='$OS','Chipset=$Chipset',CPU='$CPU',
//GPU='$GPU',Card='$Card',Internal='$Internal',Primary='$Primary',Features='$Features'
//,Video='$Video',Secondary='$Secondary',Alert='$Alert',Loundspeaker='$Loundspeaker',
//jack='$jack',WLAN='$WLAN',Bluetooth='$Bluetooth',GPS='$GPS',NFC='$NFC',Radio='$Radio',
//USB='$USB',Sensors='$Sensors',Messaging='$Messaging',Brower='$Brower',Java='$Java',
//Colors='$Colors',Battery='$Battery',namey='$namey',price='$price',brand='$brand',memory='$memory',
//sime='$sime',warr='$warr',colord='$colord',statuss='$statuss',remark='$remark' where id='$id' ";
//
////        if (move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
////            $msg="Image";
////        }else{
////            $msg="File";
////        }
//echo $sql;
//$conn->query($sql);
////    header('Location: detail.php');
//?>
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
require_once('dbconf.php');
$sql = "select * from network order by id";
$sql = "select * from network order by id";
$result = $conn->query($sql);
$count=$result->num_rows;
if($count>0){

while($row = $result->fetch_object()){
    echo "

                                                    <input class=\"form-control\" type='hidden' value=$row->id name='id'>

                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->namee name=\"namee\">$row->namee</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->price name=\"price\">$row->price</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->brand name=\"brand\">$row->brand</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->memory name=\"memory\">$row->memory</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->sime name=\"sime\">$row->sime</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->warr name=\"warr\">$row->warr</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->colords name=\"colords\">$row->colords</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->statues name=\"statues\">$row->statues</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->remark name=\"remark\">$row->remark</textarea></div>
                                                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Technology name=\"Technology\">$row->Technology</textarea></div>
                                                    <div class=\"col-md-offset-10 col-md-2\"><button type=\"submit\" name=\"submit\">Enter</button></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->TwoGBrand name=\"TwoGBrand\">$row->TwoGBrand</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->ThreeGBrand name=\"ThreeGBrand\">$row->ThreeGBrand</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->FourGBrand name=\"FourGBrand\">$row->FourGBrand</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Speed name=\"Speed\">$row->Speed</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->GPRS name=\"GPRS\">$row->GPRS</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->EDGE name=\"EDGE\">$row->EDGE</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Announced name=\"Announced\">$row->Announced</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Status name=\"Status\">$row->Status</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Dimensions name=\"Dimensions\">$row->Dimensions</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Weight name=\"Weight\">$row->Weight</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Build name=\"Build\">$row->Build</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea nclass=\"form-control textedit\" value=$row->SIM name=\"SIM\">$row->SIM</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Typee name=\"Typee\">$row->Typee</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Sizee name=\"Sizee\">$row->Sizee</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Resolution name=\"Resolution\">$row->Resolution</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Multitouch name=\"Multitouch\">$row->Multitouch</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Protection name=\"Protection\">$row->Protection</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->OS name=\"OS\">$row->OS</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Chipset name=\"Chipset\">$row->Chipset</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->CPU name=\"CPU\">$row->CPU</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->GPU name=\"GPU\">$row->GPU</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Card name=\"Card\">$row->Card</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Internal name=\"Internal\">$row->Internal</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Primaryy name=\"Primaryy\">$row->Primaryy</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Features name=\"Features\">$row->Features</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Video name=\"Video\">$row->Video</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Secondary name=\"Secondary\">$row->Secondary</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Alert name=\"Alert\">$row->Alert</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Loundspeaker name=\"Loundspeaker\">$row->Loundspeaker</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->jack name=\"jack\">$row->jack</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->WLAN name=\"WLAN\">$row->WLAN</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Bluetooth name=\"Bluetooth\">$row->Bluetooth</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->GPS name=\"GPS\">$row->GPS</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->NFC name=\"NFC\">$row->NFC</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->Radio name=\"Radio\">$row->Radio</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'><textarea class=\"form-control textedit\" value=$row->USB name=\"USB\">$row->USB</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Sensors name=\"Sensors\">$row->Sensors</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Messaging name=\"Messaging\">$row->Messaging</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Messaging name=\"Messaging\">$row->Messaging</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Brower name=\"Brower\">$row->Brower</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Java name=\"Java\">$row->Java</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Colors name=\"Colors\">$row->Colors</textarea></div>
                                                <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Battery name=\"Battery\">$row->Battery</textarea></div>
                     ";
            }
        }

     ?>
</body>
</html>


