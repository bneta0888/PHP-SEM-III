<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = "localhost";
    $dbname = 'databases_db';
    $user = 'root';
    $pass = '';

    $con = mysqli_connect($host, $user, $pass, $dbname);
    if (!$con) {
        die("Connection failed: ");
    }

    ?>
</body>
</html>