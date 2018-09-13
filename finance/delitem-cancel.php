<?php
session_start();
include('../config.php');

$id = $_GET['id'];
$ticket = $_GET['ticket'];
$material = $_GET['material'];
$date = date("Y-m-d h:i:s");
$info = "Request to Delete Material ".$material." Has Been Rejected By ".$_SESSION['name']." At ".$date;

$qry = mysql_query("UPDATE tbl_prod_reject SET statusdel = 0 WHERE id_reject = '$id'");
$history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Delete')");

header("location: product_reject.php?delete=success&ticket=".$ticket);

?>