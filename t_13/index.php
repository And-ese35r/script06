<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Avenger {
            public $name;
            private $alias;
            public $gender;
            public $age;
            private $power;
            public $hp;

            public function __construct($name, $alias, $gender, $age, $power, $hp) {
                $this->name = $name;
                $this->alias = $alias;
                $this->gender = $gender;
                $this->age = $age;
                $this->power = $power;
                $this->hp = $hp;
            }
        
            public function __toString() {
                $powers = implode(", ", $this->power);
                return "{$this->name}, {$this->gender}, {$this->age}, {$this->hp}\n{$this->alias}, {$powers}\n";
            }
        }

        class Team extends Avenger {
            public $avengers;

            public function __construct($avengers) {
                $this->avengers = $avengers;
            }

            public function battle($damage) {
                $lost = 0;
                foreach ($this->avengers as $avenger) {
                    $avenger->hp -= $damage;
                    if ($avenger->hp <= 0) {
                        $lost++;
                    }
                }
                if ($lost > 0) {
                    echo "We lost $lost Avenger.";
                }
            }
        }

        $avengers = [
            new Avenger("Tony Stark", "Iron Man", "male", 38, ["Intelligence", "Durability", "Magnetism"], 120),
            new Avenger("Natasha Romanoff", "Black Widow", "female", 35, ["Agility", "Martial Arts"], 75),
            new Avenger("Carol Danvers", "Captain Marvel", "female", 27, ["Durability", "Flight", "Interstellar Travel"], 95)
        ];

        $team = new Team($avengers);
        $team->battle(50);
        $team->battle(25);
    ?>
</body>
</html>