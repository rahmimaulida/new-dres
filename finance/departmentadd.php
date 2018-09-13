<?php
include('../config.php');

if (isset($_POST['submit'])) {
    $department=$_POST['department'];
    $qry= "INSERT INTO tbl_department VALUES('','$department')";
    $result = mysql_query($qry) or die(mysql_error());
  }

header("location:departmentview.php?success");
?>
