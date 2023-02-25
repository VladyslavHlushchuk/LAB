<?php
require("../config.php");
// include_once("../function.php");
header("Content-Type: text/html; charset=".$config['charset']);
if (!empty($_GET["ULogin"])) {echo "<br>Значення переданої змінної ULogin ".$_GET["ULogin"];} else {echo "<br>zminna ULogin not fount";}
$ULogin=$_GET["ULogin"];
 ?>
<html>
<title>PHP</title> 
<body>
<h3>Приклади з теорії</h3>
<ul>
    <li><a href="operators/example1_1_5_1.php">Доступ до змінних форми post (приклад 1.1.5.1)</a></li><br>
    <li><a href="operators/example1_1_5_2.php">Доступ до змінних форми get (приклад 1.1.5.2)</a></li><br>
    <li><a href="operators/operator_if.php">if, eseif, else (приклади з 1.1.15, 1.1.16, 1.1.17, 1.1.18 )</a></li><br>
    <li><a href="operators/operator_switch.php">switch (приклад 1.1.19)</a></li><br>
    <li><a href="operators/while_loop.php">while loop (приклад 1.1.20)</a></li><br>
    <li><a href="operators/do_while.php">do while loop (приклад 1.1.22)</a></li><br>
    <li><a href="operators/for_loop.php">for loop (приклад 1.1.21)</a></li><br>
    <li><a href="operators/ex7.php">EX 7</a></li><br>
</ul>

<h3 class='back'><a href="../">Повернутися в меню</a><br></h3>
</div>
</body>
</html>
