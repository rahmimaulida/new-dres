<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_users WHERE userId = '$id'");

header("location: userview.php?success");

?>