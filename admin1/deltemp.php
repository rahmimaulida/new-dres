<?php 
session_start();
include('../config.php');

$id_reject = $_POST['id_reject'];

$qry = mysql_query("DELETE FROM tempreject_".$_SESSION['username']." WHERE id_reject = '".$id_reject."'");
?>