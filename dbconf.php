<?php
    define("HOST_NAME","localhost");
    define("USER_NAME","root");
    define("PASSWORD","");
    define("DB_NAME","phoneshop");


    $conn = new mysqli(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>