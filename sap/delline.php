<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_masterdata WHERE id_data = '$id'");

header("location: lineview.php?success");

?>