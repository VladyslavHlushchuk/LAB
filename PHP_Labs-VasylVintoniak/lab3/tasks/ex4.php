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
    <title>Ex. 4</title>
</head>
<body>
    <?php
    echo "<h3>Завдання №5</h3><br>";
    echo "<p>Годинник б'є стільки разів, яка зараз година. Знайти та роздрукувати кількість ударів годинника від 00 год. до 15 год. включно.</p>";
    echo "Загальна кількість ударів годинника = ".factorial(15).'<br>';

    echo "<h3>Завдання №6</h3><br>";
    echo "<p>Знайти та роздрукувати ряд Фібоначчі починаючи з 5-го члену ряду і закінчуючи 20-м. Підрахувати їх кількість.</p>";
    echo fibonachi();

    echo "<h3>Завдання №7</h3><br>";
    echo "Знайти та роздрукувати кожне п'яте ціле число в ряді -1 до 51.";
    echo eachFive();
    ?>

    <h3 class='back'><a href='../lab3.php'>Назад</a></h3>
</body>
</html>