<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function checkNumbers($firstNumber, $secondNumber) {
            if ($firstNumber > 0 && $secondNumber < 61) {
                $repearNumber = $secondNumber;
                $repearNumber++;
                for ($i = $firstNumber; $i < $repearNumber; $i++) {
                    echo "$i";
                    switch ($i) {
                        case $i % 2 === 0:
                            echo " Number is divisible by 2<br>";
                            break;
                        case $i % 3 === 0:
                            echo " Number is divisible by 3<br>";
                            break;
                        case $i % 3 != 0 && $i % 2 != 0:
                            echo " Number is normal<br>";
                            break;
                    }
                }
                return;
            }
            echo "Enter 2 Numbers from 1 to 60";
        }

        checkNumbers(1,17)
    ?>
</body>
</html>