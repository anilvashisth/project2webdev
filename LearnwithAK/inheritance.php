<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Inheritance class</title>
</head>
<body>
    <h1>The PHP Program</h1>
<?php
    class Fruit {
        public $name;
        public $color;

        public function __construct($name, $color){
            $this ->name = $name;
            $this ->color = $color;
        }
        public function intro(){
            echo "A {$this->name} is a fruit and color of the fruit is {$this->color}." ;
        }

    }
    class cherry extends Fruit {
        public function message(){
        echo "is cherry a fruit or barry?";
        echo "<br>";
    }
}

    $cherry = new cherry("Cherry", "red");
    $cherry->message();
    $cherry->intro();
?>

    
</body>
</html>