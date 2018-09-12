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
    <h2>Interest Array</h2>
    <?php
        $interestRate1 = .0725;
        $interestRate2 = .0750;
        $interestRate3 = .0775;
        $interestRate4 = .0800;
        $interestRate5 = .0825;
        $interestRate6 = .0850;
        $interestRate7 = .0875;

        $ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);
        echo number_format($ratesArray[0], 4),"<br>";
        echo number_format($ratesArray[1], 4),"<br>";
        echo number_format($ratesArray[2], 4),"<br>";
        echo number_format($ratesArray[3], 4),"<br>";
        echo number_format($ratesArray[4], 4),"<br>";
        echo number_format($ratesArray[5], 4),"<br>";
        echo number_format($ratesArray[6], 4),"<br>";
    ?>
</body>
</html>