<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 6/23/2017
 * Time: 12:25 PM
 */
session_start();
session_destroy();
//if (isset($_SESSION['username'])) {
    setcookie('username', '', time()-60*60*24);
    //session_destroy();
//}
header('Location: admin_index.php');
?>