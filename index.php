<?php
    include("connec.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE==edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>""
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" method ="POST">
            <label >Username: </label>
            <input type="text" id="user" name="user"></br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"></br></br>
            <input type="submit" id="btn" value="login" name="submit"/>
        </form>
    </div>
</body>
</html>