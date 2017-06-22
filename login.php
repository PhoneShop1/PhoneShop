<?php
//define('KEY_SALT','34353dfjjdfdh');
include ("dbconf.php");
$op = $_GET['op'];
if ($op == $_GET['op']){
    $usern = $_POST['username'];
    $pass = $_POST['password'];
    $pass = crypt($_POST['password'], KEY_SALT);
    $query = mysqli_query($conn,"SELECT * FROM userlogin username = '$usern' AND password = '$pass'");
    if (mysqli_num_rows($query,$usern,$pass)==0){
        session_start();
        echo "<script language=\"JavaScript\">
                alert(\" you are successful to login!\");
                document.location=\"index.php?name=".$usern."\";
              </script>";
        $_SESSION['username'] = $usern;
        $_SESSION['password'] = $pass;
        if (isset($_POST['check'])) {
            setcookie('username',$usern, time()+60*60*24);

        }
    }else{
        echo "<script language=\"JavaScript\">
                alert(\"sorry username or password is incorrect!\");
                document.location=\"index.php\";
              </script>";
    }
}
?>
<script></script>


