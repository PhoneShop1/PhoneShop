<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: KONG KEA-->
<!-- * Date: 6/21/2017-->
<!-- * Time: 12:39 PM-->
<!-- */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <form role="form" name="loginForm" action="processChangePassword.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="cpassword" placeholder="Comfirm Password">
        <button type="submit">Login</button>

    </form>
<!--    <a href="register.php">Forget Password</a>-->
</body>
</html>