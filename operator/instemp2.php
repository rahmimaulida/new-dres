<?php
session_start();
include('../config.php');

$get = mysql_query("SELECT `plant`, `sector`, `line` FROM tbl_users WHERE `name`='".$_POST['pic']."'");
$fetch = mysql_fetch_array($get);

$getprice = mysql_query("SELECT `price` from tbl_material WHERE `material_name`='".$_POST['material_name']."'");
$fetchprice = mysql_fetch_array($getprice);

$id_reject = "";
$material_name = $_POST['material_name'];
$qty = $_POST['qty'];
$plant = $fetch['plant'];
$sector = $_POST['sector'];
$line = $_POST['line'];
$issue = $_POST['issue'];
$amount = $qty * $fetchprice['price'];
$action = "OPEN";
$status = "Not Yet Approved";
$pic = $_POST['pic'];
$insertedBy = $_SESSION['name'];

$tbl = mysql_query("SELECT 1 FROM tempreject_".$_SESSION['username']);

if($tbl !== FALSE){
    $getqty = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']." WHERE material_name = '".$material_name."' AND pic = '".$pic."'");
    $numqty = mysql_num_rows($getqty);
    if($numqty > 0){
        $res = mysql_fetch_array($getqty);
        $allget = $res['qty'] + $qty;
        $amountget = $res['amount'] + $amount;
        $update = mysql_query("UPDATE tempreject_".$_SESSION['username']." SET qty='".$allget."', amount='".$amountget."' WHERE material_name = '".$material_name."'");
    }else{
        $insert = mysql_query("INSERT INTO tempreject_".$_SESSION['username']." VALUES('".$id_reject."','".$material_name."','".$qty."','".$plant."','".$sector."','".$line."','".$issue."','".$amount."','".$action."','".$status."','".$pic."','".$insertedBy."')") or die(mysql_error());
    }
    
}else{
    $maketbl = "CREATE TABLE `tempreject_".$_SESSION['username']."`(`id_reject` int(11) AUTO_INCREMENT PRIMARY KEY,`material_name` varchar(100), `qty` int(11),`plant` varchar(6), `sector` varchar(30), `line` varchar(100), `issue` text, `amount` double, `action` varchar(5), `status` varchar(25), `pic` varchar(128), `insertedBy` varchar(128))";
    $tbltemp = mysql_query($maketbl) or die(mysql_error());
    $insert = mysql_query("INSERT INTO tempreject_".$_SESSION['username']." VALUES('".$id_reject."','".$material_name."','".$qty."','".$plant."','".$sector."','".$line."','".$issue."','".$amount."','".$action."','".$status."','".$pic."','".$insertedBy."')") or die(mysql_error());
}

?>