<?php
$msg = "";
if (isset($_POST['upload'])) {
$target = "img/".basename($_FILES['images']['name']);
$db = mysqli_connect("localhost", "root", "", "phoneshop");
$photo = $_FILES['images']['name'];

$namey=$_POST['namey'];
    $sql = "insert into new_model (photo_model,namey) 
values ('$photo','$namey')";
//    mysqli_query($db, $sql);
    if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
        $msg = "Image Uploaded Successfully";
    } else {
        $msg = "There Was A problem uploading image";
    }
    $result = $db->query($sql);
    if($result){
        echo "New word created";
    }else{
        echo "Fail to create new word";
    }
    header('Location: admin_index.php');
}
?>

<!---->
<!--<div class="thumbnail panel panel-default  col-md-8 col-xs-8 col-sm-8" >-->
<!--			<div class="thumbnail panel panel-default  col-md-12 col-xs-12 col-sm-12" >-->
<!--				<nav class="navbar navbar-default" id="pageheader">-->
<!--					<div class="container-fluid">-->
<!--						<div class="navbar-header">-->
<!--						<img alt="Brand" src="img\huawei.png" style="width: 100px; height: 35px; margin-top: 10px;">-->
<!--							-->
<!--						</div>-->
<!--						<div  class="navbar-header navbar-right" >-->
<!--							<a  href="samsung.php?model=Huawei">-->
<!--								<button class="btn btn-default navbar-btn " id="btn">more</button>-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</nav>-->
<!--                        --><?php
//                        require_once('dbconf.php');
////                        $sql = "select id,photo,namee from network ORDER by id DESC limit 4";
//                        $sql="select id,namee,photo,price from network where brand ='Huawei' ORDER BY id DESC limit 4";
//                        $result = $conn->query($sql);
//
//                            while ($row = mysqli_fetch_object($result)) {
//                                echo"
//                            
//                                <a href='detail.php?id=$row->id' >
//                                   <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
//					<div class=\"thumbnail\" style='height: 220px;'>
//						<img src=\"img/".$row->photo."\" alt=\"...\">
//						<div class=\"caption\">
//							$row->namee
//                            </div>
//                            <center><div style='color: red'>$row->price</div></center>
//                        </div>
//                    </div></a>
//                        ";
//                            }
//
//                        ?>
<!--</div>-->
