<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MyProject</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h3>Index page</h3>
    <?php
    echo "welome to first php <br>";
    ECHO "hello world <br>";
$x=5;
$y="5";
echo $x+$y."<br>";
var_Dump($y);
$z=(int)$y;
var_Dump($z);
$a=-4.5;
echo "<br>".(int)$a."<br>";
$b="";
echo (int)$b."<br>";
var_Dump((bool)$b);
echo(pi())."<br>";
echo(max(6,9,7,2,1,4))."<br>";
echo(abs($a))."<br>";
echo(sqrt(49))."<br>";
echo (round(5.876422))."<br>";
echo (rand(1,10))."<br>";
define("town","4");
echo town."<br>";
const city="4";
echo city."<br>";
echo $x."<br>";
$x="welcome";
echo $x."<br>";
const city="welcome";
echo city."<br>";
echo city."<br>";
function display(){
define("town","welcome");
echo town."<br>";
}

display();
echo (17%4)."<br>";
echo (16%4)."<br>";
echo(2**3)."<br>";
/*
17-4=13-4=9-4=5-4=1
16-4=12-4=8-4=4-4=0
*/
$x=3;
$x=7;
echo $x."<br>";
$x**=4;
//$x=$x+4;
echo $x."<br>";

var_Dump(7!=="7")."<br>";
var_Dump(7==="7")."<br>";

$a=4;
echo $a."<br>";
$a++;
echo $a."<br>";
$a--;
echo $a."<br>";
++$a;
echo $a."<br>";
echo $a++."<br>";
echo $a."<br>";
var_Dump(true and true);
var_dump(true or true);
var_dump(false or true);
var_dump(true or false);
var_dump(false or false);
var_dump(true xor true);
var_dump(false xor false);
var_dump(true xor false);
var_dump(false xor true);
var_dump(!false);
var_dump(false && true);
var_dump(true || true);
$fname="lamiaa";
//$fulname=$fname." mohammed";
$fname .=" mohammed";
echo "$fname"."<br>";







    ?>
</body>
</html>