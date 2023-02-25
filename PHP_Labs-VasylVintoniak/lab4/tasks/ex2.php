<?php
require("../../config.php");
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
$fruits = array(
    "яблука" => "червоний",
    "банана" => "жовтий",
    "апельсина" => "оранжевий",
    "винограду" => "фіолетовий",
    "гранату" => "гранатовий",
    "лохини" => "синій"
);

foreach ($fruits as $key => $value) {
    echo "Колір $key $value. <br><br>";
}

?>
    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>