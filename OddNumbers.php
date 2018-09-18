<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Numbers</title>
    <script src="moderizer.custom.658997.js"></script>
</head>
<body>
<h2>Odd Numbers</h2>
    <?php
    $intro2=("These are the even numbers only between 1 and 100: " . "<br><br>");
echo ($intro2); 
$i = 2;
while($i<101) 
{
    echo $i . ", ";
    $i+=2;
}   
$intro3=("<br><br>These are the odd numbers between 1 and 100: " . "<br><br>");
echo($intro3);
$i = 1;
while($i<100) 
{
    echo $i . ", ";
    $i+=2;
}   

    ?>
</body>
</html>