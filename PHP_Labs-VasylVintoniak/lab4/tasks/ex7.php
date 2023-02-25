<?php
require("../../config.php");
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

<form method="post" action="ex7.php">
      <p>Який ваш улюблений колір?</p>
      <input type="radio" name="question1" value="red">Червоний<br>
      <input type="radio" name="question1" value="blue">Синій<br>
      <input type="radio" name="question1" value="green" checked>Смарагдовий<br>
      
      <p>Яка ваша улюблена тварина?</p>
      <input type="radio" name="question2" value="dog">Собака<br>
      <input type="radio" name="question2" value="cat" checked>Кіт<br>
      <input type="radio" name="question2" value="hamster">Хом'як<br>
      
      <p>Який з цих фруктів ви любите найбільше?</p>
      <select name="question3">
        <option value="apple">Яблука</option>
        <option value="banana">Банани</option>
        <option value="orange">Апельсини</option>
      </select>
      
      <p>Які з цих мов програмування ви знаєте?</p>
      <select name="question4[]" multiple>
        <option value="php">PHP</option>
        <option value="javascript">JavaScript</option>
        <option value="python">Python</option>
        <option value="ruby">Ruby</option>
      </select>
      
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>

    <br><hr><br>

<?php 

if (isset($_POST['submit'])) {

    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
  
    if (!empty($question1) && !empty($question2) && !empty($question3) && !empty($question4)) {
  
      echo 'Питання 1: ' . $question1 . '<br>';
      echo 'Питання 2: ' . $question2 . '<br>';
      echo 'Питання 3: ' . $question3 . '<br>';
      echo 'Питання 4: ' . implode(', ', $question4) . '<br>';
  
    } else {
      echo 'Будь ласка, дайте відповідь на всі запитання.';
    }
  }

?>
    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>