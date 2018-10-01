<?php
include('../config.php');

$id = $_GET['id'];

$qry = mysql_query("DELETE FROM tbl_action WHERE id_action = '$id'");

header("location: viewaction.php?success");

?>