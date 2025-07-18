<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $iron_man = 'Anthony Edvard "Tony" Stark';
        $war_machine = 'Colonel James Rupert "Rhodey" Rhodes';
        $var0 = true;
        $var1 = null;
        $var2 = 5.6;
        $var3 = 99;

        echo '$iron_man    is ' . gettype($iron_man) . ' ' . $iron_man . "<br>";
        echo '$war_machine is ' . gettype($war_machine) . ' ' . $war_machine . "<br>";
        echo '$var0        is ' . gettype($var0) . ' ' . $var0 . "<br>";
        echo '$var1        is ' . gettype($var1) . ' ' . $var1 . "<br>";
        echo '$var2        is ' . gettype($var2) . ' ' . $var2 . "<br>";
        echo '$var3        is ' . gettype($var3) . ' ' . $var3 . "<br>";
    ?>
</body>
</html>