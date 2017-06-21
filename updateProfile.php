<?php
require_once ('config/db.php');
if(isset($_FILES['photo'])){
    if(isset($_FILES['photo'])){
        $uploadDir = "upload/";
        $fileTmpName = $_FILES['photo']['tmp_name'];
        $fileExtension = pathinfo($_FILES['photo']['name'])['extension'];
        $fileName = time().".$fileExtension";
        $target = $uploadDir.$fileName;
        $fileSize = filesize($fileTmpName);
        //if file is bigger than 5M, reject the file
        if($fileSize <= 5242880){

            if(in_array($fileExtension, ['jpg', 'png'])){
                if(move_uploaded_file($fileTmpName, $target)){
                    $photo = $target;
                }else{
                    echo "File is fail to upload!";
                }
            }else{
                echo "Only pdf/jpg/png are allowed";
            }
        }else{
            echo "File is bigger thant 5M - file size is ".number_format($fileSize/1024/1024, 2)."MB";
        }
    }
    //Remove old file
    $userId = $_POST['userId'];
    $sql1 = "select * from userlogin where id = $userId";
    $result = $conn->query($sql1);
    while ($row = $result->fetch_obje()){
        //Remove old profile photo
        unlink($row->photo);
    }

    $sql2 = "update userlogin set photo='$photo' where id=$userId";
    $result = $conn->query($sql2);
    if($result){
        echo "Profile photo is update";
    }
}