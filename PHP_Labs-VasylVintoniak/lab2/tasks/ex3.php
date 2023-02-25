<?php
require("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <?php 

    echo "<form action='ex3.php' method='post'>
    Уведіть перше число: <input type='text' name='num1'><br><br>
    Уведіть друге число: <input type='text' name='num2'><br><br><hr><br>    
    <input type='submit' value='Перевірити і вирахувати'><br><br><hr><br>
    </form>";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if(!empty($_POST['num1']) && !empty($_POST['num1'])) {
        if (ctype_digit($num1) && ctype_digit($num2)) {
            echo "<p>Числа натуральні</p><br><hr><br>";
            
            if($num1 - $num2 > 2) {
                echo "<p>Результат функції = ".$num1 - pow($num2, 2)."</p>";
            }
            elseif($num1 > 0) {
                echo "<p>Результат функції = ".$num1 / $num2."</p>";
            }
            else {
                echo "<p>Результат функції = ".pow($num1, 3) - pow($num2, 2)."</p>";  
            }

            echo "<p>X = ".$num1."</p>";
            echo "<p>Y = ".$num2."</p>";
        }
        else {
            echo "<p>Числа не натуральні</p><br><hr><br>";
        }
    }

    ?>
    <h3 class='back'><a href='../lab2.php'>Назад</a></h3>
</body>
</html>