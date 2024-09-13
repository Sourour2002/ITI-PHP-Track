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
    <h3>reguar</h3>
    <?php
    $exp="/WELCOME/i";
    $text="welcome to egypt welcome to our country";
    echo preg_match($exp,$text);
    echo preg_match_all($exp,$text);
    echo preg_replace($exp,"hello",$text);
$patern="/[A-F]/i";
echo preg_match_all($patern,$text);
echo $text;
echo "<br>";
$myname=$_POST["name"];
echo "welcome ".$myname." to our site: yor mail is: ".$_POST["mail"]
." and your address is : ".$_POST["address"]."<br>";
    ?>
</body>
</html>