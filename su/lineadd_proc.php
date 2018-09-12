<?php
include('../config.php');

if (isset($_POST['submit'])) {
    $plant=$_POST['plant'];
    $sector=$_POST['sector'];
    $line=$_POST['line'];
    $qry= "INSERT INTO tbl_masterdata VALUES('','$plant','$sector','$line')";
    $result = mysql_query($qry) or die(mysql_error());
  }

header("location:lineview.php?success");
?>