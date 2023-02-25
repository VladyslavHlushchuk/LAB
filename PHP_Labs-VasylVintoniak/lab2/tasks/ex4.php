<?php
require("../../config.php");
require("../function.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag Quiz</title>
</head>
<body>
<?php 

echo "<div>
Запитання:<br>";

if (!isset($_SESSION['choice'])) {
	$_SESSION['choice'] = rand(1, 4); 
}
$choice = $_SESSION['choice'];

if ($choice == 1) { echo "<p>Натисніть, будь ласка, на прапор Вірменії</p>"; }
if ($choice == 2) { echo "<p>Натисніть, будь ласка, на прапор Бангладешу</p>"; }
if ($choice == 3) { echo "<p>Натисніть, будь ласка, на прапор Чилі</p>"; }
if ($choice == 4) { echo "<p>Натисніть, будь ласка, на прапор Грузії</p>"; }

echo "
	<form method='get'>
	<a href='ex4.php?action1'><img src='flags/Armenia.jpg' name='action1' width='200' height='200'></a>
	<a href='ex4.php?action2'><img src='flags/Bangladesh.jpg' name='action2' width='200' height='200'></a>
	<a href='ex4.php?action3'><img src='flags/Chile.jpg' name='action3' width='200' height='200'></a>
	<a href='ex4.php?action4'><img src='flags/Georgia.jpg' name='action4' width='200' height='200'></a>
	</form></div>";

if (isset($_GET['action1'])) {
	echo "
	<p><br><hr><br>Ви вибрали прапор Вірменії</p>
	<img src='flags/Armenia.jpg' width='200' height='200'></img>
	<br>";
	endResult($choice, 1);
}
elseif (isset($_GET['action2'])) {
	echo "
	<p><br><hr><br>Ви вибрали прапор Бангладешу</p>
	<img src='flags/Bangladesh.jpg' width='200' height='200'></img>
	<br>";
	endResult($choice, 2);
}
elseif (isset($_GET['action3'])) {
	echo "
	<p><br><hr><br>Ви вибрали прапор Чилі</p>
	<img src='flags/Chile.jpg' width='200' height='200'></img>
	<br>";
	endResult($choice, 3);
}
elseif (isset($_GET['action4'])) {
	echo "
	<p><br><hr><br>Ви вибрали прапор Грузії</p>
	<img src='flags/Georgia.jpg' width='200' height='200'></img>
	<br>";
	endResult($choice, 4);
}

echo "<h3><a href='ex4.php'>Спробувати ще раз</a></h3>"
?>
    
    <h3 class='back'><a href='../lab2.php'>Назад</a></h3>
</body>
</html>
