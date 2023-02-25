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
    <title>Приклад циклу For</title>
</head>
<body>
<?php
echo "<table>";
for($distance = 50; $distance <= 250; $distance += 50)
{
	echo "<tr>\n <td align='right'>$distance</td>\n";
	echo "  <td align=right'>".$distance."</td>\n</tr>\n";
}
echo "</table>";
?>
<h3 class='back'><a href='../lab1.php' >Назад</a></h3>

</body>
</html>