<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 7</title>
</head>
<body>
    <h1>Lecture 7 from PHP Course</h1>
    <h2>WAP to Find , the given number is divisible by 2 and 3 or NOT </h2>
    <?php
    $var = 43;
    if($var%2==0 && $var%3==0){
        echo "Number is divisible by both of these"; 
    }
    elseif($var%2==0){
        echo "Number is divisible by 2";
    }
    elseif($var%3==0){
        echo "Number is divisible by 3";
    }
    else{
        echo "Number is neither divisivle by 2 nor divisible by 3";
    }

    ?>

</body>
</html>