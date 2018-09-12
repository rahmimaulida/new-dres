<?php
session_start();
include ('../config.php');

if(isset($_POST['submit'])){
    $query = mysql_query("SELECT no_ticket FROM tbl_prod_reject order by no_ticket DESC LIMIT 1");
    $ticket = mysql_fetch_array($query);
    $get = $ticket['no_ticket'] + 1;
    $date = date("Y-m-d h:i:s");
    $info = "Ticket ".$get." Success Added By ".$_SESSION['name']." At ".$date."";
    $codeinfo = "Add";


    $notif = "Ticket No.".$get." Need Your Approval";

    $url= "product_reject.php";

    $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
    $s = mysql_fetch_array($t);

    $username=	$_SESSION['username'];

    $insert = "INSERT INTO `tbl_prod_reject`(`no_ticket`, `material_name`,`material_description`, `qty`, `plant`, `sector`, `line`, `issue`, `amount`, `action`, `status`, `pic`, `insertedBy`, insertDate) SELECT ".$get.", `material_name`, `material_description`, `qty`, `plant`, `sector`, `line`, `issue`, `amount`, `action`, `status`, `pic`, `insertedBy`, '".$date."' FROM `tempreject_".$_SESSION['username']."`";
    $qry = mysql_query($insert) or die(mysql_error());

    $sqlGambar= mysql_query("select * from gambar order by id desc limit 1");
    $tampilkanGambar= mysql_fetch_array($sqlGambar);

    $approve = mysql_query("INSERT INTO `tbl_approve` (`no_ticket`, `li_name`, `li_date`, `gambar`) VALUES('".$get."','".$_SESSION['name']."','".$date."','".$tampilkanGambar['gambar']."')") or die(mysql_error());

    $history = mysql_query("INSERT INTO tbl_history VALUES('','".$get."','".$info."','".$date."','".$codeinfo."')");

    $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
    $s = mysql_fetch_array($t);

    $pic = mysql_query("SELECT * from `tempreject_".$_SESSION['username']."`");
    $qryPIC= mysql_fetch_array($pic);

    $notif =mysql_query("INSERT INTO tbl_notif (`id_notif`, `PIC`, `link`, `date`, `status`, `position`, `sector`)
            values('', '".$qryPIC['pic']."', '".$url."', '".$date."', 0, 'CS&Q Engineer', '".$s['sector']."')");

    if($qry){
        $droptbl = mysql_query("DROP TABLE IF EXISTS `tempreject_".$_SESSION['username']."`");
        header("location: product_reject.php");
    }
}
header("location: add_reject.php");

?>
