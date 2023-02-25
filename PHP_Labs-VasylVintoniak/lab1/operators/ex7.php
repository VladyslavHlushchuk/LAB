<?php
require("../../config.php");
header("Content-Type: text/html; charset=".$config['charset']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №7</title>
</head>
<body>
    <?php
    $temp1 = $_POST['temp1']; 
    $temp2 = $_POST['temp2']; 
    $temp3 = $_POST['temp3']; 

    echo "<p>Уведіть три цілі значення температур:</p><br>";
    echo "<form action='ex7.php' method='post'>
    температура 1: <input type='text' name='temp1' placeholder='Уведіть ціле число'><br><br>
    температура 2: <input type='text' name='temp2' placeholder='Уведіть ціле число'><br><br>
    температура 3: <input type='text' name='temp3' placeholder='Уведіть ціле число'><br><br>
    <hr><br>
    <p>Уведіть, що ви бажаєте побачити: <input type='text' name='choice'></p>
    <ul>
    <li>1) обчислення максимальної температури</li>
    <li>2) обчислення мінімальної температури</li>
    <li>3) обчислення середньої температури</li>
    </ul>
    <hr><br>
    <input type='submit' value='Показати Результат'>
    <br><br><hr><br>
    </form>";

    if(!empty($_POST["choice"])) {
        $num = $_POST['choice']; 

    switch ($num) {
	case '1':
        $res = max($temp1, $temp2, $temp3);
        echo "Результат: <input type='text' value='$res'>";
		break;
	case '2':
        $res = min($temp1, $temp2, $temp3);
        echo "Результат: <input type='text' value='$res'>";
		break;
	case '3':
        $res = ($temp1 + $temp2 + $temp3) / 3;
        echo "Результат: <input type='text' value='$res'>";
		break;
	default:
		echo "Некоректно введені дані, повторіть спробу";
		break;
}
    }

    ?>
    <h3 class='back'><a href='../lab1.php' >Назад</a></h3>
</body>
</html>