<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP Assignment 4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
    // Question 1
    echo "<h3>Question 1</h3>";
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    
    echo factorial(5);
    
    // Question 2
    echo "<br><hr><h3>Question 2</h3>";
    function isPrime($num) {
        if ($num <= 1) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    echo isPrime(7) ? 'true' : 'false';
    echo isPrime(10) ? 'true' : 'false';

    // Question 3
    echo "<br><hr><h3>Question 3</h3>";
    function reverseString($str) {
        return strrev($str);
    }
    
    echo reverseString('hello');    

    // Question 4
    echo "<br><hr><h3>Question 4</h3>";
    function isAllLowercase($str) {
        return ctype_lower($str);
    }
    
    echo isAllLowercase('hello');
    echo isAllLowercase('Hello');

    // Question 5
    echo "<br><hr><h3>Question 5</h3>";
    $color = array('white', 'green', 'red', 'blue', 'black');

    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

    // Question 6
    echo "<br><hr><h3>Question 6</h3>";
    $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    $averageTemperature = array_sum($temperatures) / count($temperatures);
    
    echo "Average Temperature is : " . round($averageTemperature, 1);    
    ?>
</body>
</html>