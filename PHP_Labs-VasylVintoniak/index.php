<?php
require("config.php");
#include_once("db.php");
header("Content-Type: text/html; charset=".$config['charset']);
?>
<html>
<head>
    <title> Vintoniak Vasyl</title> 
</head>
<body>
    <form action="lab1/lab1.php">
    <table border=0><tr><td>Login:</td><td><input type='text' name='ULogin'></td><tr>
        <tr><td>Пароль:</td><td><input type='password' name='Passw'></td><tr>
        <tr><td><input type='submit' value='Go' name='Send'></td><td>&nbsp</td></td></tr> </table>
    </form>
    <h2>Програмування мовою PHP</h2>
    <p>Вінтоняк Василь Дмитрович</p>
    <p>Варіант 5</p>
    <h3>Перелік лабораторних робіт</h3>
    <div class="list">
        <ul>
            <li><a href="lab1/lab1.php">PHP: lab1.php</a></li><br>
            <li><a href="lab2/lab2.php">PHP: lab2.php</a></li><br>
            <li><a href="lab3/lab3.php">PHP: lab3.php</a></li><br>
            <li><a href="lab4/lab4.php">PHP: lab4.php</a></li><br>
            <li><a href="lab5/lab5.php">PHP: lab5.php</a></li><br>
            <li><a href="PHP_JQ/phpJQ.php">PHP + JQ</a></li><br>
            <li><a href="lab8D/lab8.php">PHP+BD MySQL</a></li><br>
        </ul>
    </div>
</body>
</html>
