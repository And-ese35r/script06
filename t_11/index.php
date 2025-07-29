<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class LLitem {
            public $data;
            public $next;
        
            public function __construct($data) {
                $this->next = null;
                $this->data = $data;
            }
        }

        class LList {
            public $first = null;
            public $last = null;
            public $count = 0;

            public function __toString() {
                $result = [];
                $current = $this->first;
            
                while ($current !== null) {
                    $result[] = $current->data;
                    $current = $current->next;
                }

                return implode("    ", $result);
            }
        
            public function add($value) {
                $item = new LLitem($value);
                if ($this->first === null && $this->last === null) {
                    $this->first = $item;
                    $this->last = $item;
                }
                else {
                    $this->last->next = $item;
                    $this->last = $item;
                }
                $this->count++;
            }

            public function getFirst() {
                return $this->first !== null ? $this->first->data : null;
            }

            public function getLast() {
                return $this->last !== null ? $this->last->data : null;
            }

            public function addArr(array $value) {
                foreach ($value as $item) {
                    $this->add($item);
                }
            }

            public function remove($value) {
                if ($this->first === null) {
                    return;
                }
                
                if ($this->first->data === $value) {
                    $this->first = $this->first->next;
                    $this->count--;
                    return;
                }
                
                $current = $this->first;
                while ($current->next !== null) {
                    if ($current->next->data === $value) {
                        $current->next = $current->next->next;
                        $this->count--;
                        
                        if ($current->next === null) {
                            $this->last = $current;
                        }
                        return;
                    }
                    $current = $current->next;
                }
            }

            public function removeAll(array $value) {
                foreach ($value as $item) {
                    while ($this->contains($item)) {
                        $this->remove($item);
                    }
                }
            }
        
            public function contains($value) {
                $current = $this->first;
                while ($current !== null) {
                    if ($current->data === $value) {
                        return true;
                    }
                    $current = $current->next;
                }
                return false;
            }

            public function clear() {
                $this->first = null;
                $this->last = null;
                $this->count = 0;
            }

            public function count() {
                return $this->count;
            }
        }

        $list = new LList;
        $list->add(2);
        $list->add(3);
        $list->add(4);
        $list->remove(4);
        $list->removeAll([2, 3]);
        $list->clear();
        $list->addArr([5, 6, 7]);
        echo $list->count() . " ";
        echo $list->contains(7) . " ";
        echo $list . " ";
        echo $list->getFirst() . " ";
        echo $list->getLast();
    ?>
</body>
</html>