<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 6/16/2017
 * Time: 1:36 PM
 */
session_start();
if(isset($_SESSION['first_Name'])){
    setcookie('first_Name', '', time()-3600);
    session_destroy();
}

header('Location: SignUp.php');
?>