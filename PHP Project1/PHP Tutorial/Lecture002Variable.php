<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 2</title>
</head>
<body>
    <h1> This is Second Lecture for PHP Course</h1>
    <h2> How to use Variable in PHP</h2>
    <?php

    echo "Hello World and PHP Learning Community <br>";
    //Numerical,Float,Array,String etc
    
    $num1 = 1515;
    echo "Numerical Value of Given Number is : $num1 <br>";
    
    $float1 = 15.24;
    echo "Float Value of Given number is : $float1 <br>";
    
    $str = 'Hello PHP Learner';
    echo " String Value of Given Variable is : $str <br> ";

    $laptop_brand = array("HP","DELL","LENOVO","SONY","ASUS");
    echo var_dump ($laptop_brand);
    echo var_dump ($laptop_brand[2]);

    ?>
    
</body>
</html>
