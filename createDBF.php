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

//    $ki = $_POST['hengly'];
//    $sql = "insert into test (hi) values ('$ki')";

$sql = "insert into network (Technology,2GBrand,3GBrand,4GBrand,Speed,GPRS,EDGE,Announced,Status,Dimensions,Weight,Build,SIM,Typee,Sizee,Resolution,Multitouch,Protection)
values('$technology','$tGBrand','$thGBrand','$fGBrand','$Speed','$GPRS','$EDGE','$Announced','$Status','$Dimensions','$Weight','$Build','$SIM','$Typee','$Sizee','$Resolution','$Multitouch','$Protection')";

    $result = $conn->query($sql);
    if ($result) {
        echo "New word created";
    } else {
        echo "Fail to create new word";
    }
    header('Location: detail.php');

?>