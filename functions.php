<!DOCTYPE html>
<html lang="en">
<head>
<!--
        Exercise 02_01_01

        Author: Vincent Sanchez
        Date: 9.10.18

        functions.php

     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
    <h2>Passing Parameters</h2>
    <?php
      function incrementByValue($countByValue){
        ++$countByValue;
        echo "<p>incrementByValue() value is $countByValue</p>";
      }

      function incrementByReference(&$countByReference){
        ++$countByReference;
        echo "<p>incrementByRefrence() value is $countByReference</p>";
      }
      //main program
      $count = 1;
      echo "<p>Main program starting value is $count</p>";
      incrementByValue($count);
      echo "<p>Main program after incrementByValue() is $count.</p>";
      
      $count = 1;
      echo "<p>Main program starting value is $count</p>";
      incrementByReference($count);
      echo "<p>Main program after incrementByReferemce() is $count.</p>";
    ?>
    <h2>Default Arguments</h2>
    <?php
        function paint($room = "office", $color = "red"){
            return "<p>The color of the {$room} is {$color}</p>";
        }

        // echo paint("blue");
        echo paint();
        echo paint("bedroom", "blue");
        echo paint("bedroom", null);
        echo paint("bedroom");
        echo paint("blue");
    ?>
</body>
</html>