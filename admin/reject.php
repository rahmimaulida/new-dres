<?php
session_start();
include("../config.php");

if(isset($_POST['reject'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $backto = $_POST['backTo'];
    $date = date("Y-m-d h:i:s");
    $info = "Ticket No.".$ticket." Has Rejected By ".$_SESSION['name']." at ".$date;
    $change = "Ticket No.".$ticket." Has Update Status From Approved To Reject By ".$_SESSION['name']." at ".$date;
    $com = "Ticket No.".$ticket." Has Update Comments By ".$_SESSION['name']." at ".$date;
    $check = mysql_query("SELECT mgr_name, mgr_date, mgr_com, mgr_status FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);
    $userku =  $_SESSION['name'];


    if($res['mgr_com'] == $comment && $res['mgr_status'] == 'Reject'){
        header("location: product_reject.php?failed");
    }else{
        if($res['mgr_name'] == '' || $res['mgr_date'] == '' || $res['mgr_com'] == '' || $res['mgr_status'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Reject')");
        }else if($res['mgr_status'] == 'approved'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."','".$date."','Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."','".$date."','Update Comment')");
        }

        if ($backto=='Supervisor (Support Function)'){
        $qry = mysql_query("UPDATE tbl_approve SET spv='',spv_com='',spv_date='',spv_status='Reject', BackFrom = 'CS&Q Manager' , mgr_com = '$comment' WHERE no_ticket='$ticket'");}
        elseif ($backto=='CS&Q Engineer'){
        $qry = mysql_query("UPDATE tbl_approve SET spv='',spv_com='',spv_date='',spv_status='reject',eng_name='',eng_com='',eng_date='',eng_status='reject', BackFrom = 'CS&Q Manager' , mgr_com = '$comment' WHERE no_ticket='$ticket'");}

        header("location: product_reject.php");
    }
}
?>
