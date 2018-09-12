<?php
session_start();
include('../config.php');

$id = $_GET['id'];
$ticket = $_GET['ticket'];
$material = $_GET['mat'];
$date = date("Y-m-d h:i:s");
$info = "Material ".$material." Has Been Deleted By ".$_SESSION['name']." At ".$date;

$qry = mysql_query("DELETE FROM tbl_prod_reject WHERE id_reject = '$id'");
$history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Delete')");

header("location: product_reject.php?delete=success&ticket=".$ticket);

?>