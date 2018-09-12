<?php 
session_start();
include ('../config.php');

if(isset($_POST['submit'])){
    $query = mysql_query("SELECT max(no_ticket) as ticket FROM tbl_prod_reject");
    $ticket = mysql_fetch_array($query);
    $get = $ticket['ticket'] + 1;
    $date = date("Y-m-d h:i:s");
    $info = "Ticket ".$get." Success Added By ".$_SESSION['name']." At ".$date."";
    $codeinfo = "Add";
    
    $insert = "INSERT INTO `tbl_prod_reject`(`no_ticket`, `material_name`, `qty`, `plant`, `sector`, `line`, `issue`, `amount`, `action`, `status`, `pic`, `insertedBy`, insertDate) SELECT ".$get.", `material_name`, `qty`, `plant`, `sector`, `line`, `issue`, `amount`, `action`, `status`, `pic`, `insertedBy`, '".$date."' FROM `tempreject_".$_SESSION['username']."`";
    $qry = mysql_query($insert) or die(mysql_error());
    
    $approve = mysql_query("INSERT INTO `tbl_approve` (`no_ticket`, `li_name`, `li_date`) VALUES('".$get."','".$_SESSION['name']."','".$date."')") or die(mysql_error());
    
    $history = mysql_query("INSERT INTO tbl_history VALUES('','".$get."','".$info."','".$date."','".$codeinfo."')");
    
    if($qry){
        $droptbl = mysql_query("DROP TABLE IF EXISTS `tempreject_".$_SESSION['username']."`");
        header("location: product_reject.php");
    }
}
header("location: product_reject.php");

?>