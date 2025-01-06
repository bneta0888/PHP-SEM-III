<?php
session_start();
include ('function.php');
include ('connection.php');

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>It is index page</h1>
    <a href="logout.php">Logout</a>
    <br>
    Hello 
    
</body>
</html>