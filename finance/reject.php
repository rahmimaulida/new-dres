<?php
session_start();
include("../config.php");

if(isset($_POST['reject'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $backto = $_POST['backTo'];
    $date = date("Y-m-d h:i:s");
    $info = "Rejected By ".$_SESSION['name']." ";
    $change = "Status Updated From Approve To Reject By ".$_SESSION['name']."";
    $com = "Comments Updated By ".$_SESSION['name']."";
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
        $qry = mysql_query("UPDATE tbl_approve SET mgr_name='', mgr_com='', mgr_date='', mgr_status='', finance_mgr='', finance_mgrCom='', finance_mgrDate='', finance_mgrStatus='', BackFrom = 'Finance Manager (Support Function) - $userku' WHERE no_ticket='$ticket'");

                $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
                $s = mysql_fetch_array($t);

                $url= "product_reject.php";
                $notif =mysql_query("INSERT INTO tbl_notif (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`)
                        values('', '".$_SESSION['username']."', '".$url."', now(), 24, 'CS&Q Manager', '".$s['sector']."')");
        header("location: product_reject.php");
    }
}
?>
