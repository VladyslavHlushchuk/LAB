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
    <title>Ex. 3</title>
</head>
<body>
    <?php
    $arr = array();
    for($i = 0; $i <= 5; $i++) {
      $arr[] = rand(1, 50); 
    }

    foreach ($arr as $current)
	    echo $current.'<sup>2</sup> = '.pow($current, 2).'<br/>'

    
    ?>
    <h3 class='back'><a href='../lab3.php'>Назад</a></h3>
</body>
</html>