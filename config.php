<?php
$server = "localhost";
$uname = "root";
$pass = "";
$db = "db_dres";

$connect = mysql_connect($server, $uname, $pass);
$conn = mysql_select_db($db);
date_default_timezone_set("Asia/Jakarta");
?>