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
    $check = mysql_query("SELECT eng_name, eng_date, eng_com, eng_status FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);

    if($res['spv_com'] == $comment && $res['spv_status'] == 'Approved'){
        header("location: product_reject.php?failed");
    }else{
        if($res['spv'] == '' || $res['spv_date'] == '' || $res['spv_com'] == '' || $res['spv_status'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."',now(),'Approved')");
        }else if($res['eng_status'] == 'Reject'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."',now(),'Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."',now(),'Update Comment')");
        }

        $qry = mysql_query("UPDATE tbl_approve SET spv='".$_SESSION['name']."', spv_com='".$comment."', spv_date=now(), spv_status='Approved' WHERE no_ticket='$ticket'");

        $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
        $s = mysql_fetch_array($t);

        $url= "product_reject.php";
        $notif =mysql_query("INSERT INTO tbl_notif (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`)
                values('', '".$_SESSION['username']."', '".$url."', now(), 2, 'CS&Q Manager', '".$s['sector']."')");

        header("location: product_reject.php?success");
    }
}

?>
