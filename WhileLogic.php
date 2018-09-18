<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Logic</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>While Logic</h2>
    <?php
        $counter = 1;
        $numbers = array();
        while ($counter < 101) {
            $numbers[] = $counter;
            ++$counter;
        }
        foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        }
    ?>
</body>
</html>