<?php
require("../../config.php");
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
<?php 
$userData = array();

if (isset($_POST['submit'])) {
  if ($_POST['lastName'] != '' && $_POST['firstName'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repeatPassword'] != '') {
    if ($_POST['password'] == $_POST['repeatPassword']) {

      $userData = array(
        'Фамілія' => $_POST['lastName'],
        'Ім\'я' => $_POST['firstName'],
        'Email' => $_POST['email'],
        'Пароль' => $_POST['password']
      );

      // Display the user data in a table using the foreach construct
      echo '<table>';
      foreach ($userData as $key => $value) {
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
      }
      echo '</table><br><br><hr><br>';

    } else {
      echo '<p style="color: blue">Паролі не збігаються.</p>';
    }

  } else {
    echo '<p style="color: red">Будь ласка, заповніть всі поля.</p>';
  }

}
?>

<form method="post">
  Фамілія: <input type="text" name="lastName"><br><br>
  Ім'я: <input type="text" name="firstName"><br><br>
  Email: <input type="email" name="email"><br><br>
  Пароль: <input type="password" name="password"><br><br>
  Повторити пароль: <input type="password" name="repeatPassword"><br><br>
  <input type="submit" name="submit" value="Finish">
</form>

    <h3 class='back'><a href='../lab4.php'>Назад</a></h3>
</body>
</html>