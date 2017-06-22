<?php
session_start();
session_destroy();
//if (isset($_SESSION['username'])) {
    setcookie('username', '', time()-60*60*24);
    //session_destroy();
//}
header('Location: index.php');
?>