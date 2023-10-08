<?php
require 'config.php';
$zm = 10;
echo "zm=$zm <br>";
?>
<html>

<title> My PHP</title>



<body>
    <h2>Програмування мовою PHP</h2>
    <h2>Глущук Владислав Леонідович</h2>
    <h2>Варіант 10</h2>
    <h3>Перелік лабораторних робіт: </h3>
    <div class="list">
        <ul>
            <dd><a href="lab1/lab1.php">PHP: lab1.php</a></dd><br>
            <dd><a href="lab2/lab2.php">PHP: lab2.php</a></dd><br>
            <dd><a href="lab3/lab3.php">PHP: lab2.php</a></dd><br>
            <dd><a href="PHP_JQ/phpJQ.php">PHP + JQ</a></dd><br>
            <dd><a href="lab8D/lab8.php">PHP+BD MySQL</a></dd><br>
        </ul>
    </div>

    <form action="lab1/lab1.php">
        <table border=0>
            <tr>
                <td>Login:</td>
                <td><input type='text' name='ULogin'></td>
            <tr>
            <tr>
                <td>Пароль:</td>
                <td><input type='password' name='Passw'></td>
            <tr>
            <tr>
                <td><input type='submit' value='Go' name='Send'></td>
                <td>&nbsp</td>
                </td>
            </tr>
        </table>
    </form>
    zm=10 <br>Zm= <br>zm=$zm <br>
</body>