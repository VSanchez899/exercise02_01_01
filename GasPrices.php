<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Prices</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>Gas Prices</h2>
    <?php
        $gasPrice = 2.57;
        if ($gasPrice >= 2 && $gasPrice <= 3) {
            echo "<p>Gas prices are between $2.00 and $3.00</p>";
        }
        else {
            echo "Gas prices are not between $2.00 and $3.00";
        }
        
    ?>
</body>
</html>