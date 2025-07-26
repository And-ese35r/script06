<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class FEatException extends Exception {
            public function __construct() {
                parent::__construct("No more junk food, dumpling");
            }
        }

        class Product {
            public $name;
            public $kcal;

            public function __construct($name, $kcal) {
                $this->name = $name;
                $this->kcal = $kcal;
            }
        }

        class Ingestion {
            public $products = [];
            public $diet;
            private static $day = 1;

            public function __construct($diet = true) {
                $this->diet = $diet;
            }

            public function daily_meal(array $products) {
                echo "<br>Day" . self::$day . ":<br>";

                if ($this->diet) {
                    $this->get_from_fridge($products[0], "Single Meal");
                    self::$day++;
                } else {
                    if (count($products) >= 3) {
                        $this->get_from_fridge($products[0], "Breakfast");
                        $this->get_from_fridge($products[1], "Lunch");
                        $this->get_from_fridge($products[2], "Dinner");
                        self::$day++;
                    } else {
                        echo "Need at least 3 products for normal mode<br>";
                    }
                }
            }

            public function get_from_fridge(Product $product, $mealType) {
                try {
                    if ($product->kcal > 200) {
                        throw new FEatException();
                    }
                    echo "$mealType: {$product->name} ({$product->kcal} kcal)<br>";
                } catch (FEatException $e) {
                    echo "$mealType: " . $e->getMessage() . "<br>";
                }
            }
        }

        $salad = new Product("Salad", 150);
        $pizza = new Product("Pizza", 350);
        $pasta = new Product("Pasta", 220);
        $apple = new Product("Apple", 120);
        $popcorn = new Product("Popcorn", 200);

        $products = [$salad, $pasta, $popcorn];


        echo "On Diet (1 meal per day):";
        $dietMode = new Ingestion(true);
        $dietMode->daily_meal($products);

        echo "Normal Mode (3 meals per day):";
        $normalMode = new Ingestion(false);
        $normalMode->daily_meal($products);
    ?>
</body>
</html>