<?php
session_start();
include("../config.php");

if(isset($_POST['approve'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $date = date("Y-m-d h:i:s");
    $info = "Ticket No.".$ticket." Has Approved By ".$_SESSION['name']." at ".$date;
    $change = "Ticket No.".$ticket." Has Update Status From Reject To Approved By ".$_SESSION['name']." at " .$date;
    $com = "Ticket No.".$ticket." Has Update Comments By ".$_SESSION['name']." at ".$date;
    $check = mysql_query("SELECT eng_name, eng_date, eng_com, eng_status FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);

    if($res['eng_com'] == $comment && $res['eng_status'] == 'Approved'){
        header("location: product_reject.php?failed");
    }else{
        if($res['eng_name'] == '' || $res['eng_date'] == '' || $res['eng_com'] == '' || $res['eng_status'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."',now(),'Approved')");
        }else if($res['eng_status'] == 'Reject'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."',now(),'Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."',now(),'Update Comment')");
        }

        $qry = mysql_query("UPDATE tbl_approve SET eng_name='".$_SESSION['name']."', eng_com='".$comment."', eng_date=now(), eng_status='Approved' WHERE no_ticket='$ticket'");

        //$pic = mysql_query("SELECT * from `tbl_users` where");
        //$qryPIC= mysql_fetch_array($pic);
        $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
        $s = mysql_fetch_array($t);

        $url= "waiting_approval.php";
        $notif =mysql_query("INSERT INTO tbl_notif (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`)
                values('', '".$_SESSION['username']."', '".$url."', now(), 1, 'Supervisor (Support Function)', '".$s['sector']."')");
        header("location: product_reject.php?success");
    }
}

if(isset($_POST['reject'])){
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];
    $date = date("Y-m-d h:i:s");
    $info = "Ticket No.".$ticket." Has Rejected By ".$_SESSION['name']." at ".$date;
    $change = "Ticket No.".$ticket." Has Update Status From Approved To Reject By ".$_SESSION['name']." at ".$date;
    $com = "Ticket No.".$ticket." Has Update Comments By ".$_SESSION['name']." at ".$date;
    $check = mysql_query("SELECT eng_name, eng_date, eng_com, eng_status FROM tbl_approve WHERE no_ticket='$ticket'");
    $res = mysql_fetch_array($check);

    if($res['eng_com'] == $comment && $res['eng_status'] == 'Reject'){
        header("location: product_reject.php?failed");
    }else{
        if($res['eng_name'] == '' || $res['eng_date'] == '' || $res['eng_com'] == '' || $res['eng_status'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."',now(),'Reject')");
        }else if($res['eng_status'] == 'approved'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."',now(),'Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."',now(),'Update Comment')");
        }

        $qry = mysql_query("UPDATE tbl_approve SET eng_name='".$_SESSION['name']."', eng_com='".$comment."', eng_date=now(), eng_status='Reject', BackFrom='' WHERE no_ticket='$ticket'");

        header("location: product_reject.php?success");
    }
}
?>
