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
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Approved')");
        }else if($res['eng_status'] == 'Reject'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."','".$date."','Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."','".$date."','Update Comment')");
        }

        $qry = mysql_query("UPDATE tbl_approve SET spv='".$_SESSION['name']."', spv_com='".$comment."', spv_date='".$date."', spv_status='Approved' WHERE no_ticket='$ticket'");

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

    if($res['spv_com'] == $comment && $res['spv_status'] == 'Reject'){
        header("location: product_reject.php?failed");
    }else{
        if($res['spv'] == '' || $res['spv_date'] == '' || $res['spv_com'] == '' || $res['spv_status'] == ''){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Reject')");
        }else if($res['eng_status'] == 'approved'){
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$change."','".$date."','Update Status')");
        }else{
            $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$com."','".$date."','Update Comment')");
        }

        $qry = mysql_query("UPDATE tbl_approve SET spv='".$_SESSION['name']."', spv_com='".$comment."', spv_date='".$date."', spv_status='Reject' WHERE no_ticket='$ticket'");

        header("location: product_reject.php?success");
    }
}
?>
