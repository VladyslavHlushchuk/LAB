<?php
require("../../config.php");
require("my_topic.php");
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
$my_topic_swapped = array_flip($my_topic);

foreach ($my_topic_swapped as $index => $element) {
    echo "Індекс: $index, Елемент: $element <br><br>";
}
?>
    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>