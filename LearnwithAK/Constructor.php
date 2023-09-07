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

    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$Apple = new fruit("Apple","Red");
echo $Apple->get_name();
echo "<br>";
echo $Apple->get_color();

?>
</body>
</html>