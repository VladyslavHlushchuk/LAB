<?php 

function endResult($choice, $action) {
	if ($choice == $action) echo "Це правильно";
	else echo "Це неправильно";
	unset($_SESSION['choice']);
}

function endResult2($choice, $action) {
	if ($choice == $action) echo "Це правильно";
	else echo "Це неправильно, спробуй ще раз";
	unset($_SESSION['choice']);
	unset($_SESSION['image']);
}
?>