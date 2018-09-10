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
    <h3>This is html</h3>
    <?php
        echo "This text is displayed using standard PHP delimiters.<br>";
        print "Second string";
        print ("<br>third string");
        echo "<h1>This is a" , " multiple argument string<h1>";
        echo ("<h1>This is a" . " multiple argument string<h1>");
        print ("<h2>this is some math: " . (2 + 3) . "<h2>");
    ?>
    </p>
</body>
</html>