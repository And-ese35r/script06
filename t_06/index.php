<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class HardWocker {
            public $setName;
            public $getName;
            public $setAge;
            public $getAge;
            public $setSalary;
            public $getSalary;
            public $toArray;
        
            function __construct($setName = null, $getName = null, $setAge = null, $getAge = null, $setSalary = null, $getSalary = null, $toArray = null) {
                $this->setName = $setName;
                $this->getName = $getName;
                $this->setAge = $setAge;
                $this->getAge = $getAge;
                $this->setSalary = $setSalary;
                $this->getSalary = $getSalary;
                $this->toArray = $toArray;
            }
        
            public function nameRegister($setName, $getName) {
                $this->setName = $setName;
                $this->getName = $getName;
                if (preg_match('/^[a-zA-Z]/', $setName)) {
                    if ($getName === true) {
                        $this->toArray = "<br>Name: ";
                        $this->toArray .= $setName;
                        return;
                    }
                    return;
                }
                return $this->toArray = 'Denied, your name is doesn`t fit';
            }
        
            public function ageRegister($setAge, $getAge) {
                $this->setAge = $setAge;
                $this->getAge = $getAge;
                if (preg_match('/^(100|[1-9][0-9]?)$/', $setAge)) {
                    if ($getAge === true) {
                        $this->toArray .= "<br>Age: ";
                        $this->toArray .= $setAge;
                        return;
                    }
                    return;
                }
                return $this->toArray = 'Denied, your age is doesn`t fit';
            }
        

            public function salaryRegister($setSalary, $getSalary) {
                $this->setSalary = $setSalary;
                $this->getSalary = $getSalary;
                if (preg_match('/^(10000|[1-9]\d{2,3})$/', $setSalary)) {
                    if ($getSalary === true) {
                        $this->toArray .= "<br>Salary: ";
                        $this->toArray .= $setSalary;
                        return;
                    }
                    return;
                }
                return $this->toArray = 'Denied, your salary is doesn`t fit';
            }
        }

        $Register = new HardWocker();
        $Register->nameRegister("Andrii", true);
        $Register->ageRegister("16", true);
        $Register->salaryRegister("9999", true);
        echo $Register->toArray;
    ?>
</body>
</html>