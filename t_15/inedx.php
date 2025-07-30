<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Time Calculation</title>
</head>
<body>
    <?php
        function canculate_time() {
            $oldDate = new DateTime('1939-01-01');
            $newDate = new DateTime('2025-09-30');
        
            $interval = $oldDate->diff($newDate);
        
            $years = $interval->y;
            $month = $interval->m;
            $days = $interval->d;
        
            echo $years . "\n";
            echo $month . "\n";
            echo $days . "\n";
        
            $allYears = $years * 12 * 30;
            $allMonth = $month * 30;
            echo $allYears . "\n";
            echo $allMonth . "\n";
            $allData = $allYears + $allMonth + $days;
            echo $allData . "\n";
            $allData = $allData / 7;
            echo $allData . "\n";
            echo $allDays = intval($allData);
            $astraYears = intval($allDays / 360);
            $remainingDays = $allDays % 360;
            $astralMonth = intval($remainingDays / 30);
            $astralDays = $remainingDays % 30;
                    
            echo "Общее количество дней: " . $allDays . "\n";
            echo "Астральные годы: " . $astraYears . "\n";
            echo "Астральные месяцы: " . $astralMonth . "\n";
            echo "Астральные дни: " . $astralDays . "\n";

        }

        canculate_time();
    ?>
</body>
</html>
