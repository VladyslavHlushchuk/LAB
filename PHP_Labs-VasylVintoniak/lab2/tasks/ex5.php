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
    <title>Flag Quiz mod</title>
</head>
<body>
<?php 

echo "<div>
Запитання:<br>";

$flags = array('flags/Armenia.jpg','flags/Bangkok.jpg','flags/Bangladesh.jpg','flags/Chile.jpg','flags/Georgia.jpg','flags/Litvy.jpg');

if (!isset($_SESSION['image'])) {
	shuffle($flags);	
	$_SESSION['image'] = $flags;
}
else {
	$flags = $_SESSION['image'];
}

if (!isset($_SESSION['choice'])) {
	$_SESSION['choice'] = rand(1, 4); 
}
$choice = $_SESSION['choice'];

if ($choice == 1) { echo "<p>Натисніть, будь ласка, на перше зображення</p>"; }
if ($choice == 2) { echo "<p>Натисніть, будь ласка, на друге зображення</p>"; }
if ($choice == 3) { echo "<p>Натисніть, будь ласка, на третє зображення</p>"; }
if ($choice == 4) { echo "<p>Натисніть, будь ласка, на четвертє зображення</p>"; }

echo "<form method='get'>";
for ($i = 1; $i < 5; $i++) {
	echo "<a href='ex5.php?action$i'><img src='$flags[$i]' name='action1' width='200' height='200'></a>
	";
}
echo "</form></div>";


if (isset($_GET['action1'])) {
	echo "
	<p>Ваш вибір:</p>
	<img src='$flags[1]' width='200' height='200'></img>
	<br>";
	endResult2($choice, 1);
}
elseif (isset($_GET['action2'])) {
	echo "
	<p>Ваш вибір:</p>
	<img src='$flags[2]' width='200' height='200'></img>
	<br>";
	endResult2($choice, 2);
}
elseif (isset($_GET['action3'])) {
	echo "
	<p>Ваш вибір:</p>
	<img src='$flags[3]' width='200' height='200'></img>
	<br>";
	endResult2($choice, 3);
}
elseif (isset($_GET['action4'])) {
	echo "
	<p>Ваш вибір:</p>
	<img src='$flags[4]' width='200' height='200'></img>
	<br>";
	endResult2($choice, 4);
}

echo "<h3><a href='ex5.php'>Спробувати ще раз</a></h3>";
?>
    
    <h3 class='back'><a href='../lab2.php'>Назад</a></h3>
</body>
</html>
