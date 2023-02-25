<?php
require("../../config.php");
require("../functions/functions2.php");
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 6</title>
</head>
<body>
   <?php
   echo "<h2>Варіант 5</h2>";
   londest_word();

   echo "<h2>Варіант 6</h2>";
   count_words();

   echo "<h2>Варіант 7</h2>";
   remove_repeted();

   ?>
    <h3 class='back'><a href='../lab5.php'>Назад</a></h3>
</body>
</html>