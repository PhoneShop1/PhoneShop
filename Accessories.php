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
        header('Location: admin_index.php');
}
?>
