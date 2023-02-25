<?php
require("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <?php 

    echo "<form action='ex1.php' method='post'>
    Уведіть перше число: <input type='text' name='num1'><br><br>
    Уведіть друге число: <input type='text' name='num2'><br><br><hr><br>    
    <input type='submit' value='Вирахувати'><br><br><hr><br>
    </form>";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo $num1 . " - " . $num2 . " = " . ($num1 - $num2) . "<br>";
    echo $num1 . " * " . $num2 . " = " . ($num1 * $num2) . "<br>";
    echo $num1 . " % " . $num2 . " = " . ($num1 % $num2) . "<br>";
    ?>
    <h3 class='back'><a href='../lab2.php'>Назад</a></h3>
</body>
</html>