<?php
session_start();
include("../config.php");

if(isset($_POST['approve'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $date = date("Y-m-d h:i:s");
    $info = "Ticket No.".$ticket." Has Approved By ".$_SESSION['name']." at ".$date;
    $change = "Ticket No.".$ticket." Has Update Status From Reject To Approved By ".$_SESSION['name']." at ".$date;
    $com = "Ticket No.".$ticket." Has Update Comments By ".$_SESSION['name']." at ".$date;
    $check = mysql_query("SELECT finance_mgr, finance_mgrCom, finance_mgrDate, finance_mgrStatus FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);

    if($res['finance_mgrCom'] == $comment && $res['finance_mgrStatus'] == 'Approved'){
        header("location: product_reject.php?failed");
    }else{
        if($res['finance_mgr'] == '' || $res['finance_mgrDate'] == '' || $res['finance_mgrCom'] == '' || $res['finance_mgrStatus'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Approved')");
        }else if($res['finance_mgrStatus'] == 'Reject'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."','".$date."','Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."','".$date."','Update Comment')");
        }

        $qry = mysql_query("UPDATE tbl_approve SET finance_mgr='".$_SESSION['name']."', finance_mgrCom='".$comment."', finance_mgrDate='".$date."', finance_mgrStatus='Approved' WHERE no_ticket='$ticket'");

        header("location: product_reject.php");
    }
}

?>
