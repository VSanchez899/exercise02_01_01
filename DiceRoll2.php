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
    <title>Dice roll</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
    <h2>Dice Roll 2</h2>
    <?php
        $faceNameSingular = array("one", "two", "three", "four", "five", "six");
        $faceNamePlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
        $doubleCount = 0;
        $rollNumber = 1;
        define("NBR_ROLLS", 4);
    //this grabs the arrays and shows of there is a 
        function checkForDoubles($die1, $die2){
            global $faceNameSingular;
            global $faceNamePlural;
            $returnValue = false;
            echo "Die 1 : $die1<br>Die 2 : $die2<br>";

            if ($die1 === $die2) {
                echo "The roll was double ", $faceNamePlural[$die1 - 1], ".<br>";
                $returnValue = true;
            }
            else{
                echo "The roll was double ", $faceNameSingular[$die1 - 1], " and a ", $faceNameSingular[$die2 - 1], ".<br>";
                $returnValue = false;
            }
            return $returnValue;
        }
        //this hold the score
        function displayScoreText($score, $doubles){
            if ($doubles) {
                switch($score){
                case 2: {
                    echo "You rolled snake eyes!<br>";
                }
                case 12: {
                    echo "You rolled box cars!<br>";
                    break;
                }
              }
            } else{
            
           if ($score === 3) {
                echo "You rolled Loose Deuce!<br>";
            }
           else if ($score === 5) {
                echo "You rolled fever five!<br>";
            }
            else if ($score === 7) {
                echo "You rolled natural!<br>";
            }
            else if ($score === 9) {
                echo "You rolled nina!<br>";
            }
            else if ($score === 11) {
                echo "You rolled a yo!<br>";
            }
            else{
                echo "Your roll had no nickname<br>";
            }
          }
        }
        $dice = array();
        while ($rollNumber <= NBR_ROLLS ) {
        $dice[0] = rand(1,6);
        $dice[1] = rand(1,6);
        echo "<p>";
        $score = $dice[0] + $dice[1];
        echo "The total score for the roll was $score<br>";
        $doubles = checkForDoubles($dice[0], $dice[1]);
        displayScoreText($score, $doubles);
        echo "</p>";
        if ($doubles) {
            ++$doubleCount;
        }
            ++$rollNumber;
        }
        echo "<p>Doubles occured on $doubleCount of the " . NBR_ROLLS . " Rolls</p>";

    ?>
</body>
</html>