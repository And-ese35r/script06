<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        var_dump($_SERVER);
        echo "<br>";
        echo "<br>";
        var_dump($_GET);
        echo "<br>";
        echo "<br>";
        $_SESSION['background'] = 'black';
        var_dump($_SESSION);
        echo "<br>";
        echo "<br>";
        var_dump($_COOKIE);
        echo "<br>";
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        var_dump($_SERVER['argv']);
        #php script.php arg1 arg2
        echo "<br>";
        echo $_SERVER['REMOTE_ADDR'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['SERVER_PROTOCOL'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>";
        echo $_SERVER['REMOTE_USER'];
    ?>
</body>
</html>