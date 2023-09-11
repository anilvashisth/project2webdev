<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php class</title>
</head>
<body>
    <h1>The PHP Program</h1>
<?php

    class Fruit {
        public $name;
        public $color;

        function set_name($name){
            $this ->name = $name;
        }
        function get_name(){
            return $this-> name;
        }

    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple-> set_name('Apple No 1');
    $banana->set_name('Banana No 1' );

    echo $apple-> get_name();
    echo "<br>";
    echo $banana-> get_name();

?>

    
</body>
</html>