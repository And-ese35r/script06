<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Overload {
            private $data = [];
            
            public function __set($name, $value) {
                $this->data[$name] = $value;
            }
        
            public function __get($name) {
                return $this->data[$name] ?? "NO DATA";
            }
        
            public function __isset($name) {
                $this->data[$name] = "NOT SET";
                return true;
            }
        
            public function __unset($name) {
                $this->data[$name] = null;
            }
        }
        
        $overload = new Overload();
        $overload->a = 1;
        $overload->b = 2;
        $overload->d = 3;

        echo $overload->a . "<br>";
        echo $overload->b . "<br>";
        var_dump(isset($overload->c));
        echo "<br>";
        echo $overload->c . "<br>";
        unset($overload->d);
        echo $overload->d . "<br>";
    ?>
</body>
</html>