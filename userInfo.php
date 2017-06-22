<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Info</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Username</th>
        <th>Sex</th>
        <th>Photo</th>
    </tr>
<?php
    require_once ("config/dbconf.php");
    $sql = "select * from userlogin where id =1";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()){
        ?>
        <tr>
            <td><?= $row->username ?></td>
            <td><?= $row->sex ?></td>
            <td>
                <img src="<?= $row->photo ?>">
                <a href="<?= $row->photo ?>" target="_blank">Download</a>
            </td>
        </tr>
        <?php
    }
?>
</table>
    <form enctype="multipart/form-data" action="updateProfile.php" method="post">
        <input type="hidden" value="1" name="userId">
        <input type="file" name="photo">
        <button type="submit">Submit</button>
    </form>
</body>
</html>