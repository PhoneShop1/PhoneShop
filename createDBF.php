<?php
require_once('dbconf.php');
$technology = $_REQUEST['technology'];
$tGBrand=$_REQUEST['tGBrand'];
$thGBrand=$_REQUEST['thGBrand'];
$fGBrand=$_REQUEST['fGBrand'];
$Speed=$_REQUEST['Speed'];
$GPRS=$_REQUEST['GPRS'];
$EDGE=$_REQUEST['EDGE'];
$Announced=$_REQUEST['Announced'];
$Status=$_REQUEST['Status'];
$Dimensions=$_REQUEST['Dimensions'];
$Weight=$_REQUEST['Weight '];
$Build=$_REQUEST['Build'];
$SIM=$_REQUEST['SIM'];
$Typee=$_REQUEST['Typee'];
$Sizee=$_REQUEST['Sizee'];
$Resolution=$_REQUEST['Resolution'];
$Multitouch=$_REQUEST['Multitouch'];
$Protection=$_REQUEST['Protection'];
$OS=$_REQUEST['OS'];
$Chipset=$_REQUEST['Chipset'];
$CPU=$_REQUEST['CPU'];
$GPU=$_REQUEST['GPU'];
$Card=$_REQUEST['Card'];
$Internal=$_REQUEST['Internal'];
$Primary=$_REQUEST['Primary'];
$Features=$_REQUEST['Features'];
$Video=$_REQUEST['Video'];
$Secondary=$_REQUEST['Secondary'];
$Alert=$_REQUEST['Alert'];
$Loundspeaker=$_REQUEST['Loundspeaker'];
$jack=$_REQUEST['jack'];
$WLAN=$_REQUEST['WLAN'];
$Bluetooth=$_REQUEST['Bluetooth'];
$GPS=$_REQUEST['GPS'];
$NFC=$_REQUEST['NFC'];
$Radio=$_REQUEST['Radio'];
$USB=$_REQUEST['USB'];
$Sensors=$_REQUEST['Sensors'];
$Messaging=$_REQUEST['Messaging'];
$Brower=$_REQUEST[ 'Brower'];
$Java=$_REQUEST['Java'];
$Colors=$_REQUEST['Colors'];
$Battery=$_REQUEST['Battery'];


//    $ki = $_POST['hengly'];
//    $sql = "insert into test (hi) values ('$ki')";

$sql = "insert into network (Technology,TwoGBrand,ThreeGBrand,FourGBrand,
Speed,GPRS,EDGE,Announced,Status,Dimensions,Weight,Build,SIM,Typee,Sizee,
Resolution,Multitouch,Protection,OS,Chipset,CPU,GPU,Card,Internal,Primaryy,
Features,Video,Secondary,Alert,Loundspeaker,jack,WLAN,Bluetooth,GPS,NFC,Radio,
USB,Sensors,Messaging,Brower,Java,Colors,Battery)
values('$technology','$tGBrand','$thGBrand','$fGBrand','$Speed','$GPRS','$EDGE',
'$Announced','$Status','$Dimensions','$Weight','$Build','$SIM','$Typee','$Sizee',
'$Resolution','$Multitouch','$Protection','$OS','$Chipset','$CPU','$GPU','$Card',
'$Internal','$Primaryy','$Features','$Video','$Secondary','$Alert','$Loundspeaker',
'$jack','$WLAN','$Bluetooth','$GPS','$NFC','$Radio','$USB','$Sensors','$Messaging',
'$Brower','$Java','$Colors','$Battery')";

    $result = $conn->query($sql);
    if ($result) {
        echo "New word created";
    } else {
        echo "Fail to create new word";
    }
    header('Location: detail.php');

?>