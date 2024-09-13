<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>welcome</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        table,td{
border:1px solid black;
        }
        </style>
</head>
<body>
    <h3>Array Functions</h3>
    <?php
    $color=array("red","green","black","yellow","blue");
    sort($color);
    var_dump($color);
    echo"<br>";
    rsort($color);
    var_dump($color);
    echo"<br>S";
    $student=array("fname"=>"50","lname"=>"20","address"=>"70");
    asort($student);
    var_dump($student);
    echo"<br>";
    ksort($student);
    var_dump($student);
    echo"<br>";
    arsort($student);
    krsort($student);
    $myarr=array(
        array("ahmed",19,"cairo"),
        array("mohammed",20,"aswan"),
        array("ali",18,"helwan")
    );
    var_dump($myarr);
    echo"<br>";
    var_dump($myarr[1]);
    echo"<br>";
    var_dump($myarr[0][0]);
    echo"<br>";
    var_dump($myarr[1][2]);
    echo"<br>";
    echo"<table>";
    for($row=0;$row<3;$row++)
    {
        echo"<tr>";
        for($col=0;$col<3;$col++)
        {
            echo"<td>". $myarr[$row][$col]."</td>";
        }
        echo "</tr>";
    }
    echo"</table>";
    echo count($color)."<br>";
    ?>
</body>
</html>