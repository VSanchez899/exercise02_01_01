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
        //addtion
        $x = 100;
        $y = 200;
        $returnValue = $x + $y;
        echo "<h2>Addition</h2>";
        echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";
        //subtraction
        $x = 10;
        $y = 7;
        $returnValue = $x - $y;
        echo "<h2>Subtraction</h2>";
        echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";
        //division
        $x = 24;
        $y = 3;
        $returnValue = $x / $y;
        echo "<h2>Division</h2>";
        echo '<p>$returnValue after Division expression: ', $returnValue, "</p>";
        //modulus
        $x = 10;
        $y = 7;
        $returnValue = $x % $y;
        echo "<h2>Modulus</h2>";
        echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>";
        //unary
        echo "<h2>Unary increment: Prefix Notation</h2>";
        $studentID = 100;
        $curStudentID = ++$studentID;
        echo "The first student ID is : ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The secound student ID is : ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The third student ID is : ", $curStudentID, "<br>";
        
        
        echo "<h2>Unary increment: Postfix Notation</h2>";
        $studentID = 100;
        $curStudentID = $studentID++;
        echo "The first student ID is : ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The secound student ID is : ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The third student ID is : ", $curStudentID, "<br>";

//assignment operators
        echo "<h1>Assignment Operators</h1>";
        $number = 100;
        $number += 50;
        echo '$number: ', $number;

        echo "<h1>Conditional Operators</h1>";
        $value1 = "First text string";
        $value2 = "second text string";
        $returnValue = ($value1 == $value2) ? "true" : "false";
        echo '$returnValue is: ', $returnValue;
    ?>
</body>
</html>