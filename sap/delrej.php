<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_prod_reject WHERE no_ticket = '$id'");

header("location: product_reject.php?success");

?>