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
    <h3>function</h3>
    <?php
    function message()
    {
        echo "Success Process!"."<br>";
    }
    message();
    message();
    message();
    function display($fname,$lname)
    {
        echo "$fname"." "."$lname"."<br>";
    }

    $fname="mostafa";
    $lname="ahmed";
    display($fname,$lname);
    display("lamiaa","mohammed");
    display("hassan","ali");
    display("hagar",9,8);

    function dispAge($name,$age=19,$gender="female")
    {
        echo "$name"."$age"." "."$gender"."<br>";
    }
    dispAge("lamiaa");
    dispAge("sara",20);
    dispAge("ahmed",19,"male");

    function sum($a,$b)
    {
        $c=$a+$b;
        return $c;
    }

  echo (sum(2,3))."<br>";
  $x=sum(5,7);
  echo "$x"."<br>";

  $m=9;
  $n=8;
  $k=sum($m,$n);
  echo "$k"."<br>";
  echo"$n"."<br>";
  echo"$m"."<br>";
function adding(&$val)
{
    $val+=10;
    return $val;
}

$value=5;
echo(adding($value))."<br>";
echo"$value"."<br>";

function total(...$num){
    $total=0;
    $len=count($num);
    echo "$len"."<br>";
    for($i=0;$i<$len;$i++)
    {
       $total+=$num[$i]; 
       echo "$num[$i] ";
    }
    echo"<br>"."$total"."<br>";
}

total(1,6,5,9,3,5,4);
total(1,5);


    ?>
</body>
</html>