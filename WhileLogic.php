<!DOCTYPE html>
<html lang="en">
<head>
<!--
        Exercise 02_02_01

        Author: Vincent Sanchez
        Date: 9.19.18

        WhileLogic.php

     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Logic</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>While Logic</h2>
    <?php
    //uses while loop to display list from 1 - 100
        $counter = 1;
        $numbers = array();
        while ($counter < 101) {
            $numbers[] = $counter;
            ++$counter;
        }
        foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        }
    ?>
</body>
</html>