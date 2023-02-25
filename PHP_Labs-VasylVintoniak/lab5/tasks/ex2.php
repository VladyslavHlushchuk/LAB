<?php
require("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 2</title>
</head>
<body>
    <form method="post">
	    <label>Уведіть ім'я файла:</label>
	    <input type="text" name="filename" required>
	    <button type="submit" name="submit">Шукати</button>
	</form>

	<?php
	if (isset($_POST['submit'])) {
	    $filename = $_POST['filename'];
	    $filepath = __DIR__ . '/' . $filename;

	    if (!file_exists($filepath)) {
	        echo "Файл з ім'ям {$filename} у поточному каталозі не існує.";
	    } else {
	        echo "Файл з ім'ям {$filename} у поточному каталозі існує.<br>";
	        echo "Розмір файлу: " . filesize($filepath) . " байт<br>";
	        echo "Створено: " . date("D, d M Y H:i:s", filectime($filepath)) . "<br>";
	        echo "Last modified: " . date("D, d M Y H:i:s", filemtime($filepath)) . "<br>";
	        echo "Файл містить:<br>" . file_get_contents($filepath);
	    }
	}
	?>

	<p>Підказка: Цей php файл називається: <?php echo basename(__FILE__); ?></p>
    <h3 class='back'><a href='../lab5.php'>Назад</a></h3>
</body>
</html>