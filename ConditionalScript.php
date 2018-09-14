<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        Exercise 02_01_01

        Author: Vincent Sanchez
        Date: 9.10.18

        ConditionalScript.php

     -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConditionalScript</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>ConditionalScript</h2>
    <?php
        $intVarible = 75;
        $result = "";
        ($intVarible > 100) ? $result = '$intVarible is greater than 100':
        $result = '$intVarible is less than or euqal to 100';
        echo '<h3>$result: '."$result</h3>";
    ?>
</body>
</html>