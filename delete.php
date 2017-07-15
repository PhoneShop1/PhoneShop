<?php
require_once('dbconf.php');
$id = $_REQUEST['id'];
$sql ="DELETE FROM network WHERE id=$id";
$result = $conn->query($sql);
//header("Location:admin_index.php");
?>

<?php
require_once('dbconf.php');
$id = $_REQUEST['id'];
$sql ="DELETE FROM accessories WHERE id=$id";
$result = $conn->query($sql);
//header("Location:admin_index.php");
?>

<?php
require_once('dbconf.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM userlogin WHERE userId=$id";
    $result = $conn->query($sql);
header("Location:admin_index.php");
?>
