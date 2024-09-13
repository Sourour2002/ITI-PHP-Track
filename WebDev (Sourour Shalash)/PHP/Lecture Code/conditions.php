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
   <?php
   echo "<h3>Conditions</h3>";
   $degree=40;
   if($degree>=50){
    echo "passed"."<br>";
   }
   else{
    echo"failed"."<br>";
   }

   $result=$degree>=50? "passed" : "failed";
   echo "shorthand result: ".$result."<br>";
   
   $a=8;
   $b=7;
   $c=6;
   if($b>$a && $b<$c){
    echo"b is between a and c...."."<br>";
   }
if($b>$a){
    if($b<$c){
        echo "b is in the between"."<br>";
    }
    else{
        echo "b just greater than a"."<br>";
    }
}
else{
    echo"wrong number"."<br>";
}
   if($degree>=80)
   {
    echo "excellent"."<br>";
   }
   elseif($degree>=70)
   {
    echo "very good"."<br>";
   }
   elseif($degree>=50){
    echo "good","<br>";
   }
   else{
    echo"failed"."<br>";
   }
   $num=9;
   switch($num){
    case 1:
        echo "saterday"."<br>";
        break;
        case 2:
            echo"sunday"."<br>";
            break;
            case 3:
                echo "monday"."<br>";
                break;
                case 4:
                    echo"thurethday"."<br>";
                    break;
                    case 5: 
                        echo"wednesday"."<br>";
                        break;
                        case 6: 
                            echo"tuesday"."<br>";
                            break;
                            case 7:
                                echo"friday"."<br>";
                                break;
                                default:
                                echo"wrong day number"."<br>";
   }

   $day=1;
   switch($day){
    case 2:
        case 3:
            case 4:
                case 5:
                    case 6:
                        echo "Days of work.."."<br>";
                        break;
                        case 1:
                            case 7:
                                echo "weak end.."."<br>";
                                break;
                                default:
                                echo"un defiened day.."."<br>";

   }
   echo "1"."<br>";
   echo "2"."<br>";
   echo "3"."<br>";
   echo "4"."<br>";
   echo "5"."<br>";

   $x=6;
   echo"while loop"."<br>";
   while($x<=5){
    echo "$x"."<br>";
    if($x==3){
        break;
    }  
    $x++;
   }
   echo "Do...While loop:"."<br>";
   $x=6;
   do{
    echo $x."<br>";
    $x++;
   }while($x<=5);
 $x=0;
 echo "While loop with continue:"."<br>";
   while($x<=5){
    $x++;
    if($x==3){
        continue;
    }
   
    echo "$x"."<br>";

   }

   echo"for loop.."."<br>";
   for($x=1;$x<=5;$x++){
    echo $x."<br>";
   }
   echo "foreach"."<br>";
   $numbers=array(1,2,3,4,5);
   foreach($numbers as $y)
   {
    echo $y."<br>";
   }



   echo "continue......";
   ?>

</body>
</html>