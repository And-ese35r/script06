<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class LLItem {
            public $data;
            public $next;

            public function __construct($data) {
                $this->data = $data;
                $this->next = null;
            }
        }
#....................................................................................................................................................................................................
        class LList implements IteratorAggregate {
            private $first;
            private $last;
            private $count;

            public function __construct() {
                $this->first = null;
                $this->last = null;
                $this->count = 0;
            }
#....................................................................................................................................................................................................
            public function getFirst() {
                return $this->first->data;
            }
#....................................................................................................................................................................................................
            public function getLast() {
                return $this->last->data;
            }
#....................................................................................................................................................................................................
            public function add($value) {
                $newItem = new LLItem($value);

                if ($this->last === null) {
                    $this->first = $newItem;
                    $this->last = $newItem;
                } else {
                    $this->last->next = $newItem;
                    $this->last = $newItem;
                }

                $this->count++;
            }
#....................................................................................................................................................................................................
            public function addArr(array $array) {
                foreach ($array as $value) {
                    $this->add($value);
                }
            }
#....................................................................................................................................................................................................
            public function remove($value) {
                if ($this->first && $this->first->data === $value) {
                    $this->first = $this->first->next;
                    $this->last = $this->first ? $this->last : null;
                    return $this->count-- > 0;
                }
                return false;
            }
#....................................................................................................................................................................................................
            public function removeAll(array $values) {
                $prev = null;
                $current = $this->first;

                while ($current !== null) {
                    if (in_array($current->data, $values)) {
                        if ($prev === null) {
                            $this->first = $current->next;
                        } else {
                            $prev->next = $current->next;
                        }
                        $this->count--;
                    } else {
                        $prev = $current;
                    }
                    $current = $current->next;
                }
            }
#....................................................................................................................................................................................................
            public function conteins($value) {
                $current = $this->first;
                while ($current !== null) {
                    if ($current->data === $value) {
                        echo "true";
                        return;
                    }
                    $current = $current->next;
                }
                    echo "false";
            }
#....................................................................................................................................................................................................
            public function clear() {
                $this->first = null;
                $this->last = null;
                $this->count = 0;
            }
#....................................................................................................................................................................................................
            public function count() {
                echo $this->count;
                return;
            }
#....................................................................................................................................................................................................
            public function getIterator(): \Traversable {
                $items = [];
                $current = $this->first;
                while ($current !== null) {
                    $items[] = $current->data;
                    $current = $current->next;
                }
                return new \ArrayIterator($items);
            }
        
        
        }
#....................................................................................................................................................................................................
        $list = new LList();

        $list->add(10);
        $list->add(20);

        $list->addArr([30, 40, 50, 60, 70]);

        echo "All Elements: ";
        foreach ($list as $item) {
            echo $item . " , ";
        }
#....................................................................................................................................................................................................
        echo "<br>" . "First Element: " . $list->getFirst() . "<br>";
        echo "Last Element: " . $list->getLast() . "<br>";

        $list->remove(10);
        $list->removeAll([50, 60, 70]);

        echo "All Elements: ";
        foreach ($list as $item) {
            echo $item . " , ";
        }
        echo "<br>";
        echo "Elements are: ";
        $list->count();
        echo "<br>";

        echo "Is contein element that meaning: ";
        $list->conteins(20);
        $list->clear();
        echo "<br>";
        
        echo "All Elements: ";
        foreach ($list as $item) {
            echo $item . " , ";
        }
#....................................................................................................................................................................................................
    ?>
</body>
</html>