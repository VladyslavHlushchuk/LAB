<?php
function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4)
{
	echo "<h4> Результат виклику функції create_table2: </h4> border=$border";
	echo "<table border=$border  cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data); //    встановлює покажчик масиву на його початок
	$value=current($data);//current повертає поточний елемент масиву
	while($value)
	{
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
		//next - переміщують показник на елемент вперед на один елемент; 
		//next – спочатку змінює покажчик, потім – повертає значення, each–навпаки;
	}
	echo '</table>';
	echo"<div>Кількість параметрів:". func_num_args()."<br />";
	//Функція func_num_args() визначає, скільки аргументів було передано функції користувача
	$args = func_get_args();
	//func_get_args() повертає масив, який містить ці аргументи
	foreach ($args as $arg)
		echo $arg."<br/>";
	echo "</div>";
}

function factorial($n) {
    if ($n === 0) {
      return 0;
    } else {
      return $n + factorial($n - 1);
    }
  }

function fibonachi() {
$first = 3;
$second = 5;
$count = 16;

echo $first . "\n";
echo $second . "\n";

for ($i = 2; $i < $count; $i++) {
  $third = $first + $second;
  echo $third . "\n";
  $first = $second;
  $second = $third;
}

echo "<br><br>Кількість: " . $count;

}

function eachFive() {
    for ($i = -1; $i <= 51; $i += 5) {
        echo "<br>".$i . "<br>";
      }
}


// Для завдання 5.1
function print_reverse_arr($arr) {
    echo "Оригінальний масив:<br><br>";
    foreach ($arr as $index => $value) {
      echo "Індекс: $index, Значення: $value<br>";
    }
    
    echo "<br><br>Перевернутий масив:<br><br>";
    $reverse_arr = array_reverse($arr);
    foreach ($reverse_arr as $index => $value) {
      echo "Індекс: " . (count($arr) - $index - 1) . ", Значення: $value<br>";
    }
  }

// Для завдання 5.2
function generate_table() {
    $randnum = rand(0, 9);
    $N = ($randnum % 10 + 1) * 2;
  
    $table = array();
    for ($i = 0; $i < $N; $i++) {
      $row = array();
      for ($j = 0; $j < $N; $j++) {
        $row[] = rand(1, 100);
      }
      $table[] = $row;
    }
  
    echo "<table>";
    foreach ($table as $row) {
      echo "<tr>";
      foreach ($row as $value) {
        echo "<td>$value</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  
    $minRowValues = array();
    $lastColumnValues = array();

    for ($i = 0; $i < $N; $i++) {
      $minValue = $table[$i][0];
      for ($j = 0; $j < $N; $j++) {
        if ($table[$i][$j] < $minValue) {
          $minValue = $table[$i][$j];
        }
        if ($j == $N - 1) {
          $lastColumnValues[] = $table[$i][$j];
        }
      }
      $minRowValues[] = $minValue;
    }
  
    echo "<br>Мінімальне значення рядка: " . implode(", ", $minRowValues);
    echo "<br>Значення останньої стовпця: " . implode(", ", $lastColumnValues);
  }



  // Для Завдання 6
function generate_array($number) {
	$array = array();
	for ($i = 0; $i < $number; $i++) {
		$array[$i] = ($i+1) * ($i+1);
	}
	return $array;
}


  
  
?>
