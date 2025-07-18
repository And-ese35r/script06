<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class StrFrequency {
            public $string;

            function __construct($s) {
                $this->string = $s;
            }

            function letterFrequencies() {
                $r = [];
                $s = strtoupper(preg_replace('/[^a-z]/i', '', $this->string));
                for ($i = 0; $i < strlen($s); $i++) {
                    $c = $s[$i];
                    $r[$c] = isset($r[$c]) ? $r[$c]+1 : 1;
                }
                return $r;
            }

            function wordFrequencies() {
                $r = [];
                $words = preg_split('/[^a-z]+/i', strtolower($this->string));
                foreach ($words as $w) {
                    if ($w) $r[$w] = isset($r[$w]) ? $r[$w]+1 : 1;
                }
                return $r;
            }

            function reverseString() {
                $r = [];
                $words = preg_split('/[^a-z]+/i', strtolower($this->string));
                foreach ($words as $w) {
                    if ($w) $r[$w] = isset($r[$w]) ? $r[$w]+1 : 1;
                }
                return strrev($this->string);
            }
        }       


        $sf = new StrFrequency("Face it, Harley-you and your Puddin' are kaput!");
        foreach ($sf->letterFrequencies() as $letter => $count) {
            echo "$letter - $count<br><br>";
        }
        foreach ($sf->wordFrequencies() as $word => $count) {
            echo "$word - $count<br><br>";
        }
        echo $sf->reverseString();
    ?>
</body>
</html>