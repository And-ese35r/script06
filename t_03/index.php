<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function firstUpper($text) {
        return ucfirst(strtolower($text));
    }

    $result = firstUpper('heLlo World');
    echo $result;
    ?>
</body>
</html>