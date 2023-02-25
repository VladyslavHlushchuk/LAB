<?php
require("../config.php");
//include_once("../db.php");
include_once("function.php");
header("Content-Type: text/html; charset=".$config['charset']);
?>
<html>
<H2>PHP. Робота з масивами</H2>
<!-- <?php
// $my_array = array('Рядок 1', 'Рядок 2','Рядок 3');
// create_table2($my_array,3,8,8);
?>

<a href="example2.php">Приклад 2. Пошук мін/мах значення архіву </a><br> -->
<ul>
    <li><a href="tasks/ex1.php">Завдання №1</a></li><br>
    <li><a href="tasks/ex2.php">Завдання №2</a></li><br>
    <li><a href="tasks/ex3.php">Завдання №3</a></li><br>
    <li><a href="tasks/ex4.php">Завдання №4</a></li><br>
    <li><a href="tasks/ex5.php">Завдання №5</a></li><br>
</ul>
<h3 class='back'><a href="../index.php">Повернутися в головне меню</a><br></h3>
</div>
</html>
