<!DOCTYPE html>
<html lang="en">
<head>
<!--
        Exercise 02_02_01

        Author: Vincent Sanchez
        Date: 9.19.18

        GasPrices.php

     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Prices</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>Gas Prices</h2>
    <?php
    //uses if else statement in order to tell if the gas prices are within a certain range
        $gasPrice = 2.57;
        //additionally can use rand method to use random selected integers
        if ($gasPrice >= 2 && $gasPrice <= 3) {
            echo "<p>Gas prices are between $2.00 and $3.00</p>";
        }
        else {
            echo "Gas prices are not between $2.00 and $3.00";
        }
        
    ?>
</body>
</html>