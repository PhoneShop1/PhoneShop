<!DOCTYPE html>
<html>
<head>
    <title>Register New Account</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="modal-content" style="height:500px;">
    <center>
        <h1 style="margin-top:10%;"> Register New Account </h1><br>
        <form name="registerForm" method="post" action="processRegister.php">
            <input class="modal-content" type="text" name="first_Name"  placeholder="First name" required="required">
            <input class="modal-content" type="text" name="last_Name"  placeholder="Last name" required="required">
            <input class="modal-content" type="text" name="email"  placeholder="Email" required="required">
            <input class="modal-content" type="password" name="passWord"  placeholder="Password" required="required">
            <input class="modal-content" type="password" name="cPassWord"  placeholder="Confirm password" required="required">

            <button class="modal-content" type="submit">Register</button>
        </form>
    </center>
</div>
</body>
</html>