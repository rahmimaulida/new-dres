<?php
include('../config.php');

if(isset($_POST['submit'])){
    $sector=$_POST['sector'];
    $date=$_POST['date'];
    $part_no=$_POST['part_no'];
    $issue=$_POST['issue'];
    $action=$_POST['action'];
    $when=$_POST['when'];
    $status=$_POST['status'];
    $pic=$_POST['pic'];

    $qry=mysql_query("INSERT INTO tbl_action VALUES('','$sector','$date','$part_no','$issue','$action','$when','$status','$pic')");

    header("location:viewaction.php?success");
}


?>