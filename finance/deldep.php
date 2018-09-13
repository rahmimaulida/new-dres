<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_department WHERE id = '$id'");

header("location: departmentview.php?success");

?>
