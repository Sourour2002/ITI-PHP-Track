<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>welcome</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h3>Array</h3>
    <?php
    $color=array("red","green","blue");
    var_dump($color);
    echo "<br>";
    $varArr=array("ahmed",19,true);
    var_dump($varArr);
    echo"<br>";
    echo $color[1]."<br>";
    foreach($color as $x){
        echo $x."<br>";
    }
    $color[0]="black";
    var_dump($color);
    echo"<br>";
    $color[3]="gray";
    var_dump($color);
    array_push($color,"white");
    echo"<br>";
    var_dump($color);
    $color[15]="tomato";
    echo"<br>";
    var_dump($color);
    echo"<br>";
    array_push($color,"rose");
    var_dump($color);
    echo"<br>";
    $student=array("name"=>"mostafa","age"=>19,"address"=>"cairo");
    var_dump($student);
    echo"<br>";
    echo $student["address"]."<br>";
    foreach($student as $x=>$y)
    {
        echo "$x : $y<br>";
    }
    $MyArr=[
        "car",
        2024,
        "mohammed",
        true
    ];

    $cars=[
        "brand"=>"bmw",
        "year"=>2022,
        "price"=>400000.658977
    ];
    $numbers=[];
    $numbers["first"]=8;
    $numbers["last"]=9;
    array_push($color,"12","85",98);
    var_dump($color);
    echo"<br>";
    var_dump($numbers);
    echo"<br>";
    $numbers +=["second"=>564,"third"=>4789,"fourth"=>12];
var_dump($numbers);
echo"<br>";
// array_splice($color,9,1);
// var_dump($color);
// echo"<br>";
unset($color[18],$color[2]);
var_dump($color);
echo"<br>";

    ?>
</body>
</html>