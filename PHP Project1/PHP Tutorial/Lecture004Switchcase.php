<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4 </title>
</head>
<body>
    <h1> This is 4th Lecture for PHP Course</h1>
    <H2> How to Use Switch case Condition in PHP </H2>
    <?php

    $level = 15;
    switch($level){
        case 1:
            echo "1 is Easy level";
        break;
        case 2:
            echo "2 is Modrate level";
        break;
        case 3:
            echo "3 is Hard level";
        break;
        case 4:
            echo "4 is very difficult level";
        break;
        default:
            echo " invalid entry, valid entry is 1 to 4 ";
    }
    ?>
    
</body>
</html>