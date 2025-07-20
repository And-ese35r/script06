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
            private $string;

            public function __construct($string) {
                $this->string = $string;
            }

            public function letterFrequencies() {
                $letters = str_split(preg_replace('/[^a-z]/i', '', strtoupper($this->string)));
                $result = [];
                foreach ($letters as $letter) {
                    $result[$letter] = ($result[$letter] ?? 0) + 1;
                }
                return $result;
            }

            public function wordFrequencies() {
                $words = preg_split('/\s+/', preg_replace('/[^a-z\s]/i', '', strtolower($this->string)));
                return array_count_values($words);
            }

            public function reverseString() {
                return strrev($this->string);
            }
        }

        $text = new StrFrequency("Face Face it, Harley-- you and your Puddin' are kaput!");

        echo "Letters:<br>";
        foreach ($text->letterFrequencies() as $letter => $count) {
            echo "Letter $letter is repeated $count times<br>";
        }

        echo "<br>Words:<br>";
        foreach ($text->wordFrequencies() as $word => $count) {
            echo "Word $word is repeated $count times<br>";
        }

        echo "<br>Reverse:<br>" . $text->reverseString() . "<br>";
    ?>
</body>
</html>