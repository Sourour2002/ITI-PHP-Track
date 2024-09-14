<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP Assignment 5</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
    // Question 1
    echo "<h3>Question 1</h3>";
    $color = array('white', 'green', 'red');

    echo implode(', ', $color) . ',';
    
    echo "\n";
    
    foreach ($color as $col) {
        echo ". $col\n";
    }

    // Question 2
    echo "<br><hr><h3>Question 2</h3>";
    $people = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

    asort($people);
    echo "Ascending order by value:\n";
    print_r($people);
    
    ksort($people);
    echo "Ascending order by key:\n";
    print_r($people);
    
    arsort($people);
    echo "Descending order by value:\n";
    print_r($people);
    
    krsort($people);
    echo "Descending order by key:\n";
    print_r($people);
    
    // Question 3
    echo "<br><hr><h3>Question 3</h3>";
    function displayTable($array) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        foreach ($array as $subArray) {
            echo "<tr>";
            foreach ($subArray as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    $data = [
        ['Name', 'Age', 'City'],
        ['Sophia', 31, 'New York'],
        ['Jacob', 41, 'Los Angeles'],
        ['William', 39, 'Chicago']
    ];
    
    displayTable($data);    

    // Question 4
    echo "<br><hr><h3>Question 4</h3>";
    function contains($string, $substring) {
        return strpos($string, $substring) !== false;
    }
    
    $text = "Hello, world!";
    $search = "world";
    
    echo contains($text, $search) ? "String found!" : "String not found!";
    ?>
</body>
</html>