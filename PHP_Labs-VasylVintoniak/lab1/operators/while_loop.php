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
    <title>Приклад циклу While</title>
</head>
<body>
<?php
$var=1;
while($var <= 5)
{
	echo $var.'<br />';
	$var++;
}
?>
<h3 class='back'><a href='../lab1.php' >Назад</a></h3>
</body>
</html>