<!DOCTYPE html>
<html lang="en">
<head>
<!--
        Exercise 02_02_01

        Author: Vincent Sanchez
        Date: 9.19.18

        TempConversion.php

     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp conversion</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>Temp conversion</h2>
    <table>

    <tr>
    <th>Fahrenheit</th>
    <th>Celsius</th>
    </tr>

    <tr>
    <td>
    <!-- The first one is for the Fahrenheit -->
    <?php
        $counter = 1;
        $numbers = array();
        while ($counter < 101) {
            $numbers[] = $counter;
            ++$counter;
        }
        foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        } ?>
        </td>

    <td>

    <!-- the second one is for Celsius by taking the Fahrenheit and uses math to convert it to Celsius -->
    <?php 
        $counters = 1;
        $number = array();
        while ($counters < 101) {
            $number[] = $counters;
            ++$counters;
        }
        foreach($number as $currentNum){
        $newNum = $currentNum - 32;
        $nwMun = $newNum / 1.8;
            // echo "$nwMun<br>";
            echo number_format($nwMun, 2),"<br>";
    }
    ?>
    </td>

    </tr>
    <table>
</form>
</body>
</html>