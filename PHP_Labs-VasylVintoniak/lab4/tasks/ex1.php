<?php
require("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 1</title>
</head>
<body>
<?php 
$squares = array();
$cubes = array();

for ($i = 10; $i <= 20; $i++) {
    $squares[] = $i * $i;
}

for ($i = 1; $i <= 10; $i++) {
    $cubes[] = $i * $i * $i;
}

$mergedArr = array_merge($squares, $cubes);
echo "<pre>";
print_r($mergedArr);
echo "</pre>";
?>
    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>