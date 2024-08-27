<!DOCTYPE html>
<html>
<head>
    <?php
    $var = "PHP Tutorial";
    ?>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $var; ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
    $string = "Tomorrow I will learn PHP global variables. <br>This is a bad <br>command : del .";
    echo $string;
    ?>

    <h3><?php echo $var; ?></h3>
    <a href="#"><?php echo $var; ?></a>

    <?php
    $word_count = str_word_count($var);
    echo "<br>The number of words in the string is: " . $word_count;

    $string_length = strlen($var);
    echo "<br>The length of the string is: " . $string_length;
    
    $substring = "PHP";
    
    if (strpos($string, $substring) !== false) {
        echo "<br>The substring '$substring' was found in the string.";
    } else {
        echo "<br>The substring '$substring' was not found in the string.";
    }
    ?>
    
    <?php
    phpinfo();
    ?>
</body>
</html>