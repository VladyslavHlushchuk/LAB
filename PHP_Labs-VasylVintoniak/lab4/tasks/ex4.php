<?php
require("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 4</title>
</head>
<body>
<?php 
$countries = array(
    "USA" => array(
        "name" => "Сполучені Штати Америки",
        "capital" => "Вашингтон",
        "population" => 331.4
    ),
    "Japan" => array(
        "name" => "Японія",
        "capital" => "Токіо",
        "population" => 126.5
    ),
    "UK" => array(
        "name" => "Велика Британія",
        "capital" => "Лондон",
        "population" => 68.2
    ),
    "Ukraine" => array(
        "name" => "Україна",
        "capital" => "Київ",
        "population" => 40
    )
);

echo "<table>";
echo "<tr><th>Назва</th><th>Столиця</th><th>Населення, мільони людей</th></tr>";
foreach ($countries as $key => $value) {
    echo "<tr><td>" . $value['name'] . "</td><td>" . $value['capital'] . "</td><td>" . $value['population'] . "</td></tr>";
}
echo "</table>";

echo "<br><br><hr><br>";

foreach ($countries as $key => $value) {
    echo "<br>Столицею " . $value['name'] . " являється " . $value['capital'] . ", населення складає " . $value['population'] . " мільйонів.<br>";
}

echo "<br><br><hr><br>";

ksort($countries);
foreach ($countries as $key1 => $value1) {
    echo $key1 . ":<br>";
    ksort($value1);
    foreach ($value1 as $key2 => $value2) {
        echo $key2 . "=>" . $value2 . "<br><br>";
    }
}
echo "<br><br><hr><br>";
echo "<pre>";
print_r($countries);
echo "</pre>";

?>
    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>