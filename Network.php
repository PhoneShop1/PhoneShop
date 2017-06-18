<?php
$msg = "";
if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);
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
echo $sql;
    mysqli_query($db, $sql);

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
    header('Location: detail.php');
}
?>
<html>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="css/style_s.css">
</head>
<body>


<!--//    $db = mysqli_connect("localhost","root","","phoneshop");-->
<!--//    $sql = "SELECT * FROM pcphoto";-->
<!--//    $result = mysqli_query($db,$sql);-->
<!--//    while ($row = mysqli_fetch_array($result)) {-->
<!--//        echo "<div id='img_div'>";-->
<!--//        echo "<img src='images/".$row['photo']."'>";-->
<!--//        echo "<p>".$row['title']."</p>";-->
<!--//        echo "<p>".$row['description']."</p>";-->
<!--//        echo "</div>";-->
<!--//    }-->


        <form action="Network.php" method="post" enctype="multipart/form-data">
            <input type="hidden"  name="size" value="1000000" />
            <input type="file" name="image" />
            <div class="col-md-12"><textarea name="namey" placeholder="Name"></textarea></div>
            <div class="col-md-12"><textarea name="price" placeholder="Price"></textarea> </div>
            <div class="col-md-12"><textarea name="brand" placeholder="Brand"></textarea> </div>
            <div class="col-md-12"><textarea name="memory" placeholder="Internal Memory"></textarea> </div>
            <div class="col-md-12"><textarea name="sime" placeholder="SIM"></textarea></div>
            <div class="col-md-12"><textarea name="warr" placeholder="Warranty"></textarea> </div>
            <div class="col-md-12"><textarea name="colord" placeholder="Color"></textarea> </div>
            <div class="col-md-12"><textarea name="statuss" placeholder="Status"></textarea> </div>
            <div class="col-md-12"><textarea name="remark" placeholder="Remark"></textarea></div>
            <div class="col-md-12">
                <textarea name="technology" placeholder="Technology" ></textarea>
            </div>
            <div>
                <input type="submit" name="upload" value="upload image">
            </div>
            <div class="col-md-12">
                <textarea name="tGBrand" placeholder="2GBrand"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="thGBrand" placeholder="3GBrands"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="fGBrand" placeholder="4GBrands"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Speed" placeholder="Speed"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="GPRS" placeholder="GPRS"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="EDGE" placeholder="EDGE"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Announced" placeholder="Announced"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Status" placeholder="Status "></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Dimensions" placeholder="Dimensions"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Weight" placeholder="Weight"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Build" placeholder="Build"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="SIM" placeholder="SIM"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Typee" placeholder="Type"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Sizee" placeholder="Size"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Resolution" placeholder="Resolution"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Multitouch" placeholder="Multitouch"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Protection" placeholder="Protection"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="OS" placeholder="OS"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Chipset" placeholder="Chipset"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="CPU" placeholder="CPU"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="GPU" placeholder="GPU"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Card" placeholder="Card slot"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Internal" placeholder="Internal"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Primary" placeholder="Primary"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Features" placeholder="Features"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Video" placeholder="Video"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Secondary" placeholder="Secondary"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Alert" placeholder="Alert types"></textarea>
            </div>
            <div class="col-md-12">
                <textarea name="Loundspeaker" placeholder="Loudspeaker"></textarea>
            </div><div class="col-md-12">
                <textarea name="jack" placeholder="3.5mm jack"></textarea>
            </div><div class="col-md-12">
                <textarea name="WLAN" placeholder="WLAN"></textarea>
            </div><div class="col-md-12">
                <textarea name="Bluetooth" placeholder="Bluetooth"></textarea>
            </div><div class="col-md-12">
                <textarea name="GPS" placeholder="GPS"></textarea>
            </div><div class="col-md-12">
                <textarea name="NFC" placeholder="NFC"></textarea>
            </div><div class="col-md-12">
                <textarea name="Radio" placeholder="Radio"></textarea>
            </div><div class="col-md-12">
                <textarea name="USB" placeholder="USB"></textarea>
            </div><div class="col-md-12">
                <textarea name="Sensors" placeholder="Sensors"></textarea>
            </div><div class="col-md-12">
                <textarea name="Messaging" placeholder="Messaging"></textarea>
            </div><div class="col-md-12">
                <textarea name="Brower" placeholder="Brower"></textarea>
            </div><div class="col-md-12">
                <textarea name="Java" placeholder="Java"></textarea>
            </div><div class="col-md-12">
                <textarea name="Colors" placeholder="Colors"></textarea>
            </div><div class="col-md-12">
                <textarea name="Battery" placeholder="Battery"></textarea>
            </div>

        </form>

</body>
</html>