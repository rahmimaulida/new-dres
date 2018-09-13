<?php
include('../config.php');

if (isset($_POST['submit'])) {
    $sector=$_POST['sector'];
    $qry= "INSERT INTO tbl_sector VALUES('','$sector')";
    $result = mysql_query($qry) or die(mysql_error());
  }

header("location:sectorview.php?success");
?>
