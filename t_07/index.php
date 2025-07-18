<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Tower {
    public $flors;
    private bool $elevator;
    private int $arc_capacity;
    private float $height;

    public function hasElevator(): bool {
        return $this->elevator;
    }

    public function setElevator(bool $elevator) {
        $this->elevator = $elevator;
    }

    public function hasArcCapacity(): int {
        return $this->arc_capacity;
    }

    public function setArcCapacity(int $arc_capacity) {
        $this->arc_capacity = $arc_capacity;
    }

    public function hasHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height) {
        $this->height = $height;
    }

    public function floorHeight() : float {
        $calculations = $this->height / $this->flors;
        return $calculations;
    }

}

$tower = new Tower();
echo "Flors: ";
$tower->flors = 93;
echo $tower->flors;
$tower->setElevator(true);

if ($tower->hasElevator()) {
    echo "<br>Elevator: +";
}
else {
    echo "<br>Elevator: -";
}

$tower->setArcCapacity(70);
echo "<br>Arc Capacity: ";
echo $tower->hasArcCapacity();

$tower->setHeight(1130);
echo "<br>Height: ";
echo $tower->hasHeight();

echo "<br>Floor Height: ";
echo $tower->floorHeight();
?>
</body>
</html>