<?php
//including the database connection file
require_once('dbconf.php');
//getting id of the data from url
$id = $_REQUEST['id'];
//deleting the row from table
$sql ="DELETE FROM network WHERE id=$id";
$result = $conn->query($sql);
//redirecting to the display page (index.php in our case)
header("Location:admin_index.php");
?>
<?php
//including the database connection file
require_once('dbconf.php');
//getting id of the data from url
$id = $_REQUEST['id'];
//deleting the row from table
$sql ="DELETE FROM accessories WHERE id=$id";
$result = $conn->query($sql);
//redirecting to the display page (index.php in our case)
header("Location:admin_index.php");
?>
<?php
//including the database connection file
require_once('dbconf.php');
//getting id of the data from url
$id = $_REQUEST['id'];
//deleting the row from table
$sql ="DELETE FROM userlogin WHERE id=$id";
$result = $conn->query($sql);
//redirecting to the display page (index.php in our case)
header("Location:admin_index.php");
?>
