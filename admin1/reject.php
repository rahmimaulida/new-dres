<?php
session_start();
include("../config.php");

if(isset($_POST['reject'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $date = date("Y-m-d h:i:s");
    $info = "Ticket No.".$ticket." Has Rejected By ".$_SESSION['name']." at ".$date;
    $change = "Ticket No.".$ticket." Has Update Status From Approved To Reject By ".$_SESSION['name']." at ".$date;
    $com = "Ticket No.".$ticket." Has Update Comments By ".$_SESSION['name']." at ".$date;
    $check = mysql_query("SELECT mgr_name, mgr_date, mgr_com, mgr_status FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);


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

        $qry = mysql_query("UPDATE tbl_approve SET mgr_name='".$_SESSION['name']."', mgr_com='".$comment."', mgr_date='".$date."', mgr_status='Reject' WHERE no_ticket='$ticket'");

        header("location: product_reject.php");
    }
}
?>
