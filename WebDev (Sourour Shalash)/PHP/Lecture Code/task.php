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
    <h3>welcome</h3>
    <?php
   for($x=2;$x<=10;$x+=2){
    echo "$x"."<br>";
   }

   $x=1;
   while($x<=10){
    if($x%2==0){
        echo "$x"."<br>";
    }
    $x++;
   }
    ?>
</body>
</html>