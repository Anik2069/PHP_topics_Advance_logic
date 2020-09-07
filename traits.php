<?php
trait sayWhere {
    public function whereAmI() {
        echo __CLASS__; #Return the class name this name use 
    }
}

class Hello {
    use sayWHere;
}

class World {
    use sayWHere;
}

$a = new Hello;
$a->whereAmI(); //Hello

$b = new World;
$b->whereAmI(); //World
?>
