<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_sector WHERE id = '$id'");

header("location: sectorview.php?success");

?>
