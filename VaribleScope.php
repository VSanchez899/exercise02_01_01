<!DOCTYPE html>
<html>
<head>
    <!--
        Exercise 02_01_01

        Author: Vincent Sanchez
        Date: 9.10.18

        PHPCodeBlocks.php

     -->


    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizer.custom.85897.js"></script>
</head>
    
<body>
    <p>
    <h3>Varible scope</h3>
    <?php
        $globalVarible = "global Varible";

        function scopeExample(){
            $localVarible = "local varible";
            echo "<p>This is a $localVarible</p>";
        }

        function globalExample(){
            global $globalVarible;
            echo "<p>This is a $globalVarible</p>";
        }
        //main program
        scopeExample();
        echo "<p>This is a $globalVarible</p>";
        globalExample();
    ?>
    </p>
</body>
</html>