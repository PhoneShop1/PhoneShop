<?php
if(isset($_POST['first_Name']) && $_POST['last_Name'] && $_POST['email'] && $_POST['passWord']!=''){
    $first_Name = $_POST['first_Name'];
    $last_Name = $_POST['last_Name'];
    $email = $_POST['email'];
    $passWord = $_POST['passWord'];

    $hostname = 'localhost';
    $usernameDB = 'root';
    $passwordDB = '';
    $dbname = 'phoneshop';
    $conn = new mysqli($hostname, $usernameDB, $passwordDB, $dbname);
//    $firstname = "select first_Name from phoneshop";



    if($conn->connect_error){

        die('Fail to connect to mysql database');
    }

    require_once('salt.php');
    $passWord = crypt($passWord, KEY_SALT);

    $sql = "insert into accounts (first_Name,last_Name,email,passWord) values ('$first_Name','$last_Name','$email','$passWord')";
//    echo"$sql";

    $result = $conn->query($sql);
    print_r($result) ;
    if($result){
//        echo "$firstname";
        header('Location: index.php');
    }else{
//        header('Location: index.php');
    echo "can't connect to database!!";
    }
}else{
    echo "11";
    header('Location: Login.php');
}
?>