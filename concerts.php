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
    <title>Hello world</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizer.custom.85897.js"></script>
</head>
    
<body>
    <p>
    <h1>Central Valley civic Center</h1>
    <h2>Summer Concert Season</h2>
    <?php
        $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie raitt", "James Taylor", "Alicia Keys");
        $concerts[] = "Bob Dylan";
        $concerts[] = "Ryan Cabrera";

        echo "<p>The following ", count($concerts), " concerts are scheduled:</p><p>";
        echo "$concerts[0]<br>";
        echo "$concerts[1]<br>";
        echo "$concerts[2]<br>";
        echo "$concerts[3]<br>";
        echo "$concerts[4]<br>";
        echo "$concerts[5]<br>";
        echo "$concerts[6]<br>";

        echo "<pre>";
        print_r($concerts);
        echo "<pre>";
        
        echo "<pre>";
        var_dump($concerts);
        echo "<pre>";
    ?>
    </p>
</body>
</html>