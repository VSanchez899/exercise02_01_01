<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp conversion</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>Temp conversion</h2>
<?php
//     $counter = 1;
//     $fahrenhiet = array();
//     while($counter<101) {
//     $fahrenhiet[] = $i;
//     ++$counter;
// }
// for ($i=0; $i < count($fahrenhiet); $i++) { 
//     echo "$fahrenhiet<br>";
// }   

$counter = 1;
        $numbers = array();
        while ($counter < 101) {
            $numbers[] = $counter;
            ++$counter;
        }
        foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        }

        $counter = 1;
        $numbers = array();
        while ($counter < 101) {
            $numbers[] = $counter;
            ++$counter;
        }
        foreach ($numbers as $currentNum) {
            echo "'$currentNum-32'<br>";
        }
?>
</body>
</html>