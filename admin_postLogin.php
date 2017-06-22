<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 6/21/2017
 * Time: 12:49 PM
 */
require_once('config/db.php');

if(isset($_POST['username']) && $_POST['username']!= ''){;
    $password = $_POST['password'];
    $username =$_POST['username'];
    $sql = "select * from admin_accounts where username = '$username' and password='$password'";
    $result = $conn->query($sql);
    echo $result->num_rows;
    // echo $username;
    if($result->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username;
        header('Location: admin_index.php');
    }else{
        echo "Wrong username or password";
    }
}else{
    header('Location: admin_index.php');
}