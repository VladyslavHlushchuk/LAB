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
    <title>Ex. 7</title>
</head>
<body>
<?php
$randNum = rand(1, 6);

switch ($randNum) {
	case 1:
		echo "Викликати функцію func1";
		break;
	case 2:
		echo "Викликати функцію func2";
		break;
	case 3:
		echo "Викликати функцію func3";
		break;
	default:
		echo "Некоректні дані";
}
?>

    <p><a href="ex7.php?randNum=<?php echo $randNum; ?>">Нажміть сюди, щоб перезагрузити сторінку з новим числом.</a></p>
    <h3 class='back'><a href='../lab3.php'>Назад</a></h3>
</body>
</html>