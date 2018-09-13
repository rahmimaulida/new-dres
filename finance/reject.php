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
    $check = mysql_query("SELECT finance_mgr, finance_mgrCom, finance_mgrDate, finance_mgrStatus FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);
    $userku =  $_SESSION['name'];


    if($res['finance_mgrCom'] == $comment && $res['finance_mgrStatus'] == 'Approved'){
        header("location: product_reject.php?failed");
    }else{
      if($res['finance_mgr'] == '' || $res['finance_mgrDate'] == '' || $res['finance_mgrCom'] == '' || $res['finance_mgrStatus'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Reject')");
          }else if($res['finance_mgrStatus'] == 'Reject'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."','".$date."','Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."','".$date."','Update Comment')");
        }
        $qry = mysql_query("UPDATE tbl_approve SET mgr_name='', mgr_com='', mgr_date='', mgr_status='', finance_mgr='', finance_mgrCom='', finance_mgrDate='', finance_mgrStatus='' WHERE no_ticket='$ticket'");
        header("location: product_reject.php");
    }
}
?>
