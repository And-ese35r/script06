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
                echo "\nDay" . self::$day . ":\n";

                if ($this->diet) {
                    $this->getFromFridge($products[rand(0, 2)], "Single Meal");
                    self::$day++;
                } else {
                    if (count($products) >= 3) {
                        $this->getFromFridge($products[0], "Breakfast");
                        $this->getFromFridge($products[1], "Lunch");
                        $this->getFromFridge($products[2], "Dinner");
                        self::$day++;
                    } else {
                        echo "Need at least 3 products for normal mode\n";
                    }
                }
            }

            public function getFromFridge(Product $product, $mealType) {
                try {
                    if ($product->kcal > 200) {
                        throw new FEatException();
                    }
                    echo "$mealType: {$product->name} ({$product->kcal} kcal)\n";
                } catch (FEatException $e) {
                    echo "$mealType: {$product->name} ({$product->kcal} kcal)\n";
                    echo "$mealType: " . $e->getMessage() . "\n";
                }
            }
        }

        $salad = new Product("Salad", 150);
        $pizza = new Product("Pizza", 350);
        $pasta = new Product("Pasta", 220);
        $apple = new Product("Apple", 120);
        $popcorn = new Product("Popcorn", 200);

        $products = [$salad, $pasta, $popcorn];


        echo "On Diet (1 meal per day):" . "\n";
        $dietMode = new Ingestion(true);
        $dietMode->daily_meal($products) . "\n";

        echo "Normal Mode (3 meals per day):" . "\n";
        $normalMode = new Ingestion(false);
        $normalMode->daily_meal($products) . "\n";
    ?>
</body>
</html>