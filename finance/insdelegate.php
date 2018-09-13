<?php
session_start();
include '../config.php';


    $id_delegate = "";
    $alternate_name = $_POST['alternate_name'];
    $reason = $_POST['reason'];
    $timestamp = date('Y-m-d G:i:s');
    $delegateFrom = $_SESSION['name'];

    $qry= "INSERT INTO tbl_delegate VALUES('".$id_delegate."', '".$alternate_name."', '".$reason."', '".$timestamp."', '".$delegateFrom."')";
    $result = mysql_query($qry) or die(mysql_error());
    header("location: delegateForm.php?success");

?>
