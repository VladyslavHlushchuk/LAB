<?php
require("../../config.php");
require("../functions/functions.php");
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 5</title>
</head>
<body>
   <?php
   
   echo "<h2>5.1</h2>";
   alphabet_order("../files/vintoniakVasyl_text.txt");

   echo "<h2>5.2</h2>";
   frequnci_word("../files/vintoniakVasyl_text.txt");

   echo "<h2>5.3</h2>";
   longest_word("../files/vintoniakVasyl_text.txt");

   echo "<h2>5.4</h2>";
   shortest_word("../files/vintoniakVasyl_text.txt");

   echo "<h2>5.5</h2>";
   find_letter_in_word("../files/vintoniakVasyl_text.txt", "В");

   echo "<h2>5.6</h2>";
   change_letter("../files/vintoniakVasyl_text.txt");

   echo "<h2>5.7</h2>";
   random_paragraph();

   ?>
    <h3 class='back'><a href='../lab5.php'>Назад</a></h3>
</body>
</html>