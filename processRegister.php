<?php
require_once ('config/db.php');
if(isset($_POST['username']) && $_POST['username']!= ''){
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $photo = '';

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

    // $password = crypt($password, KEY_SALT);

    $sql = "insert into userlogin (username,first_name, last_name, email, password, sex,photo) values ('$username','$firstname','$lastname', '$email', '$password', '$sex', '$photo')";
    echo "$sql";
    $result = $conn->query($sql);
    if($result){
        header('Location: index.php');
    }else{
        header('Location: register.php');
    }
}else{
    header('Location: index.php');
}