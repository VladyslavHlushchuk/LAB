<?php
require("../config.php");
//include_once("../db.php");
require("function/function.php");
header("Content-Type: text/html; charset=".$config['charset']);
?>
<html>
    <title>Lab 3</title>
<H2>Масиви у PHP. Багатократне використання коду. Створення функцій.</H2>
<ul>
    <p>Завдання №1</p>
    <?php
        $my_array = array('Рядок 1', 'Рядок 2','Рядок 3');
        create_table2($my_array,3,8,8);
        echo "<br><br>";
    ?> 
    <li><a href="tasks/ex2.php">Завдання №2</a></li><br>
    <li><a href="tasks/ex3.php">Завдання №3</a></li><br>
    <li><a href="tasks/ex4.php">Завдання №4</a></li><br>
    <li><a href="tasks/ex5.php">Завдання №5</a></li><br>
    <li><a href="tasks/ex6.php">Завдання №6</a></li><br>
    <li><a href="tasks/ex7.php">Завдання №7</a></li><br>
</ul>
<h3 class='back'><a href="../index.php">Повернутися в головне меню</a><br></h3>
</div>
</html>
