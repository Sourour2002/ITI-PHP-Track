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
    <h3>superglobal</h3>
    <FOrm action="#" method="get">
        NAME:
        <input type="text" name="first">
        <input type="submit">
    </FOrm>
   
    <?php
   $x="welcome";
   function disp()
   {
    //echo $GLOBALS['x'];
    global $x;
    echo $x;
   }
   disp();
   echo "<br>";
   echo $_SERVER['PHP_SELF'];
   echo "<br>";
   echo $_SERVER['SERVER_NAME'];
   echo "<br>";
   echo $_SERVER['HTTP_HOST'];
   echo "<br>";
   echo $_SERVER['SCRIPT_NAME'];
   echo "<br>";
   echo $_SERVER['HTTP_USER_AGENT'];
   //$myname=$_REQUEST['first'];
   $myname=$_POST['first'];
   echo "<br>".$myname;
    ?>
</body>
</html>