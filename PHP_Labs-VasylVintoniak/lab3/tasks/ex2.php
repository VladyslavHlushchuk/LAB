<?php
require("../../config.php");
require("../function/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 2</title>
</head>
<body>
<?php 
    for($i = 0; $i < 10; $i++) {
	$array[$i] = mt_rand(1,20);
	echo "<div> A[".$i."] =".$array[$i]."</div><br>";
    }

    $min = $array[0];
    $max = $array[0];

    for($i = 0; $i < 10; $i++) {
        if($array[$i] > $max) {
            $max = $array[$i];
            $indexMax = $i;
        }
        if($array[$i] < $min) {
            $min = $array[$i];
            $indexMin = $i;
        }
    }
    echo "<div>Мінімум: індекс - ".$indexMin.", значення - ".$min."</div><br>";
    echo "<div>Максимум: індекс - ".$indexMax.", значення - ".$max."</div><br>";
?>
    <h3 class='back'><a href='../lab3.php'>Назад</a></h3>
</body>
</html>