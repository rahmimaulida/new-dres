<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_material WHERE id_material = '$id'");

header("location: materialview.php?success");

?>