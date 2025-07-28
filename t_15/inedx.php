<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function canculate_time() {
            $oldDate = new DateTime('1939-01-01');
            $newDate = new DateTime('2025-07-26');
        
            $interval = $oldDate->diff($newDate);
        
            $years = $interval->y;
            $month = $interval->m;
            $days = $interval->d;
        
            echo $years . "<br>";
            echo $month . "<br>";
            echo $days . "<br>";
        
            $allYears = $years * 12 * 30.02083;
            $allMonth = $month * 30.02083;
            echo round($allYears, 5) . "<br>";
            echo round($allMonth, 5) . "<br>";
            $allData = $allYears + $allMonth + $days;
            echo round($allData, 5) . "<br>";
            $allData = $allData / 7;
            echo round($allData, 10) . "<br>";
        }

        function calculate_modified_time() {
            $startDate = new DateTime('1939-01-01');
            $endDate = new DateTime();
        
            $interval = $startDate->diff($endDate);
            $totalDays = $interval->days;
            $dividedDays = $totalDays / 7;
        
            $years = (int)floor($dividedDays / 365);
            $remainingAfterYears = fmod($dividedDays, 365);
            $months = (int)floor($remainingAfterYears / 30.436875);
            $days = (int)round(fmod($remainingAfterYears, 30.436875));
        
            echo "Modified time (1939-01-01 to today divided by 7):<br>";
            echo "Years: $years<br>";
            echo "Months: $months<br>";
            echo "Days: $days<br>";
        }

        canculate_time();
        calculate_modified_time();
    ?>
</body>
</html>