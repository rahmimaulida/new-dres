<?php
include("../config.php");

$id = $_GET['id'];

$qry=mysql_query("DELETE FROM tbl_deflist WHERE id_defcode='".$id."'");

header("location: deflist.php");

?>