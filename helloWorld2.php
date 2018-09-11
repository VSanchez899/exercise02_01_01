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
        define("WORLD_INFO", 92897000);
        define("SUN_INFO", 72000000);
        define("MOON_INFO", 3456);
        
        echo "<p>Hello $worldVar! <br>";
        echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar . <br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenhiet.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is ", number_format(MOON_INFO, 0), "miles in diameter.</p>";
    ?>
</body>
</html>