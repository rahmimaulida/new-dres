<?php
session_start();
include('../config.php');

$id = $_GET['id'];
$ticket = $_GET['ticket'];
$material = $_GET['mat'];
$date = date("Y-m-d h:i:s");
$info = $_SESSION['name']." Propose to Delete Material ".$material." At ".$date;

$qry = mysql_query("UPDATE tbl_prod_reject SET statusdel = 1 WHERE id_reject = '$id'");
$history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Delete')");

header("location: product_reject.php?delete=success&ticket=".$ticket);

?>