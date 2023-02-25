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
    <title>Ex. 6</title>
</head>
<body>
   <form method="post">
		<label for="num-input">Уведіть натуральне число:</label>
		<input type="text" id="num-input" name="num" required>
		<input type="submit" value="Згенерувати Масив">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$num = $_POST["num"];

		if (is_numeric($num) && $num > 0 && is_int($num + 0)) {
            include_once "ex7.php";
			$array = generate_array($num);
			echo "<pre>";
			print_r($array);
			echo "</pre>";
		} else {
			echo "Ви ввели не натуральне число, спробуйте ще раз.";
		}
	}
	?>
    <h3 class='back'><a href='../lab3.php'>Назад</a></h3>
</body>
</html>