<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dom = new DOMDocument('1.0', 'utf-8');

        $paragraph = $dom->createElement('p');
        $text = $dom->createTextNode('You were absent from quantum space for 11 years, 11 months and 30 days.');
        $paragraph->appendChild($text);

        $dom->appendChild($paragraph);

        echo $dom->saveHTML();

    ?>
</body>
</html>