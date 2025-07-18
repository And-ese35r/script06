<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getPriceItem($items) {
        $currentItems = array_keys($items);
        $currentCount = array_values($items);
        $price = $currentCount[0];
        $totalPrice = floatval($price);

    
        echo "$currentItems[0] - ";
        echo "$currentCount[0]$<br>";

        for($i = 1; $i < count($currentCount); $i++) {
            echo "$currentItems[$i] - ";
            echo "$currentCount[$i]$<br>"; 
            $totalCount = floatval($currentCount[$i]);
            $totalPrice += $totalCount;
        }

        echo "Total Price - $totalPrice$";
    } 

    getPriceItem([
        "Apple" => "0.6",
        "Phone" => "1400",
        "Sofa" => "400",
        "Orange" => "0.8"
    ]);
    ?>
</body>
</html>