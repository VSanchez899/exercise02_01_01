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
    <title>Days Array</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
    <h2>Days Array</h2>
    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The days of the week are ","<br>",
        $days[0],"<br>",
        $days[1],"<br>",
        $days[2],"<br>",
        $days[3],"<br>",
        $days[4],"<br>",
        $days[5],"<br>",
        $days[6],"<br>",
        "</p>";

        $days1 = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in french are ","<br>",
        $days1[0],"<br>",
        $days1[1],"<br>",
        $days1[2],"<br>",
        $days1[3],"<br>",
        $days1[4],"<br>",
        $days1[5],"<br>",
        $days1[6],"<br>",
        "</p>";
    ?>
</body>
</html>