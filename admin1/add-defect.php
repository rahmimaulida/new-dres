<?php
include("../config.php");

$defcode = $_POST['defcode'];

$qry = mysql_query("INSERT INTO tbl_deflist VALUES('','".$defcode."')");

header("location: deflist.php");
?>