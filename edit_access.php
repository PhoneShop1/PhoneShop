<html>
<head><title>Edit Accessories</title></head>
<body>
$id=$_GET['id'];
require_once('dbconf.php');
$sql = "select * from accessories where id=$id";
$result = $conn->query($sql);
$count=$result->num_rows;
if($count>0) {

while ($row = $result->fetch_object()) {
echo "
<form action='edit.php' method='request' >
    <input class=\"form - control\" type='hidden' value=$row->id name='id'>
    <input type=\"hidden\"  name=\"size\" value=\"1000000\" />
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->namee name=\"namey\" placeholder='Name'>$row->namee</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->price name=\"price\" placeholder='Price'>$row->price</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Brand name=\"brand\" placeholder='brand'>$row->brand</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Memory name=\"memory\" placeholder='Memory'>$row->memory</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->SIM name=\"sime\" placeholder='SIM'>$row->sime</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Warr name=\"warr\" placeholder='Warranty'>$row->warr</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Color name=\"color\" placeholder='Color'>$row->colords</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Status name=\"statuss\" placeholder='Status'>$row->statues</textarea></div>
    <div class='col-md-8 col-md-offset-2'> <textarea class=\"form-control textedit\" value=$row->Remark name=\"remark\" placeholder='Remark'>$row->remark</textarea></div>
    <div class='col-md-offset-10 col-md-2'><button type='submit' name='submit'>Enter</button></div>

</form>


";
}
}
?>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 6/23/2017
 * Time: 12:18 PM
 */



            require_once('dbconf.php');
            if(isset($_REQUEST['submit'])) {

                $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
                $namee = mysqli_real_escape_string($conn, $_REQUEST['namey']);
                $price = mysqli_real_escape_string($conn, $_REQUEST['price']);
                $brand = mysqli_real_escape_string($conn, $_REQUEST['brand']);
                $memory = mysqli_real_escape_string($conn, $_REQUEST['memory']);
                $sime = mysqli_real_escape_string($conn, $_REQUEST['sime']);
                $warr = mysqli_real_escape_string($conn, $_REQUEST['warr']);
                $colord = mysqli_real_escape_string($conn, $_REQUEST['colord']);
                $statuss = mysqli_real_escape_string($conn, $_REQUEST['statuss']);
                $remark = mysqli_real_escape_string($conn, $_REQUEST['remark']);
                if (empty($technology)) {
                    echo "<font color='red'>Note field is empty.</font><br/>";
                } else {
                    $result = mysqli_query($conn, "UPDATE accessories SET namee='$namee',price='$price',Brand='$brand',Memory='$memory',
            SIM='$sime',Warr='$warr',Status='$statuss',Remark='$remark' WHERE id=$id ");
                }
                header('Location:admin_index');

            }

?>