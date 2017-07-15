<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/13/2017
 * Time: 1:12 PM
 */

require_once ('dbconf.php');

$sql="SELECT * FROM network WHERE namee LIKE '%".$_GET["search"]."%'";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0){
    while ($row=mysqli_fetch_object($result)) {
        echo "
                        <a href='detail.php?id=$row->id' >
                            <div class=\"panel-default col-md-2 col-xs-2 col-sm-2\" id=\"show\">
                                <div class=\"thumbnail\">
                                    <img src=\"img/".$row->photo."\" alt=\"...\">
                                    <div class=\"caption\">
                                        $row->namee
                                    </div>
                                </div>
                            </div>
                        </a>
    
                    ";
    }
    exit();
}
else{
    echo 'data not found';
}
?>