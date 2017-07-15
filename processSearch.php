<?php
/**
 * Created by PhpStorm.
 * User: KONG KEA
 * Date: 7/7/2017
 * Time: 6:13 PM
 */

    require_once ('dbconf.php');

    $output = '';
    $sql="SELECT * FROM network WHERE brand LIKE '%".$_POST["search"]."%'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0){
        // $output .= '<h4 align:center>Search result</h4>';
        // $output .= '<div class="table-responsive">
        //  <table class="table table-bordered">
        //  <tr>
        //  <td>name</td>
        //  <td>comment</td>
        //  </tr>
        //  </table>
        // </div>';
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