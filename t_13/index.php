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

        class Team {
            public $id;
            public $avengers;

            public function __construct($id, $avengers) {
                $this->id = $id;
                $this->avengers = $avengers;
            }

            public function battle($damage) {
                foreach ($this->avengers as $key => $avenger) {
                    $avenger->hp -= $damage;
                    if ($avenger->hp <= 0) {
                        unset($this->avengers[$key]);
                    }
                }
                $this->avengers = array_values($this->avengers);
            }

            public function calculate($cloned_team) {
                $original_count = count($cloned_team->avengers);
                $current_count = count($this->avengers);
                $losses = $original_count - $current_count;

                if ($losses == 0) {
                    echo "We haven't lost anyone in this battle!\n";
                } else {
                    echo "In this battle we lost $losses Avengers.\n";
                }
            }
        }

        $avengers = [
            new Avenger("Tony Stark", "Iron Man", "male", 38, ["Intelligence", "Durability", "Magnetism"], 120),
            new Avenger("Natasha Romanoff", "Black Widow", "female", 35, ["Agility", "Martial Arts"], 75),
            new Avenger("Carol Danvers", "Captain Marvel", "female", 27, ["Durability", "Flight", "Interstellar Travel"], 95)
        ];

        $team = new Team(1, $avengers);

        $cloned_team = clone $team;

        $team->battle(150);

        $team->calculate($cloned_team);

        foreach ($team->avengers as $avenger) {
            echo $avenger;
        }
    ?>
</body>
</html>