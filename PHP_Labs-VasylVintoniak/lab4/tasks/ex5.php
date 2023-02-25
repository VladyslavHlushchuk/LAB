<?php
require("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 5</title>
</head>
<body>
<?php 
echo "<h2>Завдання 5.1</h2>";

$weights = array(
    'Team A' => array(55, 60, 62, 45, 51, 57, 59, 48, 54, 50),
    'Team B' => array(53, 49, 58, 57, 52, 46, 63, 56, 47, 61)
);

$countTeamA = 0;
$countTeamB = 0;

foreach ($weights as $team => $athleteWeights) {
    foreach ($athleteWeights as $weight) {
        if ($weight > 50 && $weight <= 57) {
            if ($team === 'Team A') {
                $countTeamA++;
            } else {
                $countTeamB++;
            }
        }
    }
}

if ($countTeamA > 0) {
    echo "<br>Кількість атлеток у команді А, вага яких між 50 і 57 кг: " . $countTeamA;
} else {
    echo "<br>У команді А немає атлеток, вага яких між 50 і 57 кг";
}

echo "\n";

if ($countTeamB > 0) {
    echo "<br>Кількість атлеток у команді Б, вага яких між 50 і 57 кг: " . $countTeamB;
} else {
    echo "<br>У команді Б немає атлеток, вага яких між 50 і 57 кг";
}

echo "<br><br><hr><br>";

echo "<h2>Завдання 5.2</h2>";

$students = array(
    array(
        'surname' => 'Вінтоняк',
        'math' => 80,
        'english' => 90,
        'history' => 75,
        'Physics' => 85
    ),
    array(
        'surname' => 'Білусяк',
        'math' => 75,
        'english' => 85,
        'history' => 95,
        'Physics' => 70
    ),
    array(
        'surname' => 'Уманців',
        'math' => 90,
        'english' => 80,
        'history' => 70,
        'Physics' => 95
    )
);

$highestMath = 0;
$highestEnglish = 0;
$highestHistory = 0;
$highestPhysics = 0;

foreach ($students as $student) {
    if ($student['math'] > $highestMath) {
        $highestMath = $student['math'];
    }
    if ($student['english'] > $highestEnglish) {
        $highestEnglish = $student['english'];
    }
    if ($student['history'] > $highestHistory) {
        $highestHistory = $student['history'];
    }
    if ($student['Physics'] > $highestPhysics) {
        $highestPhysics = $student['Physics'];
    }
}

echo "<table>";
echo "<tr><th>Фамілія</th><th>Математика</th><th>Англійська</th><th>Історія</th><th>Фізика</th></tr>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['surname'] . "</td>";
    if ($student['math'] === $highestMath) {
        echo "<td style='color: blue'>" . $student['math'] . "</td>";
    } else {
        echo "<td>" . $student['math'] . "</td>";
    }
    if ($student['english'] === $highestEnglish) {
        echo "<td style='color: blue'>" . $student['english'] . "</td>";
    } else {
        echo "<td>" . $student['english'] . "</td>";
    }
    if ($student['history'] === $highestHistory) {
        echo "<td style='color: blue'>" . $student['history'] . "</td>";
    } else {
        echo "<td>" . $student['history'] . "</td>";
    }
    if ($student['Physics'] === $highestPhysics) {
        echo "<td style='color: blue'>" . $student['Physics'] . "</td>";
    } else {
        echo "<td>" . $student['Physics'] . "</td>";
    }
    echo "</tr>";
}

echo "<tr><td>Середній бал </td>";
foreach ($students as $student) {
    $avr = ($student['math'] + $student['english'] + $student['history'] + $student['Physics']) / 4;
    echo "<td>" . $avr . "</td>";
}
echo "</tr>";
echo "</table>";


?>
    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>