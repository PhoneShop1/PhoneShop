<?php
//require_once('dbconf.php');
//if (isset($_POST['simee'])&&['namey']!='') {
//    $technology = $_POST['technology'];
//    $tGBrand = $_POST['tGBrand'];
//    $thGBrand = $_POST['thGBrand'];
//    $fGBrand = $_POST['fGBrand'];
//    $Speed = $_POST['Speed'];
//    $GPRS = $_POST['GPRS'];
//    $EDGE = $_POST['EDGE'];
//    $Announced = $_POST['Announced'];
//    $Status = $_POST['Status'];
//    $Dimensions = $_POST['Dimensions'];
//    $Weight = $_POST['Weight'];
//    $Build = $_POST['Build'];
//    $SIM = $_POST['SIM'];
//    $Typee = $_POST['Typee'];
//    $Sizee = $_POST['Sizee'];
//    $Resolution = $_POST['Resolution'];
//    $Multitouch = $_POST['Multitouch'];
//    $Protection = $_POST['Protection'];
//    $OS = $_POST['OS'];
//    $Chipset = $_POST['Chipset'];
//    $CPU = $_POST['CPU'];
//    $GPU = $_POST['GPU'];
//    $Card = $_POST['Card'];
//    $Internal = $_POST['Internal'];
//    $Primary = $_POST['Primary'];
//    $Features = $_POST['Features'];
//    $Video = $_POST['Video'];
//    $Secondary = $_POST['Secondary'];
//    $Alert = $_POST['Alert'];
//    $Loundspeaker = $_POST['Loundspeaker'];
//    $jack = $_POST['jack'];
//    $WLAN = $_POST['WLAN'];
//    $Bluetooth = $_POST['Bluetooth'];
//    $GPS = $_POST['GPS'];
//    $NFC = $_POST['NFC'];
//    $Radio = $_POST['Radio'];
//    $USB = $_POST['USB'];
//    $Sensors = $_POST['Sensors'];
//    $Messaging = $_POST['Messaging'];
//    $Brower = $_POST['Brower'];
//    $Java = $_POST['Java'];
//    $Colors = $_POST['Colors'];
//    $Battery = $_POST['Battery'];
//    $namey = $_POST['namey'];
//    $price = $_POST['price'];
//    $brand = $_POST['brand'];
//    $memory = $_POST['memory'];
//    $sime = $_POST['sime'];
//    $warr = $_POST['warr'];
//    $colord = $_POST['colord'];
//    $statuss = $_POST['statuss'];
//    $remark = $_POST['remark'];
//    $photoImg = '';
//    echo "sime";
////    if (filesize($_FILES['photoImg']['tmp_name'])>0) {
//    if (isset($_FILES['photoImg'])) {
//
////        $target="image/".basename($_FILES['photo']['name']);
////        $photo=$_FILES[ 'photo']['name'];
//        $uploadDir = "image/";
//        $fileTmpName = $_FILES['photoImg']['tmp_name'];
//        $fileExtension = pathinfo($_FILES['photoImg']['name'])['extension'];
//        $fileName = time() . $fileExtension;
//        $target = $uploadDir . $fileName;
//        $fileSize = filesize($fileTmpName);
//        if ($fileSize <= 5242880) {
//            if (in_array($fileExtension, 'jpg', 'png', 'JPG', 'PNG')) {
//                if (move_uploaded_file($fileTmpName, $target)) {
//                    $photoImg = $target;
//                } else {
//                    echo "File is Fail to upload";
//                }
//            } else {
//                echo "Only jpg/png are allow";
//            }
//        } else {
//            echo "File is bigger than 5M - file size is " . number_format($fileSize / 1024 / 024, 2) . "MB";
//        }
//    }
//
//    $sql = "insert into network (Technology,TwoGBrand,ThreeGBrand,FourGBrand,
//    Speed,GPRS,EDGE,Announced,Status,Dimensions,Weight,Build,SIM,Typee,Sizee,
//    Resolution,Multitouch,Protection,OS,Chipset,CPU,GPU,Card,Internal,Primaryy,
//    Features,Video,Secondary,Alert,Loundspeaker,jack,WLAN,Bluetooth,GPS,NFC,Radio,
//    USB,Sensors,Messaging,Brower,Java,Colors,Battery,namee,price,brand,memory,sime,
//    warr,colords,statues,remark,photo)
//    values('$technology','$tGBrand','$thGBrand','$fGBrand','$Speed','$GPRS','$EDGE',
//    '$Announced','$Status','$Dimensions','$Weight','$Build','$SIM','$Typee','$Sizee',
//    '$Resolution','$Multitouch','$Protection','$OS','$Chipset','$CPU','$GPU','$Card',
//    '$Internal','$Primary','$Features','$Video','$Secondary','$Alert','$Loundspeaker',
//    '$jack','$WLAN','$Bluetooth','$GPS','$NFC','$Radio','$USB','$Sensors','$Messaging',
//    '$Brower','$Java','$Colors','$Battery','$namey','$price','$brand','$memory','$sime',
//    '$warr','$colord','$statuss','$remark','$photoImg')";
//
//    $result = $conn->query($sql);
//    if ($result) {
//        echo "New word created";
//    } else {
//        echo "Fail to create new word";
//    }
//    header('Location: detail.php');
//}else{
//    echo "fail";
//}
//
////if (isset($_POST['submit'])){
////    $target="image/".basename($_FILES['photo']['name']);
////    $photo=$_FILES['image']['name'];
////    if(isset($_FILES['photo']['tmp_name'])){
////    if(filesize($_FILES['photo']['tmp_name'])>0){
////    $uploadDir="image/";
////    $fileTmpName=$_FILES['photo']['tmp_name'];
////    $fileExtension=pathinfo($_FILES['photo']['name'])['extension'];
////    $fileName=time().".$fileExtension";
////    $target=$uploadDir.$fileName;
////    $fileSize=filesize($fileTmpName);
////    echo $fileExtension." ot jenh";
////    if($fileSize<=5242880){
////        if(in_array($fileExtension,['jpg', 'JPG','png','PNG'])){
////            if (move_uploaded_file($fileTmpName,$target)){
////                $photo=$target;
////                echo "photo set";
////            }else{
////                echo "Can't upload";
////            }
////        }else{
////            echo "Only jpg/png are allow";
////        }
////    }else{
////        echo "File is bigger than 5M - file size is".number_format( $fileSize/1024/1024,2)."MB";
////       }
////   }
//
//
////    if(!isset($file)){
////        echo "Please select an image."
////    }else{
////        $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
////        $ima_name = addslashes($_FILES['photo']['name']);
////        $image_size =addslashes($_FILES['photo']['tmp_name']);
////    }
//
////    $ki = $_POST['hengly'];
////    $sql = "insert into test (hi) values ('$ki')";
//
//
//
////        if (move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
////            $msg="Image";
////        }else{
////            $msg="File";
////        }
//
//?>
<!---->
