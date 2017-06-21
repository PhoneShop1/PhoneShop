<?php
require_once('config/db.php');

if(isset($_POST['username']) && $_POST['username']!= ''){
    echo $password;
    $password = $_POST['password'];
    $username =$_POST['username'];
    $sql = "select * from userlogin where username = '$username' and password='$password'";
    $result = $conn->query($sql);
    echo $result->num_rows;
    // echo $username;
    if($result->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }else{
        echo "Wrong username or password";
    }
}else{
    header('Location: index.php');
}