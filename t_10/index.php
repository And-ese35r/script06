<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        trait Update {
            public $availability = ['2 x Republicans', 'M134 7.62mm Miniguns', '2 x FM F2000 Tacticals', 'Sidewinder "Ex-Wife" Self-Guided Missile', 'M24 Shotgun', 'Milkor MGL 40mm Grenade Launcher'];
        }

        class MarkII {
            use Update;
            public function processAvailability() {
                for ($i = 0; $i < count($this->availability); $i++) {
                    echo $i . ": " . $this->availability[$i] . "<br>";
                }
            }
        }

        $ironMan = new MarkII;
        $ironMan->processAvailability();
    ?>
</body>
</html>