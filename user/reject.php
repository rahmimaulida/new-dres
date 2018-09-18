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
    $check = mysql_query("SELECT spv, spv_com, spv_date, spv_status FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);
    $userku =  $_SESSION['name'];


    if($res['spv_com'] == $comment && $res['spv_status'] == 'Approved'){
        header("location: product_reject.php?failed");
    }else{
      if($res['spv'] == '' || $res['spv_date'] == '' || $res['spv_com'] == '' || $res['spv_status'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Reject')");
          }else if($res['spv_status'] == 'Reject'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."','".$date."','Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."','".$date."','Update Comment')");
        }

          $qry = mysql_query("UPDATE tbl_approve SET spv='', spv_com='', spv_date='', spv_status='', eng_name='', eng_com='', eng_date='', eng_status='', BackFrom = 'Supervisor (Support Function) - $userku' WHERE no_ticket='$ticket'");
          //$qry = mysql_query("UPDATE tbl_approve SET spv='',spv_com='',spv_date='',spv_status='Reject', BackFrom = 'CS&Q Manager' , mgr_com = '$comment' WHERE no_ticket='$ticket'");}
          $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
          $s = mysql_fetch_array($t);

          $url= "waiting_approval.php";
          $notif =mysql_query("INSERT INTO tbl_notif (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`)
                  values('', '".$_SESSION['username']."', '".$url."', now(), 22, 'CS&Q Engineer', '".$s['sector']."')");
          header("location: product_reject.php");
    }
}
?>
