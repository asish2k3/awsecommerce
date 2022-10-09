<?php  

$sname = "localhost";
$uname = "id19676470_qwerty";
$password = "!0/uIaqFzcX*57O0";

$db_name = "id19676470_1";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
