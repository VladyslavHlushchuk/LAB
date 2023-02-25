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
    <title>Ex. 5</title>
</head>
<body>
    <?php
    echo "<h2>Завдання 5.1</h2>";
    $arr = array(1, 2, 3, 4, 5);

    print_reverse_arr($arr);

    echo "<h2>Завдання 5.2</h2>";
    generate_table();
    ?>

    <h3 class='back'><a href='../lab3.php'>Назад</a></h3>
</body>
</html>