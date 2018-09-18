<?php
session_start();
include("../config.php");

if(isset($_POST['approve'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $date = date("Y-m-d h:i:s");
    $info = "Approved By ".$_SESSION['name']."";
    $change = "Status Updated From Approve To Reject By ".$_SESSION['name']."";
    $com = "Comments Updated By ".$_SESSION['name']."";
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

        $qry = mysql_query("UPDATE tbl_approve SET finance_mgr='".$_SESSION['name']."', finance_mgrCom='".$comment."', finance_mgrDate=now(), finance_mgrStatus='Approved' WHERE no_ticket='$ticket'");

                $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
                $s = mysql_fetch_array($t);

                $url= "product_reject.php";
                $notif =mysql_query("INSERT INTO tbl_notif (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`)
                        values('', '".$_SESSION['username']."', '".$url."', now(), 4, 'SAP Admin', '".$s['sector']."')");

        header("location: product_reject.php");
    }
}

?>
