<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
    class fruit{
        public $name;
        public $color;
    
    function __construct($name , $color){
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct(){
        echo " the fruit is {$this->name} and the color is {$this->color}.";
    }

}

$Apple = new fruit("Apple","Red");
 
?>
</body>
</html>