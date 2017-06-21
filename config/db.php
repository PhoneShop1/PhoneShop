<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phoneshop';

// define('KEY_SALT', 'kdfjkdsfjksjf94');

//Create connection to mysql database
$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    die('Fail to connect to mysql database');
}