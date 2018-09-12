<?php
include("../config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $threshold = $_POST['threshold'];
    $qry = mysql_query("UPDATE tbl_threshold SET threshold='".$threshold."' WHERE id_threshold='".$id."'") or die(mysql_error());
    header("location: threshold.php");
}
?>