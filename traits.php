<h2>Return Class name</h2>


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





# Break Line;
?>
<br><br>
<h2>Use Traits</h2>
<?php


trait Hello1 {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World2 {
    public function sayWorld() {
        echo 'World!';
    }
}

trait HelloWorld {
    use Hello1, World2;
}

class MyHelloWorld {
    use HelloWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
?>