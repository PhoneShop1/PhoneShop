<html>
<head><title>Edit User</title></head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 6/23/2017
 * Time: 12:18 PM
 */

$id=$_GET['id'];
require_once('dbconf.php');
$sql = "select * from userlogin where id=$id";
$result = $conn->query($sql);
$count=$result->num_rows;
if($count>0) {
    while ($row = $result->fetch_object()) {
        echo "
               <form action='edit.php' method='request' >
                    <input class=\"form - control\" type='hidden' value=$row->id name='id'>
                    <input type=\"hidden\"  name=\"size\" value=\"1000000\" />
                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->username name=\"username\" placeholder='Username'>$row->username</textarea></div>
                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->first_name name=\"first\" placeholder='Fiest Name'>$row->first_name</textarea></div>
                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->last_name name=\"last\" placeholder='Last Name'>$row->last_name</textarea></div>
                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->email name=\"email\" placeholder='Email'>$row->email</textarea></div>
                    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->sex name=\"warr\" placeholder='Sex'>$row->sex</textarea></div>
                    <div class='col-md-offset-10 col-md-2'><button type='submit' name='submit'>Enter</button></div>
                </form>
                ";
    }
}
?>
</body>
</html>

<?php
require_once('dbconf.php');
if(isset($_REQUEST['submit'])) {

    $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $first = mysqli_real_escape_string($conn, $_REQUEST['first']);
    $last = mysqli_real_escape_string($conn, $_REQUEST['last']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
    if (empty($technology)) {
        echo "<font color='red'>Note field is empty.</font><br/>";
    } else {
        $result = mysqli_query($conn, "UPDATE userlogin SET username='$username',first_name='$first',last_name='$last',email='$email',
                        sex='$sex' WHERE id=$id ");
    }
    header('Location: admin_index.php');
}
?>




