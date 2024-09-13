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
    $mess="";
    $mname="";
    $mess2="mail required";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["name"]))
        {
            $mess="name required";
        }
        else{
            $mname=$_POST["name"];
        }
    }

    ?>
    <h3>welcome</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name" value="<?php echo $mname; ?>">
        <span style="color:red">* <?php echo $mess; ?></span>
        <br><br>
        Address: <input type="text" name="address">
        <br><br>
        Mail: <input type="email" name="mail">
        <span style="color:red">*</span>
        <br><br>
        <input type="submit" value="submit" >
    </form>
    <?php


    ?>
</body>
</html>