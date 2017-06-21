<?php
$msg = "";
if (isset($_POST['upload'])) {
    $target = "img/".basename($_FILES['images']['name']);
    $db = mysqli_connect("localhost", "root", "", "phoneshop");
    $photo = $_FILES['images']['name'];

    $namey=$_POST['namey'];
    $price=$_POST['price'];
    $Brand=$_POST['Brand'];
    $Memory=$_POST['Memory'];
    $SIM=$_POST['SIM'];
    $Warran=$_POST['Warran'];
    $Color=$_POST['Color'];
    $Status=$_POST['Status'];
    $Remark=$_POST['Remark'];


    $sql = "insert into accessories (photo,namee,price,Brand,Memory,SIM,Warr,Color,Status,Remark) 
values ('$photo','$namey','$price','$Brand','$Memory','$SIM','$Warran','$Color','$Status','$Remark')";
//    mysqli_query($db, $sql);
        if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
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
        header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accessories</title>
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
        <form method="post" action="Accessories.php" enctype="multipart/form-data">
            <input type="hidden"  name="size" value="1000000" />
            <div class="col-md-8 col-md-offset-2"><input type="file" name="images"/></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="namey" placeholder="name"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="price" placeholder="price"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="Brand" placeholder="Brand"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="Memory" placeholder="Internal Memory"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="SIM" placeholder="SIM"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="Warran" placeholder="Warranty"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="Color" placeholder="Color"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="Status" placeholder="Status"></textarea></div>
            <div class="col-md-8 col-md-offset-2"><textarea name="Remark" placeholder="Remark"></textarea></div>

            <button type="submit" name="upload">Enter</button>
        </form>
</body>
</html>