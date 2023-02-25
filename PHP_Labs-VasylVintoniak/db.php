<?php
$db_name	= 'm_dutchak';
$db_host	= 'localhost';
$db_user	= 'mdutchak';
$db_pass	= 'you_password';


$db_server = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name");
if (!$db_server) 
        die ("db.php: Error connect to db_server = $db_host, $db_user, $db_name <br>"); 

if ($db_server) {echo "db.php: good connect to db_server = $db_host, $db_user, $db_name <br>";}

$conn = mysqli_connect("hostname", "username", "password", "database");
mysqli_query($conn, "SET NAMES utf8");

?>