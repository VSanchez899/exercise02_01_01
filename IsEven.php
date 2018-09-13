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
    <title>Is Even</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
    <h2>Is Even</h2>
    <?php
    //this is an array that holds 10 integers that are even or odd
        $numbersArray = array("22", "64", "54", "11", "12", "15", "43", "21", "16", "14");
        //this is a for loop that run through the array and checks if a number has a remainder which makes it odd
        for ($i=0; $i < count($numbersArray); $i++) { 
            if ($numbersArray[$i] % 2 === 0) {
                echo "$numbersArray[$i] is an even number <br>";
            }else {
                echo "$numbersArray[$i] is an odd number <br>";
            }
        }
    ?>
</body>
</html>