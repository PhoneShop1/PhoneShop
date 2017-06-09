<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 6/9/2017
 * Time: 1:45 PM
 */
if(isset($_POST['first_Name']) && $_POST['last_Name'] && $_POST['email'] && $_POST['passWord'] && $_POST['cPassWord']!= ''){
    $first_Name = $_POST['first_Name'];
    $last_Name = $_POST['last_Name'];
    $email = $_POST['email'];
    $passWord = $_POST['passWord'];
    $cPassword = $_POST['cPassWord'];

    $hostname = 'localhost';
    $usernameDB = 'root';
    $passwordDB = '';
    $dbname = 'phoneShop';
    $conn = new mysqli($hostname, $usernameDB, $passwordDB, $dbname);

    if($conn->connect_error){
        die('Fail to connect to mysql database');
    }

    require_once('salt.php');
    $passWord = crypt($passWord, KEY_SALT);
    $cPassWord = crypt($cPassWord, KEY_SALT);

    $sql = "insert into accounts (first_Name,last_Name,email, passWord,cPassWord) values ('$first_Name','$last_Name','$email' ,
                                    '$passWord','$cPassWord')";
    $result = $conn->query($sql);
    print_r($result) ;
    if($result){
        header('Location: index.php');
    }else{
        header('Location: index.php');
    }
}else{
    echo "11";
    header('Location: Login.php');
}
?>