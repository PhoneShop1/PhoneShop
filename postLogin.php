<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 6/15/2017
 * Time: 5:53 PM
 */
if(isset($_POST['first_Name']) && $_POST['passWord']!= ''){
    $first_Name = $_POST['first_Name'];
    $passWord = $_POST['passWord'];

    //Check user in database
    $hostname = 'localhost';
    $usernameDB = 'root';
    $passwordDB = '';
    $dbname = 'phoneshop';
    //Create connection to mysql database
    $conn = new mysqli($hostname, $usernameDB, $passwordDB, $dbname);

    if($conn->connect_error){
        die('Fail to connect to mysql database');
    }

    require_once('salt.php');
    $passWord = crypt($passWord, KEY_SALT);

    $sql = "select * from accounts where first_Name = '$first_Name' and passWord='$passWord'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        session_start();
        $_SESSION['first_name'] = $first_Name;
        if($_POST['rememberMe'] == 'r'){
            setcookie('username', $first_name, time()+60*60*24);
        }
        header('Location: index.php');
    }else{
        echo "Wrong first_Name or password";
    }
}else{
//    header('Location: login.php');
    echo"no";
}
?>