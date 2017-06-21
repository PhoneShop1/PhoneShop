<!DOCTYPE html>
<html>
<head>
    <title>Register New Account</title>
    <link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/css/bootstrap.min.css">
    <meta content="width=device-width,initial-scale=1" name="viewpoet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="phoneshop.css">
    <script src="phoneshop.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="panel panel-default col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3" style="margin-top: 10%;">
<center>
<h1 > Register New Account </h1>
<form enctype="multipart/form-data" name="registerForm" method="post" action="processRegister.php">
    Photo:
    <div class="panel panel-default" style="width:200px; height:200px;">
    <input type="file" name="photo"><br/>
    </div>
    <div style="width: 300px;">
    <input class="form-control" type="text" name="username"  placeholder="Username" required="required"> <br>
    <input class="form-control" type="text" name="firstname" placeholder="First Name" required="required"><br>
    <input class="form-control" type="text" name="lastname" placeholder="Last Name" required="required"><br>
    <input class="form-control" type="email" name="email" placeholder="Email" required="required"><br>
    <input class="form-control" type="password" name="password"  placeholder="Password" required="required"> <br/>
    </div>
    Sex:<br>
    <select name="sex">
        <option value="F">Female</option>
        <option value="M">Male</option>
    </select>
    <br>
    <button type="submit">Register</button>
</form>
</center>
</div>
</body>
</html>