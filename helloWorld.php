<!DOCTYPE html>
<html lang="en">
<head>
<!--
        Exercise 02_01_01

        Author: Vincent Sanchez
        Date: 9.10.18

        PHPCodeBlocks.php

     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
    <?php
        $worldVar = "world";
        $sunVar = "sun";
        $moonVar = "moon";
        $worldInfo = "92897000";
        $sunInfo = "72000000";
        $moonInfo = "3456";
        
        echo "<p>Hello $worldVar! <br>";
        echo "The $worldVar is $worldInfo miles from the $sunVar . <br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately $sunInfo degrees Fahrenhiet.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is $moonInfo miles in diameter.</p>";

        echo "this is a {$moonVar}embedded in double quotes.";
        echo "this is a $moonVarembedded in double quotes.";
    ?>
</body>
</html>