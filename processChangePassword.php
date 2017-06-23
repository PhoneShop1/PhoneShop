<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 6/21/2017
 * Time: 12:55 PM
 */
require_once ('config/db.php');
if(isset($_POST['username']) && $_POST['username']!= '') {
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    if ($cpassword != $password ) {
        echo "password not match or wrong username";
    } else {

        $sql = "UPDATE admin_accounts SET password='$password' WHERE username='$username'";
//        $sql1 = "select username from admin_accounts where username = '$username'";
        $result = $conn->query($sql);
//        echo $result->num_rows;

        if ($conn->query($sql) === TRUE) {
//        echo $result->num_rows;
//        if ($result->num_rows > 0){
//            echo "Record updated successfully";
            header('Location: admin_login.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
//$conn->close();
?>