<?php
$msg = "";
if (isset($_POST['upload'])) {
    $target = "img/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "", "phoneshop");
    $photo = $_FILES['image']['name'];

    $technology = $_POST['technology'];
    $tGBrand = $_POST['tGBrand'];
    $thGBrand = $_POST['thGBrand'];
    $fGBrand = $_POST['fGBrand'];
    $Speed = $_POST['Speed'];
    $GPRS = $_POST['GPRS'];
    $EDGE = $_POST['EDGE'];
    $Announced = $_POST['Announced'];
    $Status = $_POST['Status'];
    $Dimensions = $_POST['Dimensions'];
    $Weight = $_POST['Weight'];
    $Build = $_POST['Build'];
    $SIM = $_POST['SIM'];
    $Typee = $_POST['Typee'];
    $Sizee = $_POST['Sizee'];
    $Resolution = $_POST['Resolution'];
    $Multitouch = $_POST['Multitouch'];
    $Protection = $_POST['Protection'];
    $OS = $_POST['OS'];
    $Chipset = $_POST['Chipset'];
    $CPU = $_POST['CPU'];
    $GPU = $_POST['GPU'];
    $Card = $_POST['Card'];
    $Internal = $_POST['Internal'];
    $Primary = $_POST['Primary'];
    $Features = $_POST['Features'];
    $Video = $_POST['Video'];
    $Secondary = $_POST['Secondary'];
    $Alert = $_POST['Alert'];
    $Loundspeaker = $_POST['Loundspeaker'];
    $jack = $_POST['jack'];
    $WLAN = $_POST['WLAN'];
    $Bluetooth = $_POST['Bluetooth'];
    $GPS = $_POST['GPS'];
    $NFC = $_POST['NFC'];
    $Radio = $_POST['Radio'];
    $USB = $_POST['USB'];
    $Sensors = $_POST['Sensors'];
    $Messaging = $_POST['Messaging'];
    $Brower = $_POST['Brower'];
    $Java = $_POST['Java'];
    $Colors = $_POST['Colors'];
    $Battery = $_POST['Battery'];
    $namey = $_POST['namey'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $memory = $_POST['memory'];
    $sime = $_POST['sime'];
    $warr = $_POST['warr'];
    $colord = $_POST['colord'];
    $statuss = $_POST['statuss'];
    $remark = $_POST['remark'];


    $sql = "insert into network (Technology,TwoGBrand,ThreeGBrand,FourGBrand,
    Speed,GPRS,EDGE,Announced,Status,Dimensions,Weight,Build,SIM,Typee,Sizee,
    Resolution,Multitouch,Protection,OS,Chipset,CPU,GPU,Card,Internal,Primaryy,
    Features,Video,Secondary,Alert,Loundspeaker,jack,WLAN,Bluetooth,GPS,NFC,Radio,
    USB,Sensors,Messaging,Brower,Java,Colors,Battery,namee,price,brand,memory,sime,
    warr,colords,statues,remark,photo)
    values('$technology','$tGBrand','$thGBrand','$fGBrand','$Speed','$GPRS','$EDGE',
    '$Announced','$Status','$Dimensions','$Weight','$Build','$SIM','$Typee','$Sizee',
    '$Resolution','$Multitouch','$Protection','$OS','$Chipset','$CPU','$GPU','$Card',
    '$Internal','$Primary','$Features','$Video','$Secondary','$Alert','$Loundspeaker',
    '$jack','$WLAN','$Bluetooth','$GPS','$NFC','$Radio','$USB','$Sensors','$Messaging',
    '$Brower','$Java','$Colors','$Battery','$namey','$price','$brand','$memory','$sime',
    '$warr','$colord','$statuss','$remark','$photo')";
//echo $sql;
//    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image Uploaded Successfully";
    } else {
        $msg = "There Was A problem uploading image";
    }
    $result = $db->query($sql);
    if($result){
        echo "New word created";
    }else{
        echo "Fail to create new word";
    }
    header('Location: admin_index.php');
}
?>
