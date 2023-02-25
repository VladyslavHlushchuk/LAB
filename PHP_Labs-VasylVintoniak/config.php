<?php
$config['charset'] = 'utf-8';
$config['default_lng'] = 'ua';
#$config_host_name=$config{'host_name'};
#include_once("db.php");
$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME']))); 
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix); 
echo "Last modified: $LastModified"."<br>";

?>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
<link rel='stylesheet' href='http://phppny.42web.io/css/style.css' type='text/css' media='screen, projection'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type='text/javascript' src='http://phppny.42web.io/js/my.js'></script>

</head>
<body>
<p id="main"> <a href='http://phppny.42web.io/index.php'>На головну</a> </p>

</body>
<?php
?>
