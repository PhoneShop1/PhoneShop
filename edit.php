<?php
//require_once('dbconf.php');
//
//$id= $_REQUEST['id'];
//$Technology=$_REQUEST['Technology'];
//echo "$id Technology=$Technology";
//echo "$id 2GBrand=$2GBrand";
//echo "$id Speed=$Speed";
////
////$technology','$t','$thGBrand','$fGBrand','$Speed','$GPRS','$EDGE',
////'$Announced','$Status','$Dimensions','$Weight','$Build','$SIM','$Typee','$Sizee',
////'$Resolution','$Multitouch','$Protection','$OS','$Chipset','$CPU','$GPU','$Card',
////'$Internal','$Primaryy','$Features','$Video','$Secondary','$Alert','$Loundspeaker',
////'$jack','$WLAN','$Bluetooth','$GPS','$NFC','$Radio','$USB','$Sensors','$Messaging',
////'$Brower','$Java','$Colors','$Battery'
//
//$sql="UPDATE network SET Technology='$Technology' WHERE id='$id'";
//$conn->query($sql);
//header("Location:detail.php");
//

require_once('dbconf.php');
echo "dfsdf";
$id=$_REQUEST[ 'id'];
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
$Weight=$_REQUEST['Weight'];
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
$namey=$_REQUEST['namey'];
$price=$_REQUEST['price'];
$brand=$_REQUEST['brand'];
$memory=$_REQUEST['memory'];
$sime=$_REQUEST['sime'];
$warr=$_REQUEST['warr'];
$colord=$_REQUEST['colord'];
$statuss=$_REQUEST['statuss'];
$remark=$_REQUEST['remark'];
//$photo=$_REQUEST[ 'photo'];
//if(isset($photo)){
//    if (isset($_FILES['photo'])){
////        $target="image/".basename($_FILES['photo']['name']);
////        $photo=$_FILES[ 'photo']['name'];
//        $uploadDir = "upload/";
//        $fileTmpName= $_FILES['photo']['tmp_name'];
//        $fileExtension=pathinfo($_FILES['photo']['tmp_name'])['extension'];
//        $fileName=time().".$fileExtension";
//        $target=$uploadDir.$fileName;
//        $fileSize=filesize($fileTmpName);
//        if($fileSize<=5242880){
//            if(in_array($fileExtension,['jpg'],['png'])){
//                if(move_uploaded_file($fileTmpName,$target)) {
//                    $photo = $target;
//                }else{
//                    echo "File is Fail to upload";
//                }
//            }else{
//                echo "Only jpg/png are allow";
//            }
//        }else{
//            echo "File is bigger than 5M - file size is ".number_format($fileSize/1024/024,2). "MB";
//        }
//    }
//}
$sql = "UPDATE network SET technology='$technology',tGBrand='$tGBrand',thGBrand='$thGBrand',fGBrand='$fGBrand'
,Speed='$Speed',GPRS='$GPRS',EDGE='$EDGE',
Announced='$Announced',Status='$Status',Dimensions='$Dimensions',Weight='$Weight'
,Build='$Build',SIM='$SIM',Typee='$Typee',Sizee='$Sizee',Resolution='$Resolution'
,Multitouch='$Multitouch',Protection='$Protection',OS='$OS','Chipset=$Chipset',CPU='$CPU',
GPU='$GPU',Card='$Card',Internal='$Internal',Primary='$Primary',Features='$Features'
,Video='$Video',Secondary='$Secondary',Alert='$Alert',Loundspeaker='$Loundspeaker',
jack='$jack',WLAN='$WLAN',Bluetooth='$Bluetooth',GPS='$GPS',NFC='$NFC',Radio='$Radio',
USB='$USB',Sensors='$Sensors',Messaging='$Messaging',Brower='$Brower',Java='$Java',
Colors='$Colors',Battery='$Battery',namey='$namey',price='$price',brand='$brand',memory='$memory',
sime='$sime',warr='$warr',colord='$colord',statuss='$statuss',remark='$remark' where id='$id' ";

//        if (move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
//            $msg="Image";
//        }else{
//            $msg="File";
//        }
echo $sql;
$conn->query($sql);
//    header('Location: detail.php');
?>


